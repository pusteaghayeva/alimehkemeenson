@extends('layouts.master')
@section('title', 'Xəbərlər')
@section('content')

    <section class="blog-area pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center pb-3">
                    <div class="section-title service-title">

                        <h2>Xəbərlər</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($news as $news_item)
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="blog-wrapper home-blog-wrapper white-bg">
                        <div class="blog-thumb">
                            <a href="{{route('singlenews', ['singlenews'=>$news_item->id])}}">
                                <img src="{{asset('storage/'.$news_item->image)}}" alt="" />
                            </a>
                        </div>
                        <div class="meta-info">
                            <ul>
                                <li class="posts-time">{{$news_item->created_at}}</li>
                            </ul>
                        </div>
                        <div class="blog-content home-blog">
                            <h2 class="blog-title">
                                <a href="{{route('singlenews', ['singlenews'=>$news_item->id])}}" class="text-justify">
                                    {{$news_item->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}

                                </a>
                            </h2>
                            <p>{!! mb_substr(html_entity_decode (strip_tags($news_item->getTranslatedAttribute('content', $locale, 'fallbackLocale'))), 0, 115) !!}</p>
{{--                            {!! $singledecisionpresidia->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}--}}

                        </div>
                        <div class="link-box home-blog-link">
                            <a href="{{route('singlenews', ['singlenews'=>$news_item->id])}}">Ardını oxu</a>
                        </div>
                    </div>
                </div>
                @endforeach
{{--                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">--}}
{{--                    <div class="blog-wrapper home-blog-wrapper white-bg">--}}
{{--                        <div class="blog-thumb">--}}
{{--                            <a href="single_news.html">--}}
{{--                                <img src="assets/img/news/tedbir 1.jpeg" alt="" />--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="meta-info">--}}
{{--                            <ul>--}}
{{--                                <li class="posts-time">Yanvar 08, 2022</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="blog-content home-blog">--}}
{{--                            <h2 class="blog-title">--}}
{{--                                <a href="single_news.html">Dekabrın 27-də Naxçıvan Muxtar Respublikası Ali Məhkəməsinin kollektivi əsgərlərə bayram sovqatı aparıb.</a>--}}
{{--                            </h2>--}}
{{--                            <p>31 Dekabr Dünya Azərbaycanlılarının Həmrəyliyi Günü münasibətilə Naxçıvan Muxtar Respublikası Ali Məhkəməsinin, Kəngərli rayon İcra Hakimiyyətinin, "Naxçıvan Aqrolizinq " ASC-nin və Nur Qida MMC-nin kollektivləri Kəngərli rayonundakı--}}
{{--                                hərbi hissəyə bayram sovqatı aparıb. </p>--}}
{{--                        </div>--}}
{{--                        <div class="link-box home-blog-link">--}}
{{--                            <a href="https://bit.ly/2LHKl61">Ardını oxu</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">--}}
{{--                    <div class="blog-wrapper home-blog-wrapper white-bg">--}}
{{--                        <div class="blog-thumb">--}}
{{--                            <a href="single_news.html">--}}
{{--                                <img src="assets/img/news/tedbir 1.jpeg" alt="" />--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="meta-info">--}}
{{--                            <ul>--}}
{{--                                <li class="posts-time">Yanvar 08, 2022</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="blog-content home-blog">--}}
{{--                            <h2 class="blog-title">--}}
{{--                                <a href="single_news.html">Dekabrın 27-də Naxçıvan Muxtar Respublikası Ali Məhkəməsinin kollektivi əsgərlərə bayram sovqatı aparıb.</a>--}}
{{--                            </h2>--}}
{{--                            <p>31 Dekabr Dünya Azərbaycanlılarının Həmrəyliyi Günü münasibətilə Naxçıvan Muxtar Respublikası Ali Məhkəməsinin, Kəngərli rayon İcra Hakimiyyətinin, "Naxçıvan Aqrolizinq " ASC-nin və Nur Qida MMC-nin kollektivləri Kəngərli rayonundakı--}}
{{--                                hərbi hissəyə bayram sovqatı aparıb. </p>--}}
{{--                        </div>--}}
{{--                        <div class="link-box home-blog-link">--}}
{{--                            <a href="https://bit.ly/2LHKl61">Ardını oxu</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">--}}
{{--                    <div class="blog-wrapper home-blog-wrapper white-bg">--}}
{{--                        <div class="blog-thumb">--}}
{{--                            <a href="single_news.html">--}}
{{--                                <img src="assets/img/news/tedbir 1.jpeg" alt="" />--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="meta-info">--}}
{{--                            <ul>--}}
{{--                                <li class="posts-time">Yanvar 08, 2022</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="blog-content home-blog">--}}
{{--                            <h2 class="blog-title">--}}
{{--                                <a href="single_news.html">Dekabrın 27-də Naxçıvan Muxtar Respublikası Ali Məhkəməsinin kollektivi əsgərlərə bayram sovqatı aparıb.</a>--}}
{{--                            </h2>--}}
{{--                            <p>31 Dekabr Dünya Azərbaycanlılarının Həmrəyliyi Günü münasibətilə Naxçıvan Muxtar Respublikası Ali Məhkəməsinin, Kəngərli rayon İcra Hakimiyyətinin, "Naxçıvan Aqrolizinq ". </p>--}}
{{--                        </div>--}}
{{--                        <div class="link-box home-blog-link">--}}
{{--                            <a href="https://bit.ly/2LHKl61">Ardını oxu</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">--}}
{{--                    <div class="blog-wrapper home-blog-wrapper white-bg">--}}
{{--                        <div class="blog-thumb">--}}
{{--                            <a href="single_news.html">--}}
{{--                                <img src="assets/img/news/tedbir 1.jpeg" alt="" />--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="meta-info">--}}
{{--                            <ul>--}}
{{--                                <li class="posts-time">Yanvar 08, 2022</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="blog-content home-blog">--}}
{{--                            <h2 class="blog-title">--}}
{{--                                <a href="single_news.html">Dekabrın 27-də Naxçıvan Muxtar Respublikası Ali Məhkəməsinin kollektivi əsgərlərə bayram sovqatı aparıb.</a>--}}
{{--                            </h2>--}}
{{--                            <p>31 Dekabr Dünya Azərbaycanlılarının Həmrəyliyi Günü münasibətilə Naxçıvan Muxtar Respublikası Ali Məhkəməsinin, Kəngərli rayon İcra Hakimiyyətinin, "Naxçıvan Aqrolizinq "</p>--}}
{{--                        </div>--}}
{{--                        <div class="link-box home-blog-link">--}}
{{--                            <a href="https://bit.ly/2LHKl61">Ardını oxu</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>

@endsection