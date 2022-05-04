@extends('layouts.master')
@section('title')
    {{$singlecourts[0]->title}}
@endsection
@section('content')

    <div class="college container">
        @foreach($singlecourts as $singlecourt)
            <div class="card court-card mb-3 w-75 mt-3">
                <div class="card-body">
                    <p class="court-link">{!! $singlecourt->content !!}</p>
                </div>
            </div>
        @endforeach
    </div>

@endsection