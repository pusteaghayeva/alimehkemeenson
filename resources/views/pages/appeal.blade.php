@extends('layouts.master')
@section('title', 'Ümumi məlumat')
@section('content')

    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center mt-5">Rəyasət heyətinin qərarları</h2>
        <ul>
         @foreach($appeals as $appeal)
                <li>
                    <a class="cool-link" href="{{route('singleappeal', ['singleappeal'=>$appeal->id])}}">
                        <img src="{{asset('storage/'.$appeal->image)}}" alt=""> {{$appeal->title}}
                    </a>
                </li>
         @endforeach
        </ul>
    </div>

@endsection


