@extends('layouts.master')
@section('title', 'Naxçıvan Muxtar Respublikasının Elektron kitabxanası')
@section('content')

    <div class="wrap">
        @foreach($nmrelectronlibraries as $nmrelectronlibrary)
        <div class="box">
            <div class="boxInner">
                <a href="{{asset('/storage/'.json_decode($nmrelectronlibrary->pdf))}}">
                    <img src="{{asset('storage/'.$nmrelectronlibrary->image)}}" />
                </a>
            </div>
        </div>
        @endforeach

    </div>
@endsection



