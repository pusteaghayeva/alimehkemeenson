@extends('layouts.master')
@section('title', $titlesTranslation["ElektronKitabxana"])
@section('content')
    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center mt-5">
            {{$titlesTranslation['ElektronKitabxana']}}
        </h2>
        <ul>
            @foreach($electronlibrarys as $electronlibrary)
            <li>
                <a class="cool-link" href="{{$electronlibrary->link}}">
                    <img src="{{asset('storage/'.$electronlibrary->image)}}" alt="">
                    {{$electronlibrary->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                </a>
            </li>
            @endforeach

        </ul>
    </div>


@endsection



