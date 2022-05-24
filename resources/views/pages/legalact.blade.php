@extends('layouts.master')
@section('title', $titlesTranslation["AzərbaycanRespublikasınınHüquqiAktları"])
@section('content')
    <div class="laws colleges">
        <h2 class="coll-title text-center">
            {{$titlesTranslation['AzərbaycanRespublikasınınHüquqiAktları']}}
        </h2>
        @foreach($legalacts as $legalact)
            <a href="{{
            ($legalact->getTranslatedAttribute('link', $locale, 'fallbackLocale'))}}" class="article first d-flex align-items-center">
                <img src="{{asset('storage/'.$legalact->image)}}" alt="" class="coll-img">
                <span class="coll-text">
                    {{$legalact->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                </span>
            </a>
        @endforeach
    </div>
@endsection


