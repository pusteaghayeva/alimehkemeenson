@extends('layouts.master')
@section('title', $titlesTranslation["MəhkəməninStrukturu"])
@section('content')
    <div class="laws colleges" style="min-height: 200px;">
        @foreach($singleapparatss as $singleapparats)
            <h2 class="coll-title text-center">
                {{$singleapparats->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}
            </h2>
            <a href="{{$singleapparats->link}}" class="article first d-flex align-items-center" target="_blank">
                <span class="coll-text">
{{--                    {{$singleapparats->getTranslatedAttribute('position', $locale, 'fallbackLocale')}}:--}}
{{--                    {{$singleapparats->getTranslatedAttribute('member', $locale, 'fallbackLocale')}}--}}
                </span>
            </a>
        @endforeach
    </div>
@endsection


