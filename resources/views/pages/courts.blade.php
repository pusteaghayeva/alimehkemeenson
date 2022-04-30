@extends('layouts.master')
@section('title', 'Ümumi məlumat')
@section('content')

<div class="about first-down-menu container">

    <div class="first-down-title">
        @foreach($courts as $court){
        <h2 class="first-dm-title text-center mt-5">Ali Məhkəmə - 90</h2>

        <div class="card court-card">
            <div class="card-body">
                <a href="{{$court->link}}" class="court-link">{{$court->title}}</a>
            </div>
        </div>
        @endforeach
{{--        <div class="card court-card">--}}
{{--            <div class="card-body">--}}
{{--                <a href="about.html" class="court-link">Naxçıvan Muxtar Respublikası Ali Məclisi Sədrinin Sərəncamı</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card court-card">--}}
{{--            <div class="card-body">--}}
{{--                <a href="about.html" class="court-link">Naxçıvan Muxtar Respublikası Ali Məhkəməsi - 90</a>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>

@endsection