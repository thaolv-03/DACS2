@extends('layout.master')

@section('title')
    Giỏ hàng
@endsection

@section('css')
@endsection

@section('content')
    <!--------------- cart --------------->
    <div class="grid wide cart-page-container">
        <div class="title">Giỏ hàng</div>

        <div class="content">
            <div class="cart-page">
                <table style="width: 100%;" class="table-cart-page">
                    <thead style="height: 40px; border-bottom: 1px solid #000;">
                        <tr>
                            <th style="width: 40%;">Sản phẩm</th>
                            <th style="width: 20%;">Giá</th>
                            <th style="width: 15%;">Số lượng</th>
                            <th style="width: 15%;">Tổng tiền</th>
                            <th style="width: 10%;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="product-cart-page-info">
                                    <div class="product-cart-page-info__img">
                                        <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="product-cart-page-info__detail">
                                        <div class="product-cart-page-info__detail--name">IQUNIX OG80 Camping Wireless
                                            Mechanical
                                            Keyboard</div>
                                        <div class="product-cart-page-info__detail--variant">
                                            <span>Backlit: <strong>RGB-LED</strong></span>
                                            <span>Switch: <strong>Cherry Brown</strong></span>

                                        </div>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="product-cart-page-price">
                                    <strong>4,850,000 ₫</strong>
                                </div>
                            </td>
                            <td>
                                <div class="product-cart-page-amount">
                                    <div class="buttons_added">
                                        <input class="minus is-form" type="button" value="-">
                                        <input aria-label="quantity" class="input-qty" max="10" min="1"
                                            name="" type="number" value="1">
                                        <input class="plus is-form" type="button" value="+">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="product-cart-page-total">
                                    <strong>4,850,000 ₫</strong>
                                </div>
                            </td>
                            <td>
                                <div class="product-cart-page-delete">
                                    <a href=""><i class="fa-regular fa-trash-can"></i></a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="product-cart-page-info">
                                    <div class="product-cart-page-info__img">
                                        <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="product-cart-page-info__detail">
                                        <div class="product-cart-page-info__detail--name">IQUNIX OG80 Camping Wireless
                                            Mechanical
                                            Keyboard</div>
                                        <div class="product-cart-page-info__detail--variant">
                                            <span>Backlit: <strong>RGB-LED</strong></span>
                                            <span>Switch: <strong>Cherry Brown</strong></span>

                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="product-cart-page-price">
                                    <strong>4,850,000 ₫</strong>
                                </div>
                            </td>
                            <td>
                                <div class="product-cart-page-amount">
                                    <div class="buttons_added">
                                        <input class="minus is-form" type="button" value="-">
                                        <input aria-label="quantity" class="input-qty" max="10" min="1"
                                            name="" type="number" value="1">
                                        <input class="plus is-form" type="button" value="+">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="product-cart-page-total">
                                    <strong>4,850,000 ₫</strong>
                                </div>
                            </td>
                            <td>
                                <div class="product-cart-page-delete">
                                    <a href=""><i class="fa-regular fa-trash-can"></i></a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="product-cart-page-info">
                                    <div class="product-cart-page-info__img">
                                        <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="product-cart-page-info__detail">
                                        <div class="product-cart-page-info__detail--name">IQUNIX OG80 Camping Wireless
                                            Mechanical
                                            Keyboard</div>
                                        <div class="product-cart-page-info__detail--variant">
                                            <span>Backlit: <strong>RGB-LED</strong></span>
                                            <span>Switch: <strong>Cherry Brown</strong></span>

                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="product-cart-page-price">
                                    <strong>4,850,000 ₫</strong>
                                </div>
                            </td>
                            <td>
                                <div class="product-cart-page-amount">
                                    <div class="buttons_added">
                                        <input class="minus is-form" type="button" value="-">
                                        <input aria-label="quantity" class="input-qty" max="10" min="1"
                                            name="" type="number" value="1">
                                        <input class="plus is-form" type="button" value="+">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="product-cart-page-total">
                                    <strong>4,850,000 ₫</strong>
                                </div>
                            </td>

                            <td>
                                <div class="product-cart-page-delete">
                                    <a href=""><i class="fa-regular fa-trash-can"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="cart-page-total">
                    <p><strong>Tổng tiền:</strong>14,850,000 ₫</p>
                </div>

                <div class="cart-page-checkout-btn">
                    <button>Thanh toán</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
