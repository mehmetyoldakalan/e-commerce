<?php

namespace App\Http\Controllers;

use App\Models\ProductImage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Throwable;

class ProductImageController extends Controller
{
    public function create(Request $request, int $productId): bool|RedirectResponse
    {
        try {
            foreach ($request->image as $key => $image) {
                $ext = $image->getClientOriginalExtension();
                $fileName = time() . '.' . $image->getClientOriginalName();
                Storage::disk('local')->put('public/product-images/' . $fileName, File::get($image));
                ProductImage::query()->create([
                    'product_id' => $productId,
                    'image' => $fileName,
                    'arrangement' => $request->arrangement[$key]
                ]);
            }
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
            $productImages = ProductImage::query()->where('product_id', $productId);
            $productImages?->delete();
            return true;
        } catch (Throwable $throwable) {
            report($throwable);
            Log::error($throwable->getMessage());
            return back()->withErrors(['error' => __('alerts.error_during_process')]);
        }
    }
}
