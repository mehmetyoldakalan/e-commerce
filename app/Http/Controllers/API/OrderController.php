<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Jobs\CreateOrderJob;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index(): JsonResponse
    {
        $orders = Order::all();

        return response()->json(['success' => true, 'orders' => $orders]);
    }

    public function show($id): JsonResponse
    {
        $order = Order::query()->find($id);
        if ($order && is_object($order)) {
            if ($order->offer_id) {
                $offer = Offer::query()->find($order->offer_id);
            }
            $product = Product::query()->find($order->product_id);
        }

        return response()->json([
            'order' => $order,
            'offer' => $offer ?? [],
            'product' => $product ?? []
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make(
            $request->all(),
            [
                'products' => 'required|array',
                'user_id' => 'required|integer'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        foreach ($request->products ?? [] as $productId => $productCount) {
            $product = Product::query()->find($productId);

            if (!$product || !self::stockControl($product, $request)) {
                return response()->json(['error' => 'Product not found or out of stock']);
            }

            $request->product_count = $productCount;

            dispatch(
                new CreateOrderJob(
                    $request->user_id,
                    $product->id,
                    $request->product_count,
                    self::applyDiscount($product, $request)
                )
            );
        }

        return response()->json(['success' => true]);
    }

    private static function highProfitCalculation(array $availableList, object $product): array
    {
        foreach ($availableList as $key => $item) {
            if (isset($item['free_product_for_min_product_count'])) {
                $profit[$key] = ($product->list_price) * $item['free_product_for_min_product_count'];
            }
            if (isset($item['discount_percentage'])) {
                $profit[$key] = ($product->list_price * $item['discount_percentage'] / 100);
            }
        }
        if (isset($profit)) {
            return array_keys($profit ?? [], max($profit ?? []));
        }
        return [];
    }


    private static function offerControl($product, $request): array
    {
        $offers = Offer::query()->orderBy('discount_percentage', 'desc')->get();

        foreach ($offers as $offer) {
            if ($offer->category_id) {
                if ($product->category_id === $offer->category_id && !isset($unset)) {
                    $availableTemp[$offer->id]['category'] = true;
                } elseif (isset($availableTemp[$offer->id])) {
                    $unset = true;
                    unset($availableTemp[$offer->id]);
                }
            }
            if ($offer->author_id) {
                if ($offer->author_id === $product->author_id && !isset($unset)) {
                    $availableTemp[$offer->id]['author'] = true;
                    if ($offer->discount_percentage) {
                        $availableTemp[$offer->id]['discount_percentage'] = $offer->discount_percentage;
                    }
                } elseif (isset($availableTemp[$offer->id])) {
                    $unset = true;
                    unset($availableTemp[$offer->id]);
                }
            }
            if ($offer->min_order_amount) {
                if ($offer->min_order_amount < $product->list_price && !isset($unset)) {
                    $availableTemp[$offer->id]['min_order_amount'] = true;
                    if ($offer->discount_percentage) {
                        $availableTemp[$offer->id]['discount_percentage'] = $offer->discount_percentage;
                    }
                } elseif (isset($availableTemp[$offer->id])) {
                    $unset = true;
                    unset($availableTemp[$offer->id]);
                }
            }
            if ($offer->min_product_count) {
                if ($offer->min_product_count <= $request->product_count && !isset($unset)) {
                    $availableTemp[$offer->id]['min_product_count'] = true;
                    if ($offer->discount_percentage) {
                        $availableTemp[$offer->id]['discount_percentage'] = $offer->discount_percentage;
                    }
                } elseif (isset($availableTemp[$offer->id])) {
                    $unset = true;
                    unset($availableTemp[$offer->id]);
                }
            }
            if ($offer->free_product_for_min_product_count && !isset($unset)) {
                $availableTemp[$offer->id]['free_product_for_min_product_count'] = $offer->free_product_for_min_product_count;
                if ($offer->discount_percentage) {
                    $availableTemp[$offer->id]['discount_percentage'] = $offer->discount_percentage;
                }
            }
            if ($offer->is_native) {
                if ($offer->is_native === $product->author->is_native && !isset($unset)) {
                    $availableTemp[$offer->id]['is_native'] = true;
                    if ($offer->discount_percentage) {
                        $availableTemp[$offer->id]['discount_percentage'] = $offer->discount_percentage;
                    }
                } elseif (isset($availableTemp[$offer->id])) {
                    unset($availableTemp[$offer->id]);
                }
            }
        }

        if (isset($availableTemp)) {
            return self::highProfitCalculation($availableTemp, $product);
        }

        return array();
    }


    private static function applyDiscount($product, object $request): array
    {
        $actualPrice = $product->list_price * $request->product_count;

        if ($actualPrice <= 50) {
            $cargoAmount = 10;
        } else {
            $cargoAmount = 0;
        }

        $offerId = self::offerControl($product, $request);

        if ($offerId) {
            $offer = Offer::query()->whereIn('id', $offerId)->first();
            if ($offer) {
                if ($offer->free_product_for_min_product_count && $request->product_count > 1) {
                    $discountedPrice = (($product->list_price * $request->product_count) - ($product->list_price)) + $cargoAmount;
                } elseif ($offer->discount_percentage) {
                    $discountedPrice = (($product->list_price * $request->product_count) - ($product->list_price * $request->product_count * $offer->discount_percentage / 100)) + $cargoAmount;
                }
            }
        }

        return [
            'actual_price' => $actualPrice + $cargoAmount,
            'discounted_price' => $discountedPrice ?? $actualPrice,
            'offer' => $offer->id ?? null
        ];
    }

    private static function stockControl(object $product, object $request): bool
    {
        return $request->product_count <= $product->stock_quantity;
    }


}
