@extends('layouts.master')
@section('title', 'Məqalələr')
@section('content')

    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center mt-5">Məqalələr</h2>
        <ul>
         @foreach($articles as $article)
                <li>
                    <a class="cool-link" href="{{$article->link}}">
                        <img src="{{asset('storage/'.$article->image)}}" alt=""> {{$article->title}}
                    </a>
                </li>
         @endforeach
        </ul>
    </div>

@endsection

