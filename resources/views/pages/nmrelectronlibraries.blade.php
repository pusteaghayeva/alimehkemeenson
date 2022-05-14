@extends('layouts.master')
@section('title', $titlesTranslation["NaxçıvanMRAliMəhkəməsininElektronBazası"])

@section('content')
    <div class="wrap">
        @foreach($nmrelectronlibraries as $nmrelectronlibrary)
        <div class="box">
            <div class="boxInner">
                <a href="{{asset('/storage/'.json_decode($nmrelectronlibrary->pdf)[0]->download_link)}}">
                    <img src="{{asset('storage/'.$nmrelectronlibrary->image)}}" />
                </a>
            </div>
        </div>
        @endforeach

    </div>
@endsection



