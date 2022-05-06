@extends('layouts.master')
@section('title', 'Konstitusiya, Məcəllələr və Qanunlar')
@section('content')
    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center mt-5">Konstitusiya</h2>
        <ul>
            @foreach($constitutions as $constitution)
                <li>
                    <a class="cool-link text-uppercase" href="{{$constitution->link}}" target="_blank">
                        <img src="{{asset('storage/'.$constitution->image)}}" alt=""> {{$constitution->title}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>


@endsection


