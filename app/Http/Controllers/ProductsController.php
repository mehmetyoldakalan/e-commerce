<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Trait\GetResourceRoutesTrait;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

class ProductsController extends Controller
{
    use GetResourceRoutesTrait;

    /**
     * @var string
     */
    public string $prefix;

    /**
     * @var array|null[]
     */
    public array $routes;

    /**
     * @var ProductAttributeController
     */
    private ProductAttributeController $productAttributeController;

    /**
     * @var ProductImageController
     */
    private ProductImageController $productImageController;

    /**
     * @var Product
     */
    private Product $model;

    public function __construct()
    {
        $this->prefix = 'app.product.';
        $this->routes = $this->routeList(self::class);
        $this->model = new Product();
        $this->productImageController = new ProductImageController();
        $this->productAttributeController = new ProductAttributeController();
    }

    /**
     * @return View
     * @throws AuthorizationException
     */
    public function index(): View
    {
        $this->authorize(__FUNCTION__, $this->model);
        $products = Product::all();
        return view($this->prefix . __FUNCTION__, [
            'routes' => $this->routes,
            'products' => $products
        ]);
    }

    /**
     * @return View
     * @throws AuthorizationException
     */
    public function create(): View
    {
        $this->authorize(__FUNCTION__, $this->model);

        return view($this->prefix . __FUNCTION__);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize(__FUNCTION__, $this->model);
        try {
            $product = Product::query()->create($request->only(Product::ALLOWED_LIST));
            $productAttributeController = new ProductAttributeController();
            $productImageController = new ProductImageController();
            $productAttributeController->create($request, $product->id);
            $productImageController->create($request, $product->id);

            return redirect()->action([self::class, 'index'])->with('alert', __('transaction_completed_successfully'));
        } catch (Throwable $throwable) {
            report($throwable);
            Log::critical($throwable->getMessage());
            return back()->withErrors(['error' => __('alerts.error_during_process')]);
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit(Product $product): View
    {
        $this->authorize(__FUNCTION__, $this->model);
        return view($this->prefix . __FUNCTION__, ['productId' => $product->id]);
    }

    /**
     * @param Request $request
     * @param ProductAttributeController $productAttributeController
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function update(Request $request, ProductAttributeController $productAttributeController): RedirectResponse
    {
        $this->authorize(__FUNCTION__, $this->model);

        if ($request->has('id')) {
            try {
                $product = Product::query()->find($request->id);
                $product->update($request->only(Product::ALLOWED_LIST));

                $this->productAttributeController->create($request, $product->id);
                if ($request->image) {
                    $this->productImageController->create($request, $product->id);
                }
                return redirect()->action([self::class, 'index'])->with(
                    'status',
                    __('alerts.transaction_completed_successfully')
                );
            } catch (Throwable $throwable) {
                report($throwable);
                Log::critical($throwable->getMessage());
                return back()->withErrors(['error' => __('alerts.error_during_process')]);
            }
        }
        return back()->withErrors(['error' => __('alerts.product_not_found')]);
    }

    /**
     * @param Product $product
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function destroy(Product $product): RedirectResponse
    {
        $this->authorize(__FUNCTION__, $this->model);
        try {
            $this->productAttributeController->destroyWithProduct($product->id);
            $this->productImageController->destroyWithProduct($product->id);
            $product?->delete();
            return redirect()->action([self::class, 'index'])->with(
                'status',
                __('alerts.transaction_completed_successfully')
            );
        } catch (Throwable $throwable) {
            report($throwable);
            Log::critical($throwable->getMessage());
            return back()->withErrors(['error' => __('alerts.error_during_process')]);
        }
    }


}
