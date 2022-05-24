@extends('layouts.master')
@section('title')
@section('title', $titlesTranslation["Çıxışlar"])
@endsection
@section('content')
    <section class="blog-area pt-5 pb-5">
        <div class="container">
            <div class="row">
                @foreach($singlespeechs as $singlespeech)
                    <div class="colleges single-news ">
                        <h2 class="coll-title text-center">
                            {{$singlespeech->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                        </h2>
                        <div class="container single_text">
                            <p class="coll-text text-justify">
                                {!!  $singlespeech->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection