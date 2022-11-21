@extends('layout.master')

@section('title')
    Trang chủ
@endsection

@section('css')

@endsection

@section('content')
    <div class="slider-container">
        <div class="slider">
            <div class="slide-item">
                <a href="#"><img src="{{ asset('assets/img/slide/slide1.webp') }}" alt=""></a>
            </div>
            <div class="slide-item">
                <a href="#"><img src="{{ asset('assets/img/slide/slide2.webp') }}" alt=""></a>
            </div>
            <div class="slide-item">
                <a href="#"><img src="{{ asset('assets/img/slide/slide3.webp') }}" alt=""></a>
            </div>
            <div class="slide-item">
                <a href="#"><img src="{{ asset('assets/img/slide/slide4.webp') }}" alt=""></a>
            </div>
            <div class="slide-item">
                <a href="#"><img src="{{ asset('assets/img/slide/slide5.webp') }}" alt=""></a>
            </div>
            <div class="slide-item">
                <a href="#"><img src="{{ asset('assets/img/slide/slide6.webp') }}" alt=""></a>
            </div>
            <div class="slide-item">
                <a href="#"><img src="{{ asset('assets/img/slide/slide7.webp') }}" alt=""></a>
            </div>
            <div class="slide-item">
                <a href="#"><img src="{{ asset('assets/img/slide/slide8.webp') }}" alt=""></a>
            </div>
        </div>
        <div class="slogan">
            For mechanical keyboards lovers,<br>
            By mechanical keyboards lovers.
        </div>
    </div>

    <!--------------- SECTION --------------->
    <div class="grid wide section-title-container">
        <h3 class="section-title section-title-center">
            <b></b>
            <span class="section-title-main">DANH MỤC SẢN PHẨM</span>
            <b></b>
        </h3>
    </div>

    <!--------------- PRODUCT CATEGORY --------------->
    <div class="grid wide product-category-container">
        <div class="product-category">
            <div class="product-category__product">
                <a href="#">
                    <img src="{{ asset('assets/img/categories/F97.jpg') }}" alt="" class="product-category__img">
                    <span class="product-category__name">F97 Series</span>
                    <span class="product-category__amount">6 sản phẩm</span>
                </a>
            </div>

            <div class="product-category__product">
                <a href="#">
                    <img src="{{ asset('assets/img/categories/F96.jpg') }}" alt="" class="product-category__img">
                    <span class="product-category__name">F96 Series</span>
                    <span class="product-category__amount">6 sản phẩm</span>
                </a>
            </div>

            <div class="product-category__product">
                <a href="#">
                    <img src="{{ asset('assets/img/categories/80.jpg') }}" alt="" class="product-category__img">
                    <span class="product-category__name">80 Series</span>
                    <span class="product-category__amount">6 sản phẩm</span>
                </a>
            </div>

            <div class="product-category__product">
                <a href="#">
                    <img src="{{ asset('assets/img/categories/ZX75.jpg') }}" alt="" class="product-category__img">
                    <span class="product-category__name">ZX75 Series</span>
                    <span class="product-category__amount">1 sản phẩm</span>
                </a>
            </div>

            <div class="product-category__product">
                <a href="#">
                    <img src="{{ asset('assets/img/categories/ITXCASE.jpg') }}" alt=""
                        class="product-category__img">
                    <span class="product-category__name">ITXCASE</span>
                    <span class="product-category__amount">2 sản phẩm</span>
                </a>
            </div>

        </div>
    </div>

    <!--------------- BANNER --------------->
    <div class="grid wide banner-container">
        <img src="{{ asset('assets/img/banner/banner1.jpg') }}" alt="" class="banner-img">
    </div>

    <!--------------- SECTION --------------->
    <div class="grid wide section-title-container">
        <h3 class="section-title section-title-center">
            <b></b>
            <span class="section-title-main">SẢN PHẨM NỔI BẬT</span>
            <b></b>
        </h3>
    </div>

    <!--------------- HIGHLIGHT PRODUCT --------------->
    <div class="grid wide product-container">
        <div class="product-container-slider">
            <div class="product-container-item">
                <a href="">
                    <div class="product-item">
                        <div class="product-item__img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}" alt=""
                                class="product-img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img2.webp') }}" alt=""
                                class="product-img img-2">
                        </div>
                        <div class="product-item--description">
                            <div class="product-item__category">ZX75 Series</div>
                            <div class="product-item__name">Bàn phím cơ IQUNIX ZX-75 Gravity Wave Wireless
                                Mechanical Keyboard</div>
                            <div class="product-item__price">4,850,000 ₫</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="product-container-item">
                <a href="">
                    <div class="product-item">
                        <div class="product-item__img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}" alt=""
                                class="product-img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img2.webp') }}" alt=""
                                class="product-img img-2">
                        </div>
                        <div class="product-item--description">
                            <div class="product-item__category">ZX75 Series</div>
                            <div class="product-item__name">Bàn phím cơ IQUNIX ZX-75 Camping Wireless
                                Mechanical Keyboard</div>
                            <div class="product-item__price">5,100,000 ₫</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="product-container-item">
                <a href="#">
                    <div class="product-item">
                        <div class="product-item__img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}" alt=""
                                class="product-img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img2.webp') }}" alt=""
                                class="product-img img-2">
                        </div>
                        <div class="product-item--description">
                            <div class="product-item__category">80 Series</div>
                            <div class="product-item__name">Bàn phím cơ IQUNIX OG80 Wormhole Wireless Mechanical Keyboard
                            </div>
                            <div class="product-item__price">4,350,000 ₫</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="product-container-item">
                <a href="#">
                    <div class="product-item">
                        <div class="product-item__img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}" alt=""
                                class="product-img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img2.webp') }}" alt=""
                                class="product-img img-2">
                        </div>
                        <div class="product-item--description">
                            <div class="product-item__category">80 Series</div>
                            <div class="product-item__name">Bàn phím cơ IQUNIX OG80 Joy Vendor Wireless Mechanical Keyboard
                            </div>
                            <div class="product-item__price">4,650,000 ₫</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="product-container-item">
                <a href="#">
                    <div class="product-item">
                        <div class="product-item__img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}" alt=""
                                class="product-img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img2.webp') }}" alt=""
                                class="product-img img-2">
                            <div class="sold-out">Hết hàng</div>
                        </div>
                        <div class="product-item--description">
                            <div class="product-item__category">ITXCASE</div>
                            <div class="product-item__name">Thùng máy IQUNIX CL-1 ITX Case</div>
                            <div class="product-item__price"></div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="product-container-item">
                <a href="#">
                    <div class="product-item">
                        <div class="product-item__img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}" alt=""
                                class="product-img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img2.webp') }}" alt=""
                                class="product-img img-2">
                        </div>
                        <div class="product-item--description">
                            <div class="product-item__category">F96 Series</div>
                            <div class="product-item__name">Bàn phím cơ IQUNIX F96 Joker Wireless RGB Cherry</div>
                            <div class="product-item__price">5,400,000 ₫</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>



    </div>

    <!--------------- BANNER --------------->
    <div class="grid wide banner-container">
        <img src="{{ asset('assets/img/banner/banner2.jpg') }}" alt="" class="banner-img">
    </div>

    <!--------------- SECTION --------------->
    <div class="grid wide section-title-container">
        <h3 class="section-title section-title-center">
            <b></b>
            <span class="section-title-main">SẢN PHẨM MỚI</span>
            <b></b>
        </h3>
    </div>

    <!--------------- NEW PRODUCT --------------->
    <div class="grid wide product-container">
        <div class="product-container-slider">
            <div class="product-container-item">
                <a href="">
                    <div class="product-item">
                        <div class="product-item__img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}" alt=""
                                class="product-img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img2.webp') }}" alt=""
                                class="product-img img-2">
                        </div>
                        <div class="product-item--description">
                            <div class="product-item__category">ZX75 Series</div>
                            <div class="product-item__name">Bàn phím cơ IQUNIX ZX-75 Gravity Wave Wireless
                                Mechanical Keyboard</div>
                            <div class="product-item__price">4,850,000 ₫</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="product-container-item">
                <a href="">
                    <div class="product-item">
                        <div class="product-item__img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}" alt=""
                                class="product-img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img2.webp') }}" alt=""
                                class="product-img img-2">
                        </div>
                        <div class="product-item--description">
                            <div class="product-item__category">ZX75 Series</div>
                            <div class="product-item__name">Bàn phím cơ IQUNIX ZX-75 Camping Wireless
                                Mechanical Keyboard</div>
                            <div class="product-item__price">5,100,000 ₫</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="product-container-item">
                <a href="#">
                    <div class="product-item">
                        <div class="product-item__img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}" alt=""
                                class="product-img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img2.webp') }}" alt=""
                                class="product-img img-2">
                        </div>
                        <div class="product-item--description">
                            <div class="product-item__category">80 Series</div>
                            <div class="product-item__name">Bàn phím cơ IQUNIX OG80 Wormhole Wireless Mechanical Keyboard
                            </div>
                            <div class="product-item__price">4,350,000 ₫</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="product-container-item">
                <a href="#">
                    <div class="product-item">
                        <div class="product-item__img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}" alt=""
                                class="product-img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img2.webp') }}" alt=""
                                class="product-img img-2">
                        </div>
                        <div class="product-item--description">
                            <div class="product-item__category">80 Series</div>
                            <div class="product-item__name">Bàn phím cơ IQUNIX OG80 Joy Vendor Wireless Mechanical Keyboard
                            </div>
                            <div class="product-item__price">4,650,000 ₫</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="product-container-item">
                <a href="#">
                    <div class="product-item">
                        <div class="product-item__img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}" alt=""
                                class="product-img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img2.webp') }}" alt=""
                                class="product-img img-2">
                            <div class="sold-out">Hết hàng</div>
                        </div>
                        <div class="product-item--description">
                            <div class="product-item__category">ITXCASE</div>
                            <div class="product-item__name">Thùng máy IQUNIX CL-1 ITX Case</div>
                            <div class="product-item__price"></div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="product-container-item">
                <a href="#">
                    <div class="product-item">
                        <div class="product-item__img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img1.webp') }}" alt=""
                                class="product-img">
                            <img src="{{ asset('assets/img/products/80-series/OG80 Camping/img2.webp') }}" alt=""
                                class="product-img img-2">
                        </div>
                        <div class="product-item--description">
                            <div class="product-item__category">F96 Series</div>
                            <div class="product-item__name">Bàn phím cơ IQUNIX F96 Joker Wireless RGB Cherry</div>
                            <div class="product-item__price">5,400,000 ₫</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!--------------- BANNER --------------->
    <div class="grid wide banner-container">
        <img src="{{ asset('assets/img/banner/banner3.jpg') }}" alt="" class="banner-img">
    </div>

    <!--------------- SECTION --------------->
    <div class="grid wide section-title-container">
        <h3 class="section-title section-title-center">
            <b></b>
            <span class="section-title-main">CẢM NHẬN KHÁCH HÀNG</span>
            <b></b>
        </h3>
    </div>

    <!--------------- CUSTOMER FEELING --------------->
    <div class="grid wide customer-feeling-container">
        <div class="customer-feeling__container customer-feeling-slider">
            <div class="customer-feeling customer-feeling-item">
                <div class="customer-feeling__content">Tôi đã dành rất nhiều thời gian để tìm kiếm vỏ máy hoàn hảo
                    cho bản dựng của
                    mình – và chỉ gần đây tôi mới biết đến
                    ZX-1. Vỏ này có kích thước hoàn hảo cho những gì tôi muốn và có thể chứa tất cả những gì tôi
                    đang tìm kiếm, và
                    tôi đã
                    chọn phiên bản làm mát bằng nước với màu đen mờ, mặc dù phiên bản màu xanh lam và xanh lục cũng
                    hấp dẫn tôi mạnh
                    mẽ.</div>
                <div class="customer-feeling__customer"><span>IRON MAN</span> / GAMER</div>
            </div>
            <div class="customer-feeling customer-feeling-item">
                <div class="customer-feeling__content">Vâng, tôi RẤT lo lắng về việc chi hơn 5 triệu cho một bàn
                    phím. “Mình không
                    thích thì sao, họ không nhận trả lại thì
                    mình sẽ vướng mắc một thứ không thể chịu được.” Nhưng rồi vẻ đẹp màu tím của tôi đã đến. Các
                    công tắc Cherry
                    Pink là một
                    giấc mơ êm ái, và TRÁI của vỏ nhôm là thần thánh. Tôi sẽ mất một chút thời gian để làm quen với
                    khoảng cách 96%,
                    nhưng
                    đó là một điểm giảm đáng kể cho việc bàn phím này đáng yêu như thế nào. Tôi rất vui vì tôi đã
                    tìm thấy 96% phù
                    hợp với
                    thẩm mỹ của tôi rất đẹp.</div>
                <div class="customer-feeling__customer"><span>THIÊN TINH</span> / STREAMER</div>
            </div>
            <div class="customer-feeling customer-feeling-item">
                <div class="customer-feeling__content">Chúng tôi trả những khoản phí này để bạn không phải trả! Tổng
                    thanh toán khi
                    thanh toán là số tiền cuối cùng bạn thanh
                    toán, đã bao gồm VAT, không tính thêm phí tại thời điểm giao hàng!</div>
                <div class="customer-feeling__customer"><span>MON MON</span></div>
            </div>
            <div class="customer-feeling customer-feeling-item">
                <div class="customer-feeling__content">Tôi đã dành rất nhiều thời gian để tìm kiếm vỏ máy hoàn hảo
                    cho bản dựng của
                    mình – và chỉ gần đây tôi mới biết đến
                    ZX-1. Vỏ này có kích thước hoàn hảo cho những gì tôi muốn và có thể chứa tất cả những gì tôi
                    đang tìm kiếm, và
                    tôi đã
                    chọn phiên bản làm mát bằng nước với màu đen mờ, mặc dù phiên bản màu xanh lam và xanh lục cũng
                    hấp dẫn tôi mạnh
                    mẽ.</div>
                <div class="customer-feeling__customer"><span>IRON MAN</span> / GAMER</div>
            </div>
            <div class="customer-feeling customer-feeling-item">
                <div class="customer-feeling__content">Vâng, tôi RẤT lo lắng về việc chi hơn 5 triệu cho một bàn
                    phím. “Mình không
                    thích thì sao, họ không nhận trả lại thì
                    mình sẽ vướng mắc một thứ không thể chịu được.” Nhưng rồi vẻ đẹp màu tím của tôi đã đến. Các
                    công tắc Cherry
                    Pink là một
                    giấc mơ êm ái, và TRÁI của vỏ nhôm là thần thánh. Tôi sẽ mất một chút thời gian để làm quen với
                    khoảng cách 96%,
                    nhưng
                    đó là một điểm giảm đáng kể cho việc bàn phím này đáng yêu như thế nào. Tôi rất vui vì tôi đã
                    tìm thấy 96% phù
                    hợp với
                    thẩm mỹ của tôi rất đẹp.</div>
                <div class="customer-feeling__customer"><span>THIÊN TINH</span> / STREAMER</div>
            </div>
            <div class="customer-feeling customer-feeling-item">
                <div class="customer-feeling__content">Chúng tôi trả những khoản phí này để bạn không phải trả! Tổng
                    thanh toán khi
                    thanh toán là số tiền cuối cùng bạn thanh
                    toán, đã bao gồm VAT, không tính thêm phí tại thời điểm giao hàng!</div>
                <div class="customer-feeling__customer"><span>MON MON</span></div>
            </div>
            <div class="customer-feeling customer-feeling-item">
                <div class="customer-feeling__content">Tôi đã dành rất nhiều thời gian để tìm kiếm vỏ máy hoàn hảo
                    cho bản dựng của
                    mình – và chỉ gần đây tôi mới biết đến
                    ZX-1. Vỏ này có kích thước hoàn hảo cho những gì tôi muốn và có thể chứa tất cả những gì tôi
                    đang tìm kiếm, và
                    tôi đã
                    chọn phiên bản làm mát bằng nước với màu đen mờ, mặc dù phiên bản màu xanh lam và xanh lục cũng
                    hấp dẫn tôi mạnh
                    mẽ.</div>
                <div class="customer-feeling__customer"><span>IRON MAN</span> / GAMER</div>
            </div>
            <div class="customer-feeling customer-feeling-item">
                <div class="customer-feeling__content">Vâng, tôi RẤT lo lắng về việc chi hơn 5 triệu cho một bàn
                    phím. “Mình không
                    thích thì sao, họ không nhận trả lại thì
                    mình sẽ vướng mắc một thứ không thể chịu được.” Nhưng rồi vẻ đẹp màu tím của tôi đã đến. Các
                    công tắc Cherry
                    Pink là một
                    giấc mơ êm ái, và TRÁI của vỏ nhôm là thần thánh. Tôi sẽ mất một chút thời gian để làm quen với
                    khoảng cách 96%,
                    nhưng
                    đó là một điểm giảm đáng kể cho việc bàn phím này đáng yêu như thế nào. Tôi rất vui vì tôi đã
                    tìm thấy 96% phù
                    hợp với
                    thẩm mỹ của tôi rất đẹp.</div>
                <div class="customer-feeling__customer"><span>THIÊN TINH</span> / STREAMER</div>
            </div>
            <div class="customer-feeling customer-feeling-item">
                <div class="customer-feeling__content">Chúng tôi trả những khoản phí này để bạn không phải trả! Tổng
                    thanh toán khi
                    thanh toán là số tiền cuối cùng bạn thanh
                    toán, đã bao gồm VAT, không tính thêm phí tại thời điểm giao hàng!</div>
                <div class="customer-feeling__customer"><span>MON MON</span></div>
            </div>
        </div>

    </div>

    <!--------------- BANNER --------------->
    <div class="grid wide banner-container">
        <img src="{{ asset('assets/img/banner/banner4.jpg') }}" alt="" class="banner-img">
    </div>

    <!--------------- SECTION --------------->
    <div class="grid wide section-title-container">
        <h3 class="section-title section-title-center">
            <b></b>
            <span class="section-title-main">THEO DÕI CHÚNG TÔI TRÊN INSTAGRAM</span>
            <b></b>
        </h3>
    </div>

    <!--------------- INSTAGRAM POST --------------->
    <div class="insta-post-slider-container">
        <div class="insta-post-slider">
            <div class="insta-post-item">
                <a href="#"><img src="{{asset('assets/img/insta_post/insta1.webp')}}" alt=""></a>
            </div>
            <div class="insta-post-item">
                <a href="#"><img src="{{asset('assets/img/insta_post/insta2.webp')}}" alt=""></a>
            </div>
            <div class="insta-post-item">
                <a href="#"><img src="{{asset('assets/img/insta_post/insta3.webp')}}" alt=""></a>
            </div>
            <div class="insta-post-item">
                <a href="#"><img src="{{asset('assets/img/insta_post/insta4.webp')}}" alt=""></a>
            </div>
            <div class="insta-post-item">
                <a href="#"><img src="{{asset('assets/img/insta_post/insta5.webp')}}" alt=""></a>
            </div>
            <div class="insta-post-item">
                <a href="#"><img src="{{asset('assets/img/insta_post/insta6.webp')}}" alt=""></a>
            </div>
            <div class="insta-post-item">
                <a href="#"><img src="{{asset('assets/img/insta_post/insta7.webp')}}" alt=""></a>
            </div>
            <div class="insta-post-item">
                <a href="#"><img src="{{asset('assets/img/insta_post/insta8.webp')}}" alt=""></a>
            </div>
            <div class="insta-post-item">
                <a href="#"><img src="{{asset('assets/img/insta_post/insta9.webp')}}" alt=""></a>
            </div>
            <div class="insta-post-item">
                <a href="#"><img src="{{asset('assets/img/insta_post/insta10.webp')}}" alt=""></a>
            </div>
            <div class="insta-post-item">
                <a href="#"><img src="{{asset('assets/img/insta_post/insta11.webp')}}" alt=""></a>
            </div>
            <div class="insta-post-item">
                <a href="#"><img src="{{asset('assets/img/insta_post/insta12.webp')}}" alt=""></a>
            </div>
            <div class="insta-post-item">
                <a href="#"><img src="{{asset('assets/img/insta_post/insta13.webp')}}" alt=""></a>
            </div>
            <div class="insta-post-item">
                <a href="#"><img src="{{asset('assets/img/insta_post/insta14.webp')}}" alt=""></a>
            </div>
            <div class="insta-post-item">
                <a href="#"><img src="{{asset('assets/img/insta_post/insta15.webp')}}" alt=""></a>
            </div>
            <div class="insta-post-item">
                <a href="#"><img src="{{asset('assets/img/insta_post/insta16.webp')}}" alt=""></a>
            </div>
            <div class="insta-post-item">
                <a href="#"><img src="{{asset('assets/img/insta_post/insta17.webp')}}" alt=""></a>
            </div>
            <div class="insta-post-item">
                <a href="#"><img src="{{asset('assets/img/insta_post/insta18.webp')}}" alt=""></a>
            </div>
            <div class="insta-post-item">
                <a href="#"><img src="{{asset('assets/img/insta_post/insta19.webp')}}" alt=""></a>
            </div>
            <div class="insta-post-item">
                <a href="#"><img src="{{asset('assets/img/insta_post/insta20.webp')}}" alt=""></a>
            </div>
        </div>

    </div>
@endsection

@section('js')

@endsection
