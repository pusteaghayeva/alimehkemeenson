@extends('layouts.master')
@section('title', $titlesTranslation["BeynəlxalqHüquqiSənədlər"])
@section('content')
    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center mt-5">
            {{$titlesTranslation['BeynəlxalqHüquqiSənədlər']}}
        </h2>
        <ul>
            @foreach($internationaldocuments as $internationaldocument)
                <?php

                    switch ($locale){
                        case "ru": $pdf_url ='/storage/'.json_decode($internationaldocument->pdf_ru)[0]->download_link; break;
                        case "en": $pdf_url ='/storage/'.json_decode($internationaldocument->pdf_en)[0]->download_link; break;
                        default : $pdf_url ='/storage/'.json_decode($internationaldocument->pdf_az)[0]->download_link;
                    }

                ?>
                <li>
                    <a class="cool-link"
                       href="{{asset($pdf_url)}}"
                       target="_blank">
                       {{$internationaldocument->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
