<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductAttribute extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    public const ALLOWED_LIST = array(
        'product_id',
        'length',
        'width',
        'height',
        'distance_unit',
        'weight',
        'mass_unit',
        'color',
    );

}
