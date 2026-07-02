@extends('layouts.app')

@section('content')
<div class="container">
    <h2 >マイページ</h2>
    <button class="btn btn-primary btn-sm">アカウント編集</button>

    <div class="row">
        <div class="col">
            <p>ユーザー名：{{ Auth::user()->name }}</p>
        </div>

        <div class="col">
            <p>名前：{{ Auth::user()->name_kanji }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <p>メール：{{ Auth::user()->email }}</p>
        </div>

        <div class="col">
            <p>カナ：{{ Auth::user()->name_kana }}</p>
        </div>
    </div>

   <div class="row align-items-center mb-3">
        <div class="col fw-bold">
        <h2>＜出品商品＞</h2>
        </div>
        <div class="col text-end">
        <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">
            新規登録
        </a>
        </div>
    </div>

    <table class="table table-bordered table-hover align-middle">
    <tr>
        <th>商品番号</th>
        <th>商品名</th>
        <th>商品説明</th>
        <th>画像</th>
        <th>料金(¥)</th>
        <th></th>
    </tr>

    @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->description }}</td>
            <td> <img src="{{ asset($product->img_path) }}" width="80"></td>
            <td>{{ $product->price }}</td>
            <td> <a href="{{ route('products.show', $product->id) }}" class="btn btn-success btn-sm">詳細</a></td>
        </tr>
    @endforeach
    </table>

    <h2 class="fw-bold"><購入した商品></h2>
    <table class="table table-hover align-middle">
    <tr>
        <th>商品名</th>
        <th>商品説明</th>
        <th>料金(¥)</th>
        <th>個数</th>
    </tr>

    @foreach ($sales as $sale)
        <tr>
            <td>{{ $sale->product->product_name }}</td>
            <td>{{ $sale->product->description }}</td>
            <td>{{ $sale->product->price }}</td>
            <td>{{ $sale->quantity }}</td>

        </tr>
    @endforeach
    </table>



@endsection
