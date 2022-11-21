<header>
    <div id="header" class="grid wide">
        <div class="logo">
            <a href="{{route('home.index');}}"><img src="{{asset('assets/img/logo/Logo_1.png')}}" alt="logo"></a>
        </div>

        <div class="navigation">
            <div class="nav-left">
                <div class="nav nav--product">
                    <a href="{{route('shop.index');}}">Sản phẩm<i class="icon-nav fa-solid fa-caret-down"></i></a>
                    <hr class="hr-1">
                    <div class="product__list">
                        <ul>
                            <li><a href="">F97 Series</a></li>
                            <li><a href="">F96 Series</a></li>
                            <li><a href="">80 Series</a></li>
                            <li><a href="">ZX75 Series</a></li>
                            <li><a href="">F60 Series</a></li>
                            <li><a href="">ITXCASE</a></li>
                            <li><a href="">Desk Mat</a></li>
                            <li><a href="">Keycaps</a></li>
                        </ul>
                    </div>
                </div>
                <div class="nav nav--review">
                    <a href="{{route('reviews.index');}}">Đánh giá</a>
                    <hr class="hr-1">
                </div>
                <div class="nav nav--blog">
                    <a href="{{route('blog.index');}}">Bài viết</a>
                    <hr class="hr-1">
                </div>
                <div class="nav nav--news">
                    <a href="{{route('news.index');}}">Tin tức</a>
                    <hr class="hr-1">
                </div>
                <div class="nav nav--support">
                    <a href="{{route('download.index');}}">Hỗ trợ<i class="icon-nav fa-solid fa-caret-down"></i></a>
                    <hr class="hr-1">
                    <div class="download">
                        <ul>
                            <li><a href="{{route('download.index');}}">Download</a></li>
                        </ul>
                    </div>
                </div>
                <div class="nav nav--contact">
                    <a href="{{route('contact.index');}}">Liên hệ</a>
                    <hr class="hr-1">
                </div>
            </div>
            <div class="nav-right">
                <div class="nav nav--search">
                    <a href="#"><img style="width: 20px;" src="{{asset('assets/img/icon_header/search.png')}}" alt=""></a>
                    <hr class="hr-1">
                    <div class="nav__search">
                        <input type="text" placeholder="Tìm kiếm...">
                        <i class="search__icon fa-solid fa-magnifying-glass"></i>

                    </div>
                </div>
                <div class="nav nav--cart js-cart-btn">
                    <img style="width: 20px;" src="{{asset('assets/img/icon_header/cart.png')}}" alt="">
                    <hr class="hr-1">
                </div>
                <div class="nav nav--info">
                    <a href="{{ route('login.index') }}"><img style="width: 20px;" src="{{asset('assets/img/icon_header/user.png')}}"
                            alt=""></a>
                    <hr class="hr-1">
                </div>
            </div>
        </div>
    </div>

    <!--------------- CART --------------->
    @include('clients.components.cart')
</header>