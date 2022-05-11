@extends('layouts.master')
@section('title', $page->getTranslatedAttribute('title', $locale, 'fallbackLocale'))
@section('content')

    <div class="about-content container">
        <h3 class="about-title text-center text-dark mt-5 fw-bold">{{$page->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</h3>
        <p class="about-text">{!! $page->getTranslatedAttribute('body', $locale, 'fallbackLocale') !!}</p>
    </div>


@endsection
