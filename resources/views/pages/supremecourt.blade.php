@extends('layouts.master')
@section('title', 'Məhkəmənin sədri')
@section('content')

    <div class="college container">
        <h2 class="first-dm-title text-center mt-5">Ali Məhkəmə - 90</h2>
        @foreach($supremecourts as $supremecourt)
                    <div class="card court-card mb-3">
                        <div class="card-body">
                            <a href="{{url('/supreme-court'.$supremecourt->slug)}}" class="court-link">{{$supremecourt->title}}</a>
                        </div>
                    </div>
        @endforeach
    </div>

@endsection