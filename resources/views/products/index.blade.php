@extends('layouts.app')

@section('content')

<h1 class="h3 mb-4">商品一覧</h1>

<table class="table table-bordered table-hover align-middle">
    <tr>
        <th>商品番号</th>
        <th>商品名</th>
        <th>商品説明</th>
        <th>画像</th>
        <th>料金(¥)</th>
        <th>詳細</th>
    </tr>

    @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->description }}</td>
            <td> <img src="{{ asset($product->img_path) }}" width="80"></td>
            <td>{{ $product->price }}</td>
            <td><button class="btn btn-success btn-sm">詳細</button></td>
        </tr>
    @endforeach
</table>

@endsection
