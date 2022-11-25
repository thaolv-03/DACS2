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

                        @foreach ($latestNews as $news)
                            <a href="/news/show/{{$news->id}}" class="post-item b-b-100">
                                <div class="post-item__img">
                                    <img src="{{ asset('storage/'.$news->image) }}" alt="">
                                </div>
                                <div>
                                    <div class="post-item__title">{{$news->title}}</div>
                                    <div class="post-item__time">{{$news->created_at}}</div>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>
                <div class="col l-9 news__content">

                    @foreach($listNews as $news)

                        <div class="news-post">
                            <div class="news-post__title">{{$news->title}}</div>
                            <hr class="hr-4">
                            <div class="news-post__time">Post on <span>{{$news->created_at}}</span> by Admin</div>
                            <div class="news-post__img">
                                <img src="{{ asset('storage/'.$news->image) }}" alt="">
                            </div>
                            {{-- <div class="news-post-content">
                                {!!$news->content!!}
                            </div> --}}

                            <div class="news-post-btn">
                                <a href="/news/show/{{$news->id}}"><button>Xem chi tiết<i class="fa-solid fa-arrow-right"></i></button></a>
                            </div>
                            <hr class="hr">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
