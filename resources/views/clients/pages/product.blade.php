@extends('layout.master')

@section('title')
    Sản phẩm
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
@endsection

@section('content')
    <div class="grid wide product-container">

        <div class="row product-main">
            <div class="col l-6 product-gallery">

                <div class="slider-for">
                    <div>
                        <img src="{{asset('assets/img/products/80-series/OG80 Camping/img1.webp')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('assets/img/products/80-series/OG80 Camping/img2.webp')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('assets/img/products/80-series/OG80 Camping/img3.webp')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('assets/img/products/80-series/OG80 Camping/img4.webp')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('assets/img/products/80-series/OG80 Camping/img5.webp')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('assets/img/products/80-series/OG80 Camping/img6.webp')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('assets/img/products/80-series/OG80 Camping/img7.webp')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('assets/img/products/80-series/OG80 Camping/img8.webp')}}" alt="">
                    </div>
                </div>

                <div class="slider-nav">
                    <div class="product-img-nav">
                        <img src="{{asset('assets/img/products/80-series/OG80 Camping/img1.webp')}}" alt="">
                    </div>
                    <div class="product-img-nav">
                        <img src="{{asset('assets/img/products/80-series/OG80 Camping/img2.webp')}}" alt="">
                    </div>
                    <div class="product-img-nav">
                        <img src="{{asset('assets/img/products/80-series/OG80 Camping/img3.webp')}}" alt="">
                    </div>
                    <div class="product-img-nav">
                        <img src="{{asset('assets/img/products/80-series/OG80 Camping/img4.webp')}}" alt="">
                    </div>
                    <div class="product-img-nav">
                        <img src="{{asset('assets/img/products/80-series/OG80 Camping/img5.webp')}}" alt="">
                    </div>
                    <div class="product-img-nav">
                        <img src="{{asset('assets/img/products/80-series/OG80 Camping/img6.webp')}}" alt="">
                    </div>
                    <div class="product-img-nav">
                        <img src="{{asset('assets/img/products/80-series/OG80 Camping/img7.webp')}}" alt="">
                    </div>
                    <div class="product-img-nav">
                        <img src="{{asset('assets/img/products/80-series/OG80 Camping/img8.webp')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="col l-6 product-info-container">
                <div class="product-info">

                    <div class="product-info__nav">
                        <a href="{{route('home.index')}}">Trang chủ</a>
                        <span>/</span>
                        <a href="">80 SERIES</a>
                    </div>
                    <div class="product-info__name">Bàn phím cơ IQUNIX OG80 Camping Wireless Mechanical Keyboard</div>
                    <hr class="hr-3">
                    <div class="product-info__price">4,150,000 ₫</div>

                    <form action="" method="post">

                        <div class="product-info__option">
                            <div class="product-info--title">Backlit</div>
                            <fieldset class="product-info--select" name="BACKLIT" data-index="option-2">
                                <!-- <button class="switch-select">Joker</button> -->
                                <div class="product-info--input" data-index="option-2" data-value="Non-backlit">
                                    <input type="radio" checked="checked" value="Non-backlit" name="BACKLIT"
                                        id="product-select-non-backlit" data-index="option-2">
                                    <label for="product-select-non-backlit" class="">Non-backlit</label>
                                </div>
                                <div class="product-info--input" data-index="option-2" data-value="RGB-LED">
                                    <input type="radio" checked="checked" value="RGB-LED" name="BACKLIT"
                                        id="product-select-rgb-led" data-index="option-2">
                                    <label for="product-select-rgb-led" class="">RGB-LED</label>
                                </div>

                            </fieldset>
                        </div>
                        <div class="product-info__option">
                            <div class="product-info--title">Switch</div>
                            <fieldset class="product-info--select" name="SWITCH" data-index="option-3">
                                <!-- <button class="switch-select">Joker</button> -->
                                <div class="product-info--input" data-index="option-3" data-value="TTC Gold Pink">
                                    <input type="radio" checked="checked" value="TTC Gold Pink" name="SWITCH"
                                        id="product-select-gold-pink" data-index="option-3">
                                    <label for="product-select-gold-pink" class="">TTC Gold Pink</label>
                                </div>
                                <div class="product-info--input" data-index="option-3" data-value="TTC Speed Silver">
                                    <input type="radio" checked="checked" value="TTC Speed Silver" name="SWITCH"
                                        id="product-select-speed-silver" data-index="option-3">
                                    <label for="product-select-speed-silver" class="">TTC Speed Silver</label>
                                </div>
                                <div class="product-info--input" data-index="option-3" data-value="Gateron Brown">
                                    <input type="radio" checked="checked" value="Gateron Brown" name="SWITCH"
                                        id="product-select-gateron-brown" data-index="option-3">
                                    <label for="product-select-gateron-brown" class="">Gateron Brown</label>
                                </div>
                                <div class="product-info--input" data-index="option-3" data-value="Gateron Red">
                                    <input type="radio" checked="checked" value="Gateron Red" name="SWITCH"
                                        id="product-select-gateron-red" data-index="option-3">
                                    <label for="product-select-gateron-red" class="">Gateron Red</label>
                                </div>
                                <div class="product-info--input" data-index="option-3" data-value="Cherry Brown">
                                    <input type="radio" checked="checked" value="Cherry Brown" name="SWITCH"
                                        id="product-select-cherry-brown" data-index="option-3">
                                    <label for="product-select-cherry-brown" class="">Cherry Brown</label>
                                </div>
                                <div class="product-info--input" data-index="option-3" data-value="Cherry Red">
                                    <input type="radio" checked="checked" value="Cherry Red" name="SWITCH"
                                        id="product-select-cherry-red" data-index="option-3">
                                    <label for="product-select-cherry-red" class="">Cherry Red</label>
                                </div>
                                <div class="product-info--input" data-index="option-3" data-value="Cherry Blue">
                                    <input type="radio" checked="checked" value="Cherry Blue" name="SWITCH"
                                        id="product-select-cherry-blue" data-index="option-3">
                                    <label for="product-select-cherry-blue" class="">Cherry Blue</label>
                                </div>
                                <div class="product-info--input" data-index="option-3" data-value="Cherry Pink">
                                    <input type="radio" checked="checked" value="Cherry Pink" name="SWITCH"
                                        id="product-select-cherry-pink" data-index="option-3">
                                    <label for="product-select-cherry-pink" class="">Cherry Pink</label>
                                </div>
                            </fieldset>
                        </div>

                        <div class="product-info__btn-cart">
                            <button type="submit" name="add" class="btn-cart">Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-info__btn-buy">
                            <button class="btn-buy">Mua ngay</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>

        <div class="product-footer">
            <div class="product-description">
                <img src="{{asset('assets/img/products/80-series/OG80 Camping/D1.webp')}}" alt="">
            </div>
            <div class="product-related">

            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/js/product.js') }}"></script>
@endsection
