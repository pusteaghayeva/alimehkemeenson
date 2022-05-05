@extends('layouts.master')
@section('title', $page->title)
@section('content')

    <div class="about-content container">
            <h3 class="about-title text-center">{{$page->title}}</h3>
            <p class="about-text">{!! $page->body !!}</p>
    </div>


@endsection
