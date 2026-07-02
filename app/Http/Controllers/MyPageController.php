<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Sale;

class MyPageController extends Controller
{
    public function index()
{
    $products = Product::where('company_id', auth()->user()->company_id)->get();
    // マイページ画面を表示

    // ログインユーザーの会社IDと一致する商品を取得
    $products = Product::where('company_id', auth()->user()->company_id)->get();

    // ログインユーザーが購入した履歴を取得
    $sales = Sale::where('user_id', auth()->id())->get();
    return view('mypage.index', compact('products', 'sales'));
}
}
