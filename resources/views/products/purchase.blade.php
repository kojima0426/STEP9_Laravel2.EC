@extends('layouts.app')

@section('content')
<div class="container">
  @if(session('error'))
  <div class="alert alert-danger">
        {{ session('error') }}
    </div>
  @endif
    <h1 style="font-size: 80px;" class="mb-5" >購入画面</h1>

    <p style="font-size: 20px;">商品名：{{ $product->product_name }}</p>
    <p style="font-size: 20px;">説明：{{ $product->description }}</p>
    <p><img src="{{ asset($product->img_path) }}" width="100"></p>
    <form action="{{ route('products.purchase.store', $product) }}" method="POST">
    @csrf

    <div class="mb-3">
        <input
            type="number"
            name="quantity"
            class="form-control w-25"
            value="1"
            min="1"
        >
    </div>

    <p>金額：{{ $product->price }}</p>
    <p>残り：{{ $product->stock }}</p>
    <p>会社ID：{{ $product->company_id }}</p>

    <button type="submit" class="btn btn-primary">購入する</button>
</form>
  <a href="{{ route('products.show', $product) }}" class="btn btn-secondary">戻る</a>
  <script src="{{ asset('js/like.js') }}"></script>
@endsection
