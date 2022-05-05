@extends('layouts.master')
@section('title', 'Məhkəmənin sədri')
@section('content')

    <div class="college container">
        @foreach($colleges as $college)
        <h3 class="college-title text-center">{{$college->title}}</h3>
        <p class="experience-date"> {!! $college->content !!}</p>
        @endforeach
    </div>

@endsection