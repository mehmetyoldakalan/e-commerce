<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OfferController extends Controller
{
    public function rulesForCreateOffer(): JsonResponse
    {
        $rules = array(
            'title' => 'required|string',
            'description' => 'required|string',
            'code' => 'required',
            'offer by category' => array(
                'category_id' => 'integer',
                'discount_percentage' => 'double',
            ),
            'offer by author' => array(
                'author_id' => 'integer',
                'is_native' => 'enum("native","foreign")',
                'discount_percentage' => 'double',
            ),
            'free product offer by number of products' => array(
                'min_product_count' => 'integer',
                'free_product_for_min_product_count' => 'integer'
            ),
            'offer by cart amount' => array(
                'min_order_amount' => 'double',
                'discount_percentage' => 'double',
            )
        );

        return response()->json($rules);
    }

    private static function onlyStoreList(): array
    {
        return array(
            'title',
            'description',
            'code',
            'category_id',
            'discount_percentage',
            'author_id',
            'is_native',
            'min_product_count',
            'free_product_for_min_product_count',
            'min_order_amount',
        );
    }


    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'code' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        try {
            Offer::query()->create($request->only(self::onlyStoreList()));
            return response()->json(['success' => true,'message' => 'transaction completed successfully']);
        } catch (\Throwable $throwable) {
            report($throwable);
            return response()->json(['error' => $throwable->getMessage()]);
        }
    }
}
