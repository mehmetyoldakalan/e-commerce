<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', static function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->tinyText('cover_letter')->nullable();
            $table->longText('description')->nullable();
            $table->integer('category_id');
            $table->double('list_price')->default(0.0);
            $table->double('discounted_price')->nullable();
            $table->integer('stock_quantity')->default(0);
            $table->enum('is_active',[0,1])->default(1)->comment('1->active 0->passive');
            $table->integer('created_by');
            $table->string('created_by_ip');
            $table->integer('updated_by')->nullable();
            $table->string('updated_by_ip')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
