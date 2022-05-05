@extends('layouts.master')
@section('title', 'Məhkəmənin strukturu')
@section('content')

    <div class="container">
     @foreach($structures as $structure)

        <img src="{{asset('storage/'.$structure->image)}}" class="img-fluid mt-5" alt="Structure">

     @endforeach
    </div>

@endsection