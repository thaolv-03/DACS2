@extends('layout.master')

@section('title')
    Thanh toán
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/checkout.css') }}">
@endsection

@section('content')
    <div class="grid wide checkout-container">
        <div class="title">
            Thanh toán
        </div>
        <div class="checkout">
            <div class="customer-details">
                <div class="link-to-cart">
                    <a href="">Giỏ hàng</a>
                    <i class="fa-solid fa-angle-right"></i>
                    <span>Thông tin giao hàng</span>
                </div>

                <form action="" method="POST" class="form" id="form-checkout">
                    <p class="heading">Thông tin giao hàng</p>

                    <div class="form-group">
                        <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Họ và tên">
                        <span class="form-message"></span>
                    </div>

                    <div class="email-phone-container">
                        <div class="form-group email">
                            <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                            <span class="form-message"></span>
                        </div>

                        <div class="form-group phone">
                            <input type="text" name="phone" class="form-control" id="phone"
                                placeholder="Số điện thoại">
                            <span class="form-message"></span>
                        </div>
                    </div>

                    <!-- <div class="select-address">
                        <div class="form-group">
                            <select class="form-control form-select form-select-sm mb-3" id="city" name="city"
                                aria-label=".form-select-sm">
                                <option value="" selected>Chọn tỉnh thành</option>
                            </select>
                            <span class="form-message"></span>
                        </div>

                        <div class="form-group">
                            <select class="form-control form-select form-select-sm mb-3" id="district" name="district"
                                aria-label=".form-select-sm">
                                <option value="" selected>Chọn quận huyện</option>
                            </select>
                            <span class="form-message"></span>
                        </div>

                        <div class="form-group">
                            <select class="form-control form-select form-select-sm" id="ward" name="ward"
                                aria-label=".form-select-sm">
                                <option value="" selected>Chọn phường xã</option>
                                <span class="form-message"></span>
                            </select>
                            <span class="form-message"></span>
                        </div>
                    </div> -->

                    <div class="form-group">
                        <input type="text" name="address" class="form-control" id="address" placeholder="Địa chỉ">
                        <span class="form-message"></span>
                    </div>

                    <p class="heading">Phương thức thanh toán</p>

                    <div class="form-group">
                        <div class="checkout-method">
                            <div class="checkout-method">
                                <input type="radio" name="checkout-method" value="cod" class="form-control"
                                    id="checkout-method-cod">
                                <label for="checkout-method-cod">Thanh toán khi giao hàng (COD)</label>
                            </div>
                            <div class="checkout-method">
                                <input type="radio" name="checkout-method" value="qr" class="form-control"
                                    id="checkout-method-qr">
                                <label for="checkout-method-qr">Thanh toán mã QR</label>
                            </div>
                        </div>

                        <span class="form-message"></span>
                    </div>

                    <div class="form-submit">
                        <button class="submit-btn">Hoàn tất đơn hàng</button>
                    </div>
                </form>
            </div>
            <div class="checkout-sidebar">
                <div class="checkout-sidebar__product">
                    <div class="checkout-sidebar__product--product-detail">
                        <div class="product-detail__img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}" alt="">
                        </div>
                        <div>
                            <div class="product-detail__name">Bàn phím cơ IQUNIX OG80 Wormhole Wireless Mechanical Keyboard
                            </div>
                            <div class="product-detail__sector">
                                <div class="product-detail__sector--backlit">RGB LED</div>
                                <span style="margin: 0 5px;">/</span>
                                <div class="product-detail__sector--switch">TTC Gold Pink</div>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-sidebar__product--price">
                        <span>4,850,000₫</span>
                    </div>
                </div>
                <div class="checkout-sidebar__product">
                    <div class="checkout-sidebar__product--product-detail">
                        <div class="product-detail__img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}" alt="">
                        </div>
                        <div>
                            <div class="product-detail__name">Bàn phím cơ IQUNIX OG80 Wormhole Wireless Mechanical Keyboard
                            </div>
                            <div class="product-detail__sector">
                                <div class="product-detail__sector--backlit">RGB LED</div>
                                <span style="margin: 0 5px;">/</span>
                                <div class="product-detail__sector--switch">TTC Gold Pink</div>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-sidebar__product--price">
                        <span>4,850,000₫</span>
                    </div>
                </div>
                <div class="checkout-sidebar__payment">
                    <div class="checkout-sidebar__payment--subtotal-shipping">
                        <div class="subtotal">
                            <span>Tạm tính</span>
                            <span>9,700,000₫</span>
                        </div>
                        <div class="shipping">
                            <span>Phí vận chuyển</span>
                            <span>0₫</span>
                        </div>
                    </div>
                    <div class="checkout-sidebar__payment--total">
                        <span>Tổng cộng</span>
                        <span>9,700,000₫</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('js')
    
@endsection

@push('js')
    <script src="{{ asset('assets/js/checkout.js') }}"></script>
    <script>
        Validator({
            form: '#form-checkout',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#fullname'),
                Validator.isRequired('#email'),
                Validator.isEmail('#email'),
                Validator.isRequired('#phone'),
                Validator.isPhone('#phone'),
                Validator.isRequired('#address'),
                Validator.isRequired('input[name="checkout-method"]', 'Vui lòng chọn trường này'),
                // Validator.isRequired('#city', 'Vui lòng chọn trường này'),
                // Validator.isRequired('#district', 'Vui lòng chọn trường này'),
                // Validator.isRequired('#ward', 'Vui lòng chọn trường này'),
            ],
            onSubmit: function(data) {
                // Call API
                console.log(data);
            }
        });
    </script>
@endpush
