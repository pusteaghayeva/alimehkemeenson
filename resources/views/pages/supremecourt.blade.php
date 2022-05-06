@extends('layouts.master')
{{--@section('title', 'Ali Məhkəmə-90)--}}
@section('content')

    <div class="college container">
        <h2 class="first-dm-title text-center mt-5">Ali Məhkəmə-90</h2>
        @foreach($supremecourts as $supremecourt)
                    <div class="card court-card mb-3">
                        <div class="card-body">
                            <a href="{{route('singlesupremecourt', ['singlesupremecourt'=>$supremecourt->id])}}" class="court-link">{{$supremecourt->title}}</a>
                        </div>
                    </div>
        @endforeach
    </div>

@endsection