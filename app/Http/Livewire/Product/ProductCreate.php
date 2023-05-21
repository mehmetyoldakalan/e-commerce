<?php

namespace App\Http\Livewire\Product;

use App\Models\ProductCategory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ProductCreate extends Component
{
    /**
     * @return View
     */
    public function render(): View
    {
        $productCategories = ProductCategory::all();
        return view('livewire.product.product-create', compact('productCategories'));
    }

    /**
     * @param $title
     * @return void
     */
    public function addProductCategory($title): void
    {
        if ($title) {
            ProductCategory::query()->create(['title' => $title]);

            $this->dispatchBrowserEvent('alert', [
                'type' => 'success',
                'message' => __('alerts.product_category_successfully_created')
            ]);
        }
    }
}
