@extends('layouts.master')
@section('title', 'Xəbərlər')

{{--@section('title')--}}
{{--    {{$singlenews[0]->title}}--}}
{{--@endsection--}}
@section('content')

    <section class="blog-area pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center pb-3">
                    <div class="section-title service-title">

{{--                        <h2>Xəbərlər</h2>--}}
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($singlenewss as $singlenews)
                    <div class="colleges single-news ">
{{--                        <h2 class="coll-title ">{{$singlenews->title}}</h2>--}}
                        <div class="container single_text">
                            <img src="assets/img/news/tedbir 1.jpeg" class="coll-image m-auto" alt="">
{{--                            <p class="coll-text text-justify"> {!! $singlenews->content !!}</p>--}}
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection