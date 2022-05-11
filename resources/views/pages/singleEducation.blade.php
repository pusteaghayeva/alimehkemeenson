@extends('layouts.master')
@section('title')
{{--    {{$singlenews[0]->title}}--}}
@endsection
@section('content')
    <section class="blog-area pt-5 pb-5">
        <div class="container">
            <div class="row">
                @foreach($singleeducations as $singleeducation)
                    <div class="colleges single-news ">
                        <h2 class="coll-title text-center">{{$singleeducation->title}}</h2>
                        <div class="container single_text">
                            <p class="coll-text text-justify"> {!! $singleeducation->content !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection