<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ProductEdit extends Component
{
    /**
     * @var int
     */
    public int $productId;

    /**
     * @return View
     */
    public function render():View
    {
        $product = Product::query()->find($this->productId);
        $productCategories = ProductCategory::all();
        return view('livewire.product.product-edit', compact('productCategories', 'product'));
    }

    /**
     * @param $imageId
     * @return void
     */
    public function removeImage($imageId): void
    {
        $image = ProductImage::query()->find($imageId);
        $image?->delete();

        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>__('alerts.product_image_successfully_deleted')
        ]);
    }
}
