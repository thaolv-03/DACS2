@extends('layout.master')

@section('title')
    Shop
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/shop.css') }}">
@endsection

@section('content')
    <div class="shop-container">
        <div class="grid wide shop">

            <!-- shop title  -->
            <div class="shop-header">
                <div class="shop__home">
                    <a href="{{route('home.index')}}">Trang chủ</a>
                    <span>/</span>
                    <span class="shop__home--current-page">Shop</span>
                </div>

                <div class="shop__sort">
                    <div class="shop__sort--quantity">Hiển thị 1 - 12 của 30 kết quả</div>
                    <select class="shop__sort--select" name="sort" id="sort">
                        <option value="1">Thứ tự mặc định</option>
                        <option value="2">Thứ tự theo mức độ phổ biến</option>
                        <option value="3">Thứ tự theo điểm đánh giá</option>
                        <option value="4">Mới nhất</option>
                        <option value="5">Thứ tự theo giá: thấp đến cao</option>
                        <option value="6">Thứ tự theo giá: cao đến thấp</option>
                    </select>
                </div>
            </div>


            <div class="row shop-main">
                @include('clients.components.sidebar')

                <div class="col l-9 shop__product">
                    <div class="row shop__product--container">

                        <div class="col l-4 product-item-container">
                            <a href="{{ route('p1') }}">
                                <div class="product-item">
                                    <div class="product-item__img">
                                        <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}"
                                            alt="" class="product-item__img--img">
                                        <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img2.webp') }}"
                                            alt="" class="product-item__img--img img-2">
                                    </div>
                                    <div class="product-item__description">
                                        <div class="product-item__description--category">80 Series</div>
                                        <div class="product-item__description--name">Bàn phím cơ IQUNIX OG80 Camping
                                            Wireless
                                            Mechanical Keyboard</div>
                                        <div class="product-item__description--price">4,850,000 ₫</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col l-4 product-item-container">
                            <a href="{{ route('p1') }}">
                                <div class="product-item">
                                    <div class="product-item__img">
                                        <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}"
                                            alt="" class="product-item__img--img">
                                        <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img2.webp') }}"
                                            alt="" class="product-item__img--img img-2">
                                    </div>
                                    <div class="product-item__description">
                                        <div class="product-item__description--category">80 Series</div>
                                        <div class="product-item__description--name">Bàn phím cơ IQUNIX OG80 Camping
                                            Wireless
                                            Mechanical Keyboard</div>
                                        <div class="product-item__description--price">4,850,000 ₫</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col l-4 product-item-container">
                            <a href="{{ route('p1') }}">
                                <div class="product-item">
                                    <div class="product-item__img">
                                        <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}"
                                            alt="" class="product-item__img--img">
                                        <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img2.webp') }}"
                                            alt="" class="product-item__img--img img-2">
                                    </div>
                                    <div class="product-item__description">
                                        <div class="product-item__description--category">80 Series</div>
                                        <div class="product-item__description--name">Bàn phím cơ IQUNIX OG80 Camping
                                            Wireless
                                            Mechanical Keyboard</div>
                                        <div class="product-item__description--price">4,850,000 ₫</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col l-4 product-item-container">
                            <a href="{{ route('p1') }}">
                                <div class="product-item">
                                    <div class="product-item__img">
                                        <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}"
                                            alt="" class="product-item__img--img">
                                        <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img2.webp') }}"
                                            alt="" class="product-item__img--img img-2">
                                    </div>
                                    <div class="product-item__description">
                                        <div class="product-item__description--category">80 Series</div>
                                        <div class="product-item__description--name">Bàn phím cơ IQUNIX OG80 Camping
                                            Wireless
                                            Mechanical Keyboard</div>
                                        <div class="product-item__description--price">4,850,000 ₫</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col l-4 product-item-container">
                            <a href="{{ route('p1') }}">
                                <div class="product-item">
                                    <div class="product-item__img">
                                        <img src="{{ asset('') }}assets/img/products/80-series/OG80 Camping/img1.webp"
                                            alt="" class="product-item__img--img">
                                        <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img2.webp') }}"
                                            alt="" class="product-item__img--img img-2">
                                    </div>
                                    <div class="product-item__description">
                                        <div class="product-item__description--category">80 Series</div>
                                        <div class="product-item__description--name">Bàn phím cơ IQUNIX OG80 Camping
                                            Wireless
                                            Mechanical Keyboard</div>
                                        <div class="product-item__description--price">4,850,000 ₫</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col l-4 product-item-container">
                            <a href="{{ route('p1') }}">
                                <div class="product-item">
                                    <div class="product-item__img">
                                        <img src="{{ asset('') }}assets/img/products/80-series/OG80 Camping/img1.webp"
                                            alt="" class="product-item__img--img">
                                        <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img2.webp') }}"
                                            alt="" class="product-item__img--img img-2">
                                    </div>
                                    <div class="product-item__description">
                                        <div class="product-item__description--category">80 Series</div>
                                        <div class="product-item__description--name">Bàn phím cơ IQUNIX OG80 Camping
                                            Wireless
                                            Mechanical Keyboard</div>
                                        <div class="product-item__description--price">4,850,000 ₫</div>
                                    </div>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
