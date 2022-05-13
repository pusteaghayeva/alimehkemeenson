@extends('layouts.master')
@section('title', 'Azərbaycan Respublikasının hüquqi aktları')
@section('content')
    <div class="laws colleges">
        <h2 class="coll-title text-center">
            {{$titlesTranslation['AzərbaycanRespublikasınınHüquqiAktları']}}
        </h2>
        @foreach($legalacts as $legalact)
            <a href="{{$legalact->link}}" class="article first d-flex align-items-center" target="_blank">
                <img src="{{asset('storage/'.$legalact->image)}}" alt="" class="coll-img">
                <span class="coll-text">
                    {{$legalact->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                </span>
            </a>
        @endforeach
    </div>
@endsection


