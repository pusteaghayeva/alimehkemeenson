@extends('layouts.master')
@section('title', $titlesTranslation["Xəbərlər"])
@section('content')

    <section class="blog-area pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center pb-3">
                    <div class="section-title service-title">

                        <h2 class="first-dm-title text-center  mt-5">
                            {{$titlesTranslation['Xəbərlər']}}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($news as $news_item)
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="blog-wrapper home-blog-wrapper white-bg">
                            <div class="blog-thumb">
                                <a href="{{route('singlenews', ['singlenews'=>$news_item->id])}}">
                                    <?php
                                    if (!empty($news_item->image)) {
                                        $image = $news_item->image;
                                    } else {
                                        $image = 'alimeh.jpg';
                                    }
                                    ?>
                                    <img src="{{asset('storage/'.$image)}}" alt=""/>
                                </a>
                            </div>
                            {{--                            <div class="meta-info">--}}
                            {{--                                <ul>--}}
                            {{--                                    <li class="posts-time">{{$news_item->created_at}}</li>--}}
                            {{--                                </ul>--}}
                            {{--                            </div>--}}
                            <div class="blog-content home-blog">
                                <h2 class="blog-title text-uppercase">
                                    <a href="{{route('singlenews', ['singlenews'=>$news_item->id])}}"
                                       class="text-justify">
                                        {{mb_substr($news_item->getTranslatedAttribute('title', $locale, 'fallbackLocale'), 0, 100)}}
                                    </a>
                                </h2>
                                <p>
                                    {!! mb_substr(html_entity_decode (strip_tags($news_item->getTranslatedAttribute('content', $locale, 'fallbackLocale'))), 0, 115) !!}
                                </p>

                            </div>
                            <div class="link-box home-blog-link">
                                <a href="{{route('singlenews', ['singlenews'=>$news_item->id])}}">
                                    {{$news_item->getTranslatedAttribute('read_more', $locale, 'fallbackLocale') }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <div class="text-center"> {{$news->appends(request()->input())->links()}}</div>
@endsection