{{-- 商品登録画面 --}}
@extends('layouts.app')

@section('content')
<div class="container">
  <h2>商品登録</h2>

 <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="product_name">商品名</label>
      <input type="text" name="product_name" id="product_name" class="form-control">
    </div>

    <div class="form-group">
      <label for="price">価格</label>
      <input type="text" name="price" id="price" class="form-control">
    </div>

    <div class="form-group">
      <label for="description">商品説明</label>
      <textarea name="description" id="description" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <label for="stock">在庫数</label>
      <input type="text" name="stock" id="stock" class="form-control">
    </div>

    <div class="form-group">
      <label for="img_path">商品画像</label>
      <input type="file" name="img_path" id="img_path" class="form-control">
    </div>

    <button class="btn btn-secondary">戻る</button>
    <button class="btn btn-primary">登録</button>


  </form>


</div>

@endsection
