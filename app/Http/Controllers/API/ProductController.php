<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    final public function index(): JsonResponse
    {
        $products = Product::all();

        return response()->json([
            'success' => true,
            'products' => $products
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'category_id' => 'required|integer',
            'author_id' => 'required|integer',
            'list_price' => 'required|double',
            'stock_quantity' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        Product::query()->create(
            $request->only(
                'title',
                'category_id',
                'author_id',
                'list_price',
                'stock_quantity',
            )
        );

        return response()->json(['success' => true, 'message' => 'Product created successfully']);
    }

    public function show($id): JsonResponse
    {
        $product = Product::query()->find($id);
        if ($product && is_object($product)) {
            return response()->json(['success' => true, 'product' => $product]);
        }

        return response()->json(['success' => false, 'message' => 'Product not found!']);
    }

    public function update(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|integer',
            'title' => 'required|string',
            'category_id' => 'required|integer',
            'author_id' => 'required|integer',
            'list_price' => 'required|double',
            'stock_quantity' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $productId = $request->id;

        $product = Product::query()->find($productId);

        if ($product && is_object($product)) {
            $product->update(
                $request->only(
                    'title',
                    'category_id',
                    'author_id',
                    'list_price',
                    'stock_quantity',
                )
            );
            return response()->json(['success' => true, 'product' => $product]);
        }

        return response()->json(['success' => false, 'message' => 'Product not found!']);
    }

    public function destroy($id): JsonResponse
    {
        $product = Product::query()->find($id);

        if ($product && is_object($product)) {
            $product->delete();
            return response()->json(['success' => true, 'message' => 'Product deleted successfully']);
        }

        return response()->json(['success' => false, 'message' => 'Product not found!']);
    }
}
