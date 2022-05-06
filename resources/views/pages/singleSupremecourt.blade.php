@extends('layouts.master')
@section('title')
{{--    {{$singlenews[0]->title}}--}}
@endsection
@section('content')

    <section class="blog-area pt-5 pb-5">
        <div class="container">
            <div class="row">
                @foreach($singlesupremecourts as $singlesupremecourt)
                    <div class="colleges single-news ">
                        <h2 class="coll-title text-center">{{$singlesupremecourt->title}}</h2>
                        <div class="container single_text">
{{--                            <img src="{{asset('storage/'.$singlenews->image)}}" class="coll-image m-auto" alt="">--}}
                            <p class="coll-text text-justify"> {!! $singlesupremecourt->content !!}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection