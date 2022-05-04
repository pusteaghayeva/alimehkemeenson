@extends('layouts.master')
@section('title', 'Ümumi məlumat')
@section('content')

    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center mt-5">Rəyasət heyətinin qərarları</h2>
        <ul>
         @foreach($decisionpresidias as $decisionpresidia)
                <li>
                    <a class="cool-link" href="{{$decisionpresidia->link}}">
                        <img src="./assets/img/decision-icon-17.jpg" alt=""> {{$decisionpresidia->title}}
                    </a>
                </li>
         @endforeach
        </ul>
    </div>

@endsection


