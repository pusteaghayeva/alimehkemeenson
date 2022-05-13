@extends('layouts.master')
@section('title', 'Beynəlxalq hüquqi sənədlər')
@section('content')
    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center mt-5">
            {{$titlesTranslation['BeynəlxalqHüquqiSənədlər']}}
        </h2>
        <ul>
            @foreach($internationaldocuments as $internationaldocument)
                <li>
                    <a class="cool-link"
                       href="{{asset('/storage/'.json_decode($internationaldocument->pdf)[0]->download_link)}}"
                       target="_blank">
                        {{$internationaldocument->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

@endsection