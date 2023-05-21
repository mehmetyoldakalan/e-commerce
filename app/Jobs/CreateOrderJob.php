<?php

namespace App\Jobs;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateOrderJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private int $userId;
    private int $productId;
    private int $productCount;
    private array $amountList;

    /**
     * Create a new job instance.
     */
    public function __construct($userId, $product_id, $product_count, $amountList)
    {
        $this->userId = $userId;
        $this->productId = $product_id;
        $this->productCount = $product_count;
        $this->amountList = $amountList;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Order::query()->create([
            'user_id' => $this->userId,
            'product_id' => $this->productId,
            'actual_price' => $this->amountList['actual_price'],
            'discounted_price' => $this->amountList['discounted_price'],
            'product_count' => $this->productCount,
            'offer_id' => $this->amountList['offer']
        ]);

        $product = Product::query()->find($this->productId);
        if ($product && is_object($product)) {
            $newStock = ($product->stock_quantity) - ($this->productCount);
            $product->update(['stock_quantity' => $newStock]);
        }
    }
}
