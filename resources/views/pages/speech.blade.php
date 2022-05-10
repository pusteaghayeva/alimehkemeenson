@extends('layouts.master')
@section('title', 'Çıxışlar')
@section('content')


    <div class="speech">
        <div class="container">
            @foreach($speechs as $speech)
                <div class="bd-speech bd-speech-warning">
                    <h3 class="speech-title">
                        {{$speech->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                    </h3>
                    <div class="speech-text">
                        <a href="{{route('singlespeech', ['singlespeech'=>$speech->id])}}" class="speech-link">
                            {{mb_substr(html_entity_decode (strip_tags($speech->getTranslatedAttribute('content', $locale, 'fallbackLocale'))), 0, 400) }}
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>


@endsection