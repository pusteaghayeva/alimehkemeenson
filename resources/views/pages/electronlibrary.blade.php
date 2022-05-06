@extends('layouts.master')
@section('title', 'Elektron Kitabxana')
@section('content')


    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center">Elektron Kitabxana</h2>
        <ul>
            @foreach($electronlibrarys as $electronlibrary)
            <li>
                <a class="cool-link" target="_blank" href="{{$electronlibrary->link}}" target="_blank">
                    <img src="{{asset('storage/'.$electronlibrary->image)}}" alt=""> {{$electronlibrary->title}}
                </a>
            </li>
            @endforeach
{{--            <li>--}}
{{--                <a class="cool-link" target="_blank" href=" http://e-kitab.nakhchivan.az/Az/AltKatKitablar.aspx?AltKatID=35&KatID=5" target="_blank">--}}
{{--                    <img src="./assets/img/library4.png" alt="">Naxçıvan Muxtar Respublika Kitabxanası--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="cool-link" target="_blank" href=" https://www.ebooks.az/category_law.html" target="_blank">--}}
{{--                    <img src="./assets/img/library.png" alt="">Prezident Kitabxanası</a>--}}
{{--            </li>--}}

{{--            <li>--}}
{{--                <a class="cool-link" href="nmrelectronlibrary.html">--}}
{{--                    <img src="./assets/img/library4.png" alt="">Naxçıvan MR Ali Məhkəməsinin elektron bazası</a>--}}
{{--            </li>--}}


        </ul>
    </div>


@endsection



