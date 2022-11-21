@extends('layout.master')

@section('title')
    Tin tức
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/news.css') }}">
@endsection

@section('content')
    <div class="grid wide news-container">
        <div class="title">Tin tức</div>

        <div class="content">
            <div class="row news">
                <div class="col l-3 news__sidebar">
                    <div class="news__sidebar--title">Bài viết mới nhất</div>
                    <hr class="hr-3">
                    <div class="news__sidebar--post">

                        <a href="" class="post-item b-b-100">
                            <div class="post-item__img">
                                <img src="{{ asset('assets/img/news_post/news-post-1.jpg') }}" alt="">
                            </div>
                            <div>
                                <div class="post-item__title">Lập hội thần tốc - Mua bàn phím cực sốc</div>
                                <div class="post-item__time">18/11/2022</div>
                            </div>
                        </a>
                        <a href="" class="post-item b-b-100">
                            <div class="post-item__img">
                                <img src="{{ asset('assets/img/news_post/news-post-2.jpg') }}" alt="">
                            </div>
                            <div>
                                <div class="post-item__title">Tưng bừng Giáng Sinh cùng IQUNIX Việt Nam</div>
                                <div class="post-item__time">17/11/2022</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col l-9 news-detail__content">

                    <div class="news-post">
                        <div class="news-post__title">Lập hội thần tốc - Mua bàn phím cực sốc</div>
                        <hr class="hr-4">
                        <div class="news-post__time">Post on <span>18/11/2022</span> by Admin</div>
                        <div class="news-post__img">
                            <img src="{{ asset('assets/img/news_post/news-post-1.jpg') }}" alt="">
                        </div>
                        <div class="news-detail-post-content">
                            IQUNIX GIẢM SỐC 20% cho bàn phím cơ cao cấp F96 khi lập hội mua chung cùng nhau. Đợi chờ điều
                            chi nữa mà không kêu gọi 500 anh em tham gia đi!
                            <br>
                            🎯Cách thức tham gia:
                            <br>
                            👉Bước 1: Cùng anh em đồng chí tham gia vào nhóm mua chung tại Zalo:
                            <br>
                            THAM GIA NGAY
                            <br>
                            👉Bước 2: Chọn sản phẩm bạn muốn mua
                            <br>
                            👉Bước 3: Thực hiện đặt hàng khi đủ số người tham gia theo hướng dẫn của admin
                            <br>
                            🎯Sản phẩm áp dụng khuyến mãi:
                            <br>
                            👉Bàn phím IQUNIX F96 Joker Wireless RGB các phiên bản Cherry Brown, Red, Blue
                            <br>
                            👉Bàn phím IQUNIX F96 Coral Sea Wireless RGB các phiên bản Cherry Brown, Blue
                            <br>

                            🎯Thời gian diễn ra khuyến mãi:
                            <br>
                            👉Thời gian không giới hạn nhưng số lượng sản phẩm thì có hạn, các bạn nhanh chân tham gia nha!
                            Quá trời là hấp dẫn rồi, nhanh nhanh rủ hội anh em chốt ngay bàn phím cơ IQUNIX F96 nào cả nhà
                            ơi!
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
