@extends('layouts.master')
{{--@section('title', $titlesTranslation["MülkiKollegiya"])--}}
@section('content')
    <div class="laws colleges">
        @foreach($singleapparatss as $singleapparats)
            <h2 class="coll-title text-center">
{{--                {{$titlesTranslation['AzərbaycanRespublikasınınHüquqiAktları']}}test--}}
                {{$singleapparats->title}}
            </h2>
            <a href="" class="article first d-flex align-items-center" target="_blank">
                <span class="coll-text">
                {{$singleapparats->link}}
                </span>
            </a>
        @endforeach
    </div>
@endsection


