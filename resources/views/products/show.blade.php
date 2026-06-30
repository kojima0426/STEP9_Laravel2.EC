@extends('layouts.app')

@section('content')
<div class="container">
    <h1>商品詳細</h1>

    <p>商品名：{{ $product->product_name }}</p>
    <p>説明：{{ $product->description }}</p>
    <p>画像：<img src="{{ asset($product->img_path) }}" width="100"></p>
    <p>金額：{{ $product->price }}</p>
    <p>会社ID：{{ $product->company_id }}</p>


    <div class="mb-3">
    <button id="like-btn" class="border-0 bg-transparent"
        data-product-id="{{ $product->id }}"
        @if($product->likedBy(Auth::user())) style="color: red;" @endif>
        <i class="fas fa-heart"></i>
    </button>

    <span id="like-count">{{ $product->likes()->count() }}</span>
</div>
    <button class="btn btn-primary ">カードに追加する</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">戻る</a>
</div>
<script src="{{ asset('js/like.js') }}"></script>
@endsection
