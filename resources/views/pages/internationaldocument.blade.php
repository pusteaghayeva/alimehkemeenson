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

                    if($internationaldocument->pdf_ru != NULL){
                        $downloadLinkRu = json_decode($internationaldocument->pdf_ru)[0]->download_link;
                    }else{
                        $downloadLinkRu ="redirectBack";
                    }
                    if($internationaldocument->pdf_en != NULL){
                        $downloadLinkEn = json_decode($internationaldocument->pdf_en)[0]->download_link;
                    }else{
                        $downloadLinkEn ="redirectBack";
                    }
                    if($internationaldocument->pdf_az != NULL){
                        $downloadLinkAz = json_decode($internationaldocument->pdf_az)[0]->download_link;
                    }else{
                        $downloadLinkAz ="redirectBack";
                    }



                    switch ($locale){
                        case "ru": $pdf_url ='/storage/'.$downloadLinkRu; break;
                        case "en": $pdf_url ='/storage/'.$downloadLinkEn; break;
                        default : $pdf_url ='/storage/'.$downloadLinkAz;
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
