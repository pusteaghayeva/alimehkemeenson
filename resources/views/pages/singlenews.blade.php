@extends('layouts.master')
@section('title', $titlesTranslation["Xəbərlər"])
@section('content')

    <section class="blog-area pt-5 pb-5">
        <div class="container">
            <div class="row">
                @foreach($singlenewss as $singlenews_item)
                    <div class="colleges single-news ">
                        <h2 class="coll-title ">{{$singlenews_item->title}}</h2>
                        <div class="container single_text">
                            <img src="{{asset('storage/'.$singlenews_item->image)}}" class="coll-image m-auto" alt="">
                            <p class="coll-text text-justify"> {!! $singlenews_item->content !!}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection