<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            ProductCategory::query()->create($request->only('title'));
            return redirect()->action([self::class,'index']);
        }catch (\Throwable $throwable){
            report($throwable);
            return back()->withErrors(['error' => __('alerts.error_during_process')]);
        }
    }
}
