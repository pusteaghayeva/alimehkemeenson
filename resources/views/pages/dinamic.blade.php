@extends('layouts.master')
@section('title', $page->title)
@section('content')

    <div class="about-content container">
        <h3 class="about-title text-center text-dark">{{$page->title}}</h3>
        <p class="about-text">{!! $page->body !!}</p>
    </div>

    @if($page->slug=="online")
        <div class="letters">
            <div class="letter-write container">
                <div class="letter">
                    <a href="" class="apply">Muraciet etmek</a>
                </div>
            </div>
        </div>

    @endif

@endsection
