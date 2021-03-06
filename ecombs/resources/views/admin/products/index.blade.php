@extends('admin.master')
@section('title', 'Danh sách sản phẩm')
@section('content')
<style>
    .form-delete{
        margin: 0;
    }
</style>
<div class="card-body">
<h4 class="card-title">DANH SÁCH SẢN PHẨM</h4>
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
    <a class="btn btn-primary" style = "margin-bottom:10px;" href="{{ route('admin.products.create') }}">Thêm</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Số thứ tự</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượt xem</th>
                <th>Giảm giá</th>
                <th>Loại sản phẩm</th>
                <th>Nhãn hiệu</th>
                <th>#</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td><a href="{{ route('admin.products.show', $product->id) }}"> {{ $product->name }} </a></td>
                <td>{{number_format($product->price, 2) }}Đ</td>
                <td>{{ $product->view }}</td>
                <td>{{ $product->discount }}</td>
                <td>{{ $product->brand->name }}</td>
                <td>{{ $product->category->name }}</td>
                <td><a class="btn btn-primary" href="{{ route('admin.products.edit', $product->id) }}"> Edit </a></td>
                <td>
                    <form class="form-delete" action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Bạn có muốn xóa sản phẩm này không?')">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <button class="btn btn-primary" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop()
