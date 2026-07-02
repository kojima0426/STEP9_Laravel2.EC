<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Sale extends Model
{
    protected $fillable = [
        'product_id',
        'user_id',
        'quantity',
        'total_price',
    ];

    // 購入履歴に紐づく商品を取得
    public function product()
    {
    return $this->belongsTo(Product::class, 'product_id');
    }
}
