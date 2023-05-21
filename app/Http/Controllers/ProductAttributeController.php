<?php

namespace App\Http\Controllers;

use App\Models\ProductAttribute;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

class ProductAttributeController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request, int $productId): bool|RedirectResponse
    {
        try {
            ProductAttribute::query()->updateOrCreate([
                'product_id' => $productId
            ],
                array_merge($request->only(ProductAttribute::ALLOWED_LIST), ['product_id' => $productId])
            );
            return true;
        } catch (Throwable $throwable) {
            report($throwable);
            Log::error($throwable->getMessage());
            return back()->withErrors(['error' => __('alerts.error_during_process')]);
        }
    }

    public function destroyWithProduct($productId): bool|RedirectResponse
    {
        try {
            $productAttributes = ProductAttribute::query()->where('product_id', $productId);
            $productAttributes?->delete();
            return true;
        } catch (Throwable $throwable) {
            report($throwable);
            Log::error($throwable->getMessage());
            return back()->withErrors(['error' => __('alerts.error_during_process')]);
        }
    }

}
