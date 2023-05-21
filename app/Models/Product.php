<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * @var string[]
     */
    protected $guarded = ['id'];


    public const ALLOWED_LIST = array(
        'title',
        'cover_letter',
        'description',
        'category_id',
        'list_price',
        'discounted_price',
        'stock_quantity',
        'is_active',
        'created_by',
        'created_by_ip',
        'updated_by',
        'updated_by_ip',
        'deleted_at',
        'created_at',
        'updated_at',
    );

    /**
     * @return void
     */
    protected static function boot(): void
    {
        parent::boot();
        static::creating(static function ($query) {
            $query->created_by = Auth::user()->id;
            $query->created_by_ip = Request::ip();
        });
        static::updating(static function ($query) {
            $query->updated_by = Auth::user()->id;
            $query->updated_by_ip = Request::ip();
        });
    }

    /**
     * @param $productId
     * @return Model|Builder|null
     */
    public static function getFirstImage($productId = null): Model|Builder|null
    {
        return ProductImage::query()->where('product_id', $productId)->orderBy('arrangement')->first();
    }

    /**
     * @return HasOne
     */
    public function category(): HasOne
    {
        return $this->hasOne(ProductCategory::class, 'id', 'category_id');
    }

    /**
     * @return HasMany,
     */
    public function images(): HasMany
    {
        return $this->HasMany(ProductImage::class);
    }

    /**
     * @return HasOne
     */
    public function attributes(): HasOne
    {
        return $this->hasOne(ProductAttribute::class, 'product_id', 'id');
    }

}
