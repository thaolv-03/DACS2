<div class="modal js-modal">
    <div class="cart-container js-cart-container">
        <div class="cart-header">
            <h1>Cart</h1>
            <div class="cart-close js-cart-close">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>

        <div class="cart-body">
            <div class="cart-product">
                <img class="cart-product__img" src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}" alt="">
                <div class="cart-product__description">
                    <div class="cart-product__description--name">Bàn phím cơ IQUNIX OG80 Camping Wireless Mechanical Keyboard</div>
                    <div class="cart-product__description--selector">
                        <div class="selector__backlit">RGB LED</div>
                        <span>/</span>
                        <div class="selector__switch">TTC Gold Pink</div>
                    </div>
                    <div class="cart-product__description--price">
                        <span>4,350,000 ₫</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="cart-footer">

            <div class="page-cart-btn">
                <button type="submit" name="checkout"><a href="{{route('cart.index');}}">Xem giỏ hàng</a></button>
            </div>

            <div class="cart-checkout-btn">
                <button type="submit" class="cart-checkout-btn--btn" name="checkout"><a href="{{route('checkout.index');}}">Thanh toán</a></button>
            </div>
        </div>
        
    </div>
</div>
