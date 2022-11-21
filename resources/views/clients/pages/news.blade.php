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
                                <img src="{{asset('assets/img/news_post/news-post-1.jpg')}}" alt="">
                            </div>
                            <div>
                                <div class="post-item__title">Lập hội thần tốc - Mua bàn phím cực sốc</div>
                                <div class="post-item__time">18/11/2022</div>
                            </div>
                        </a>
                        <a href="" class="post-item b-b-100">
                            <div class="post-item__img">
                                <img src="{{asset('assets/img/news_post/news-post-2.jpg')}}" alt="">
                            </div>
                            <div>
                                <div class="post-item__title">Tưng bừng Giáng Sinh cùng IQUNIX Việt Nam</div>
                                <div class="post-item__time">17/11/2022</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col l-9 news__content">

                    <div class="news-post">
                        <div class="news-post__title">Lập hội thần tốc - Mua bàn phím cực sốc</div>
                        <hr class="hr-4">
                        <div class="news-post__time">Post on <span>18/11/2022</span> by Admin</div>
                        <div class="news-post__img">
                            <img src="{{asset('assets/img/news_post/news-post-1.jpg')}}" alt="">
                        </div>
                        <div class="news-post-content">
                            IQUNIX GIẢM SỐC 20% cho bàn phím cơ cao cấp F96 khi lập hội mua chung cùng nhau. Đợi chờ điều
                            chi nữa mà không kêu gọi
                            500 anh em tham gia đi!🎯Cách thức tham gia:👉Bước 1: Cùng anh em đồng chí tham gia vào nhóm mua
                            chung tại Zalo:THAM GIA
                            NGAY👉Bước 2: Chọn sản phẩm bạn muốn mua👉Bước 3: Thực hiện đặt hàng khi đủ số người tham gia
                            theo hướng dẫn của admin
                        </div>

                        <div class="news-post-btn">
                            <a href=""><button>Tiếp tục đọc<i class="fa-solid fa-arrow-right"></i></button></a>
                        </div>
                        <hr class="hr">
                    </div>

                    <div class="news-post">
                        <div class="news-post__title">Tưng bừng Giáng Sinh cùng IQUNIX Việt Nam</div>
                        <hr class="hr-4">
                        <div class="news-post__time">Post on <span>17/11/2022</span> by Admin</div>
                        <div class="news-post__img">
                            <img src="{{asset('assets/img/news_post/news-post-2.jpg')}}" alt="">
                        </div>
                        <div class="news-post-content">
                            Là dòng bàn phím có số lượng phím đầy đủ nhất với nhiều tính năng nổi trội, F96 Series luôn nằm
                            trong danh mục “Best
                            Seller” của IQUNIX ở khắp các thị trường. Bàn phím cơ cao cấp IQUNIX F96 Series không chỉ có độ
                            bền cao, thiết kế thời
                            trang mà còn giúp bạn nâng cao tốc độ gõ khi làm việc hoặc chơi game với độ chính xác cực cao.
                            Để đánh dấu việc chính thức ra mắt tại thị trường Việt Nam, IQUNIX hân hạnh mang đến chương
                            trình quà tặng bất ngờ trong
                            mùa Giáng sinh năm nay. Theo đó, 5O chiếc gối văn phòng IQUNIX xinh xắn sẽ dành tặng cho 5O
                            khách hàng đầu tiên đặt mua
                            bàn phím cơ IQUNIX thuộc dòng F96.
                        </div>

                        <div class="news-post-btn">
                            <a href=""><button>Tiếp tục đọc<i class="fa-solid fa-arrow-right"></i></button></a>
                        </div>
                        <hr class="hr">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
