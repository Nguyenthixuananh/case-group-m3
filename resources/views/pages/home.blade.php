@extends('welcome')
@section('content')

<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Sản phẩm mới</h2>
    @foreach($all_product as $key => $product)
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="{{ asset('upload/product/'. $product->product_image) }}" alt="" />
                    <h3>{{$product->product_price}} VNĐ</h3>
                    <p>{{$product->product_name}}</p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
                </div>
                {{-- <div class="product-overlay">
                    <div class="overlay-content">
                        <h3>{{$product->product_price}} VNĐ</h3>
                        <p>{{$product->product_name}}</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
                    </div>
                </div> --}}
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach



</div>


@endsection
