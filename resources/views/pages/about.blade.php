@extends('layouts.master')
@section('title', 'Ümumi məlumat')
@section('content')

    <div class="about-content container">

{{--        <h3 class="about-title">{{$about->title}}</h3>--}}

        @foreach($abouts as $about)
            <h3 class="about-title text-center">{{$about->title}}</h3>
{{--        <h3 class="second-title">Naxçıvan Muxtar Respublikası Ali Məhkəməsi apellyasiya instansiyası məhkəməsi kimi öz ərazi yurisdiksiyasına aid edilmiş birinci instansiya məhkəmələri tərəfindən baxılmış işlər üzrə məhkəmə aktlarından verilmiş apellyasiya şikayətləri və apellyasiya--}}
{{--            protestləri üzrə işlərə baxır. Naxçıvan Muxtar Respublikası Ali Məhkəməsi mülki kollegiyadan, inzibati kollegiyadan, kommersiya kollegiyasından və cinayət kollegiyadan ibarətdir.</h3>--}}
{{--        <h2 class="about-title-se">NAXÇIVAN MR ALİ MƏHKƏMƏSİNİN TARİXİ</h2>--}}
        <p class="about-text">{!! $about->content !!}</p>
        @endforeach


    </div>


@endsection
