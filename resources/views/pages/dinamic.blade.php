@extends('layouts.master')
@section('title', $page->getTranslatedAttribute('title', $locale, 'fallbackLocale'))
@section('content')

    <div class="about-content container">
        <h3 class="about-title text-center text-dark">{{$page->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</h3>
        <p class="about-text">{!! $page->getTranslatedAttribute('body', $locale, 'fallbackLocale') !!}</p>
    </div>

    @if($page->slug=="online")
        <div class="letters">
            <div class="letter-write container">
                <div class="letter">
                    <a href="" class="apply">Müraciət etmək</a>
                </div>
            </div>
        </div>

    @endif

@endsection
