<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'user_id',
        'company_id',
        'product_name',
        'price',
        'stock',
        'description',
        'img_path'
        ];
}
