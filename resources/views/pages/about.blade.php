@extends('layouts.master')
@section('title', 'Ümumi məlumat')
@section('content')

    <div class="about-content container">

        @foreach($abouts as $about)
            <h3 class="about-title text-center">{{$about->title}}</h3>
            <p class="about-text">{!! $about->content !!}</p>
        @endforeach

    </div>


@endsection
