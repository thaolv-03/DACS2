@extends('layout.master')

@section('title')
    Đánh giá
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/reviews.css') }}">
@endsection

@section('content')
    <div class="review">

        <div class="grid wide review-container">

            <!--------------- Header --------------->
            <div class="review-container--header">
                <h1>Reviews</h1>
            </div>

            <!--------------- SECTION --------------->
            <div class="section-title-container">
                <h2 class="section-title section-title-center">
                    <b></b>
                    <span class="section-title-main">Youtube Videos</span>
                    <b></b>
                </h2>
                <a href="https://www.youtube.com/channel/UCDBHlf2_nShP7ebtFoRFzqA" target="_blank">Đăng kí kênh
                    Youtube IQUNIX để xem nhiều video hơn</a>
            </div>
        </div>

        <!--------------- VIDEO --------------->
        <div class="grid wide review-container-video">
            <!--------------- Highlight Video --------------->
            <div class="row review-container__highlight-video">
                <div class="col l-6 review-container__highlight-video--video">
                    <iframe width="93%" height="315" src="https://www.youtube.com/embed/-NzzvWOkAzw"
                        title="YouTube video player" frameborder="0" loading="lazy"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="col l-6 review-container__highlight-video--video">
                    <iframe width="93%" height="315" src="https://www.youtube.com/embed/d-FnkTzZ4dY"
                        title="YouTube video player" frameborder="0" loading="lazy"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="grid wide1 review-container-video">
            <!--------------- Highlight Video --------------->
            <div class="row review-container__highlight-video">
                <div class="col l-4 review-container__highlight-video--video">
                    <iframe width="93%" height="315" src="https://www.youtube.com/embed/xUmI_d0IvCI"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="col l-4 review-container__highlight-video--video">
                    <iframe width="93%" height="315" src="https://www.youtube.com/embed/iGIr8OSmJIU"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="col l-4 review-container__highlight-video--video">
                    <iframe width="93%" height="315" src="https://www.youtube.com/embed/H2cSPqk1h3U"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>

            <!-- <div class="row review-container__highlight-video">
                            <div class="col l-4 review-container__highlight-video--video">
                                <iframe width="93%" height="315" src="https://www.youtube.com/embed/xUmI_d0IvCI" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="col l-4 review-container__highlight-video--video">
                                <iframe width="93%" height="315" src="https://www.youtube.com/embed/iGIr8OSmJIU" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="col l-4 review-container__highlight-video--video">
                                <iframe width="93%" height="315" src="https://www.youtube.com/embed/H2cSPqk1h3U" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div> -->

        </div>

        <div class="grid wide review-container">
            <!--------------- SECTION --------------->
            <div class="section-title-container">
                <h2 class="section-title section-title-center">
                    <b></b>
                    <span class="section-title-main">Instagram Posts</span>
                    <b></b>
                </h2>
                <a href="https://www.instagram.com/iqunix/" target="_blank">Theo dõi
                    Instagram @IQUNIX để chia sẻ nhiều hình ảnh hơn</a>
            </div>
        </div>

        {{-- Instagram --}}
        <div class="grid wide1 review-container-instagram-review">
            <div class="instagram-review-slider">
                <div class="instagram-review-item">
                    <a href="#"><img src="{{ asset('assets/img/insta_review/insta1.webp') }}" alt=""></a>
                </div>
                <div class="instagram-review-item">
                    <a href="#"><img src="{{ asset('assets/img/insta_review/insta2.webp') }}" alt=""></a>
                </div>
                <div class="instagram-review-item">
                    <a href="#"><img src="{{ asset('assets/img/insta_review/insta3.webp') }}" alt=""></a>
                </div>
                <div class="instagram-review-item">
                    <a href="#"><img src="{{ asset('assets/img/insta_review/insta4.webp') }}" alt=""></a>
                </div>
                <div class="instagram-review-item">
                    <a href="#"><img src="{{ asset('assets/img/insta_review/insta5.webp') }}" alt=""></a>
                </div>
                <div class="instagram-review-item">
                    <a href="#"><img src="{{ asset('assets/img/insta_review/insta6.webp') }}" alt=""></a>
                </div>
                <div class="instagram-review-item">
                    <a href="#"><img src="{{ asset('assets/img/insta_review/insta7.webp') }}" alt=""></a>
                </div>
                <div class="instagram-review-item">
                    <a href="#"><img src="{{ asset('assets/img/insta_review/insta8.webp') }}" alt=""></a>
                </div>
                <div class="instagram-review-item">
                    <a href="#"><img src="{{ asset('assets/img/insta_review/insta9.webp') }}" alt=""></a>
                </div>
                <div class="instagram-review-item">
                    <a href="#"><img src="{{ asset('assets/img/insta_review/insta10.webp') }}" alt=""></a>
                </div>
                <div class="instagram-review-item">
                    <a href="#"><img src="{{ asset('assets/img/insta_review/insta11.webp') }}" alt=""></a>
                </div>
                <div class="instagram-review-item">
                    <a href="#"><img src="{{ asset('assets/img/insta_review/insta12.webp') }}" alt=""></a>
                </div>
                <div class="instagram-review-item">
                    <a href="#"><img src="{{ asset('assets/img/insta_review/insta13.webp') }}" alt=""></a>
                </div>
                <div class="instagram-review-item">
                    <a href="#"><img src="{{ asset('assets/img/insta_review/insta14.webp') }}" alt=""></a>
                </div>
                <div class="instagram-review-item">
                    <a href="#"><img src="{{ asset('assets/img/insta_review/insta15.webp') }}" alt=""></a>
                </div>
                <div class="instagram-review-item">
                    <a href="#"><img src="{{ asset('assets/img/insta_review/insta16.webp') }}" alt=""></a>
                </div>
                <div class="instagram-review-item">
                    <a href="#"><img src="{{ asset('assets/img/insta_review/insta17.webp') }}" alt=""></a>
                </div>
                <div class="instagram-review-item">
                    <a href="#"><img src="{{ asset('assets/img/insta_review/insta18.webp') }}" alt=""></a>
                </div>
                <div class="instagram-review-item">
                    <a href="#"><img src="{{ asset('assets/img/insta_review/insta19.webp') }}" alt=""></a>
                </div>
                <div class="instagram-review-item">
                    <a href="#"><img src="{{ asset('assets/img/insta_review/insta20.webp') }}" alt=""></a>
                </div>
            </div>

        </div>

        <!-- All Reviews  -->
        <div class="grid wide review-container">
            <div class="section-title-container">
                <h2 class="section-title section-title-center">
                    <b></b>
                    <span class="section-title-main">Tất cả đánh giá</span>
                    <b></b>
                </h2>
                <p>Từ khách hàng đã mua đã xác minh</p>
            </div>
            
            <div class="review-list">
                <div class="review-list-header">
                    <div class="review-list-header__star-qty">
                        <div class="review-list-header__star-qty--star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <div class="review-list-header__star-qty--qty">2310 Reviews</div>
                        <div class="review-list-header__star-qty-extend-collapse">
                            <button class="js-extend-btn"><i class="extend fa-solid fa-chevron-down"></i></button>
                            <button class="js-collapse-btn"><i class="collapse fa-solid fa-chevron-up"></i></button>
                        </div>

                        <div class="js-review-list-star-container review-list-header__star-qty--detail-star">
                            <div class="detail-star__header">
                                <i class="fa-solid fa-star"></i>
                                <p>4.5</p>
                            </div>
                            <div class="detail-star__content">
                                <div class="detail-star__content--row 5-star">
                                    <div class="content-row__star-img">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="content-row__block">
                                        <div class="content-row__block--percent" style="--percent: 71.8%"></div>
                                    </div>
                                    <div class="content-row__amount">(1659)</div>
                                </div>
                                <div class="detail-star__content--row 4-star">
                                    <div class="content-row__star-img">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <div class="content-row__block">
                                        <div class="content-row__block--percent" style="--percent: 13.7%"></div>
                                    </div>
                                    <div class="content-row__amount">(317)</div>
                                </div>
                                <div class="detail-star__content--row 3-star">
                                    <div class="content-row__star-img">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <div class="content-row__block">
                                        <div class="content-row__block--percent" style="--percent: 7.2%"></div>
                                    </div>
                                    <div class="content-row__amount">(166)</div>
                                </div>
                                <div class="detail-star__content--row 2-star">
                                    <div class="content-row__star-img">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <div class="content-row__block">
                                        <div class="content-row__block--percent" style="--percent: 3.8%"></div>
                                    </div>
                                    <div class="content-row__amount">(88)</div>
                                </div>
                                <div class="detail-star__content--row 1-star">
                                    <div class="content-row__star-img">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <div class="content-row__block">
                                        <div class="content-row__block--percent" style="--percent: 3.5%"></div>
                                    </div>
                                    <div class="content-row__amount">(80)</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="review-list-header__sort">
                        <div class="review-list-header__sort--btn">
                            <button class="js-sliders-btn"><i class="fa-solid fa-sliders"></i></button>
                        </div>

                        <div class="js-sort-list-container review-list-header__sort--list">
                            <p>Sort by</p>
                            <ul>
                                <div class="sort-list-item">
                                    <li><button data-sort="featured" aria-label="Sort by Featured">
                                            <div class="sorting-option">Featured</div>
                                    </li>
                                </div>
                                <div class="sort-list-item">
                                    <li><button data-sort="newest" aria-label="Sort by Newest">
                                            <div class="sorting-option">Newest</div>
                                            <span><i class="fa-solid fa-check"></i></span>
                                    </li>

                                </div>
                                <div class="sort-list-item">
                                    <li><button data-sort="highest_ratings" aria-label="Sort by Highest Ratings">
                                            <div class="sorting-option">Highest Ratings</div>
                                    </li>
                                </div>
                                <div class="sort-list-item">
                                    <li><button data-sort="lowest_ratings" aria-label="Sort by Lowest Ratings">
                                            <div class="sorting-option">Lowest Ratings</div>
                                    </li>
                                </div>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="review-list-container">
                    <div class="review-list">
                        <div class="review-list-content grid-container">

                            <div class="col">

                                <div class="review-list-item">
                                    <div class="grid-item">

                                        <div class="review-list-item__detail">
                                            <div class="review-list-item__detail-col-1">
                                                <div class="review-list-item__detail--name">
                                                    <p>Customer</p>
                                                </div>
                                                <div class="review-list-item__detail--date">
                                                    <p>10/10/2022</p>
                                                </div>
                                                <div class="review-list-item__detail--star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star-half-stroke"></i>
                                                </div>
                                                <div class="review-list-item__detail--review">
                                                    This is a great keyboard has great stabs and they are not cheap
                                                    or anything.
                                                    The silent red switches are really good and all the keys sound
                                                    really good
                                                    also the Bluetooth is good and doesn’t have input lag.
                                                </div>
                                            </div>

                                            <div class="review-list-item__detail-col-2">
                                                <img src="../category/assets/img/80-series/L80 Christmas/Review/r1.jpg"
                                                    alt="">
                                            </div>

                                        </div>
                                        <div class="review-list-item__product">
                                            <div class="review-list-item__product--img">
                                                <img src="../category/assets/img/80-series/A80 Explorer/img1.webp"
                                                    alt="">
                                            </div>
                                            <div class="review-list-item__product--name">
                                                <p>IQUNIX A80 Explorer Wireless Mechanical Keyboard</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-list-item">
                                    <div class="grid-item">

                                        <div class="review-list-item__detail">
                                            <div class="review-list-item__detail-col-1">
                                                <div class="review-list-item__detail--name">
                                                    <p>Customer</p>
                                                </div>
                                                <div class="review-list-item__detail--date">
                                                    <p>10/10/2022</p>
                                                </div>
                                                <div class="review-list-item__detail--star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star-half-stroke"></i>
                                                </div>
                                                <div class="review-list-item__detail--review">
                                                    This is a great keyboard has great stabs and they are not cheap
                                                    or anything.
                                                    The silent red switches are really good and all the keys sound
                                                    really good
                                                    also the Bluetooth is good and doesn’t have input lag.

                                                </div>
                                            </div>

                                            <div class="review-list-item__detail-col-2">
                                                <img src="../category/assets/img/80-series/L80 Christmas/Review/r1.jpg"
                                                    alt="">
                                            </div>

                                        </div>
                                        <div class="review-list-item__product">
                                            <div class="review-list-item__product--img">
                                                <img src="../category/assets/img/80-series/A80 Explorer/img1.webp"
                                                    alt="">
                                            </div>
                                            <div class="review-list-item__product--name">
                                                <p>IQUNIX A80 Explorer Wireless Mechanical Keyboard</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-list-item">
                                    <div class="grid-item">

                                        <div class="review-list-item__detail">
                                            <div class="review-list-item__detail-col-1">
                                                <div class="review-list-item__detail--name">
                                                    <p>Customer</p>
                                                </div>
                                                <div class="review-list-item__detail--date">
                                                    <p>10/10/2022</p>
                                                </div>
                                                <div class="review-list-item__detail--star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star-half-stroke"></i>
                                                </div>
                                                <div class="review-list-item__detail--review">
                                                    This is a great keyboard has great stabs and they are not cheap
                                                    or anything.
                                                    The silent red switches are really good and all the keys sound
                                                    really good
                                                    also the Bluetooth is good and doesn’t have input lag.
                                                    This is a great keyboard has great stabs and they are not cheap
                                                    or anything.
                                                    The silent red switches are really good and all the keys sound
                                                    really good
                                                    also the Bluetooth is good and doesn’t have input lag.
                                                </div>
                                            </div>

                                            <div class="review-list-item__detail-col-2">
                                                <img src="../category/assets/img/80-series/L80 Christmas/Review/r1.jpg"
                                                    alt="">
                                            </div>

                                        </div>
                                        <div class="review-list-item__product">
                                            <div class="review-list-item__product--img">
                                                <img src="../category/assets/img/80-series/A80 Explorer/img1.webp"
                                                    alt="">
                                            </div>
                                            <div class="review-list-item__product--name">
                                                <p>IQUNIX A80 Explorer Wireless Mechanical Keyboard</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-list-item">
                                    <div class="grid-item">

                                        <div class="review-list-item__detail">
                                            <div class="review-list-item__detail-col-1">
                                                <div class="review-list-item__detail--name">
                                                    <p>Customer</p>
                                                </div>
                                                <div class="review-list-item__detail--date">
                                                    <p>10/10/2022</p>
                                                </div>
                                                <div class="review-list-item__detail--star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star-half-stroke"></i>
                                                </div>
                                                <div class="review-list-item__detail--review">
                                                    This is a great keyboard has great stabs and they are not cheap
                                                    or anything.
                                                    The silent red switches are really good and all the keys sound
                                                    really good
                                                    also the Bluetooth is good and doesn’t have input lag.
                                                </div>
                                            </div>

                                            <div class="review-list-item__detail-col-2">
                                                <img src="../category/assets/img/80-series/L80 Christmas/Review/r1.jpg"
                                                    alt="">
                                            </div>

                                        </div>
                                        <div class="review-list-item__product">
                                            <div class="review-list-item__product--img">
                                                <img src="../category/assets/img/80-series/A80 Explorer/img1.webp"
                                                    alt="">
                                            </div>
                                            <div class="review-list-item__product--name">
                                                <p>IQUNIX A80 Explorer Wireless Mechanical Keyboard</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">

                                <div class="review-list-item">
                                    <div class="grid-item">

                                        <div class="review-list-item__detail">
                                            <div class="review-list-item__detail-col-1">
                                                <div class="review-list-item__detail--name">
                                                    <p>Customer</p>
                                                </div>
                                                <div class="review-list-item__detail--date">
                                                    <p>10/10/2022</p>
                                                </div>
                                                <div class="review-list-item__detail--star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star-half-stroke"></i>
                                                </div>
                                                <div class="review-list-item__detail--review">
                                                    This is a great keyboard has great stabs and they are not cheap
                                                    or anything.
                                                    The silent red switches are really good and all the keys sound
                                                    really good
                                                    also the Bluetooth is good and doesn’t have input lag.
                                                </div>
                                            </div>

                                            <div class="review-list-item__detail-col-2">
                                                <img src="../category/assets/img/80-series/L80 Christmas/Review/r1.jpg"
                                                    alt="">
                                            </div>

                                        </div>
                                        <div class="review-list-item__product">
                                            <div class="review-list-item__product--img">
                                                <img src="../category/assets/img/80-series/A80 Explorer/img1.webp"
                                                    alt="">
                                            </div>
                                            <div class="review-list-item__product--name">
                                                <p>IQUNIX A80 Explorer Wireless Mechanical Keyboard</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-list-item">
                                    <div class="grid-item">

                                        <div class="review-list-item__detail">
                                            <div class="review-list-item__detail-col-1">
                                                <div class="review-list-item__detail--name">
                                                    <p>Customer</p>
                                                </div>
                                                <div class="review-list-item__detail--date">
                                                    <p>10/10/2022</p>
                                                </div>
                                                <div class="review-list-item__detail--star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star-half-stroke"></i>
                                                </div>
                                                <div class="review-list-item__detail--review">
                                                    This is a great keyboard has great stabs and they are not cheap
                                                    or anything.
                                                    The silent red switches are really good and all the keys sound
                                                    really good
                                                    also the Bluetooth is good and doesn’t have input lag.
                                                    This is a great keyboard has great stabs and they are not cheap
                                                    or anything.
                                                    The silent red switches are really good and all the keys sound
                                                    really good
                                                    also the Bluetooth is good and doesn’t have input lag.
                                                </div>
                                            </div>

                                            <div class="review-list-item__detail-col-2">
                                                <img src="../category/assets/img/80-series/L80 Christmas/Review/r1.jpg"
                                                    alt="">
                                            </div>

                                        </div>
                                        <div class="review-list-item__product">
                                            <div class="review-list-item__product--img">
                                                <img src="../category/assets/img/80-series/A80 Explorer/img1.webp"
                                                    alt="">
                                            </div>
                                            <div class="review-list-item__product--name">
                                                <p>IQUNIX A80 Explorer Wireless Mechanical Keyboard</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-list-item">
                                    <div class="grid-item">

                                        <div class="review-list-item__detail">
                                            <div class="review-list-item__detail-col-1">
                                                <div class="review-list-item__detail--name">
                                                    <p>Customer</p>
                                                </div>
                                                <div class="review-list-item__detail--date">
                                                    <p>10/10/2022</p>
                                                </div>
                                                <div class="review-list-item__detail--star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star-half-stroke"></i>
                                                </div>
                                                <div class="review-list-item__detail--review">
                                                    This is a great keyboard has great stabs and they are not cheap
                                                    or anything.
                                                    The silent red switches are really good and all the keys sound
                                                    really good
                                                    also the Bluetooth is good and doesn’t have input lag.
                                                    This is a great keyboard has great stabs and they are not cheap
                                                    or anything.
                                                    The silent red switches are really good and all the keys sound
                                                    really good
                                                    also the Bluetooth is good and doesn’t have input lag.
                                                </div>
                                            </div>

                                            <div class="review-list-item__detail-col-2">
                                                <img src="../category/assets/img/80-series/L80 Christmas/Review/r1.jpg"
                                                    alt="">
                                            </div>

                                        </div>
                                        <div class="review-list-item__product">
                                            <div class="review-list-item__product--img">
                                                <img src="../category/assets/img/80-series/A80 Explorer/img1.webp"
                                                    alt="">
                                            </div>
                                            <div class="review-list-item__product--name">
                                                <p>IQUNIX A80 Explorer Wireless Mechanical Keyboard</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-list-item">
                                    <div class="grid-item">

                                        <div class="review-list-item__detail">
                                            <div class="review-list-item__detail-col-1">
                                                <div class="review-list-item__detail--name">
                                                    <p>Customer</p>
                                                </div>
                                                <div class="review-list-item__detail--date">
                                                    <p>10/10/2022</p>
                                                </div>
                                                <div class="review-list-item__detail--star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star-half-stroke"></i>
                                                </div>
                                                <div class="review-list-item__detail--review">
                                                    This is a great keyboard has great stabs and they are not cheap
                                                    or anything.
                                                    The silent red switches are really good and all the keys sound
                                                    really good
                                                    also the Bluetooth is good and doesn’t have input lag.
                                                </div>
                                            </div>

                                            <div class="review-list-item__detail-col-2">
                                                <img src="../category/assets/img/80-series/L80 Christmas/Review/r1.jpg"
                                                    alt="">
                                            </div>

                                        </div>
                                        <div class="review-list-item__product">
                                            <div class="review-list-item__product--img">
                                                <img src="../category/assets/img/80-series/A80 Explorer/img1.webp"
                                                    alt="">
                                            </div>
                                            <div class="review-list-item__product--name">
                                                <p>IQUNIX A80 Explorer Wireless Mechanical Keyboard</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="review-list-body-footer">
                            <button class="js-show-more-btn show-more-btn">Show more reviews</button>
                        </div>
                    </div>

                    <div class="review-list-btn-show-more">

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/js/reviews.js') }}"></script>
@endsection
