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
        Schema::create('offers', static function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('title');
            $table->text('description');
            $table->integer('category_id')->nullable();
            $table->integer('author_id')->nullable();
            $table->integer('min_product_count')->nullable();
            $table->integer('free_product_for_min_product_count')->nullable();
            $table->double('min_order_amount')->nullable();
            $table->double('discount_percentage')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
