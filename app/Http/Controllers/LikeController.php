<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class LikeController extends Controller
{


public function store(Product $product)
{
    Like::create([
        'product_id' => $product->id,
        'user_id' => Auth::id(),
    ]);

    return response()->json([
        'likes_count' => $product->likes()->count(),
    ]);
}

// いいねを削除する処理
    public function unlikeProduct(Request $request, Product $product)
    {
    $user = Auth::user(); // 現在ログインしているユーザーを取得

    // ユーザーがこの商品に「いいね」しているか確認
    if ($product->likedBy($user)) {
        // 「いいね」していれば、likesテーブルからそのレコードを削除
        Like::where('product_id', $product->id)
            ->where('user_id', $user->id)
            ->delete();
    }

    // その商品に対する現在の「いいね」数を返す
    return response()->json([
        'likes_count' => $product->likes()->count(),
    ]);
    }
}
