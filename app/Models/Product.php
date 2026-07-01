<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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

        public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function likedBy(User $user)
    {
    return $this->likes()
        ->where('user_id', $user->id)
        ->exists();
    }

}
