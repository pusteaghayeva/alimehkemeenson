@extends('layouts.master')
@section('title', $titlesTranslation["OnlaynMüraciət"])
@section('content')

    <div class='container apparatus'>
        <div class='row'>
                <div class="letter-first text-justify">
                    @foreach($applyonlines as $applyonline)
                        <h2 class="letter-title text-center">{{$applyonline->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</h2>
                        <p class="rules">{!! $applyonline->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}</p>
                    @endforeach
                </div>
                <button type='button' class="btn-lg btn-success w-auto m-auto" onclick="window.location.href='{{route('mail')}}'">{{$applyonline->getTranslatedAttribute('button', $locale, 'fallbackLocale') }}</button>
        </div>
    </div>

@endsection
