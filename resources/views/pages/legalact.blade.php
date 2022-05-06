@extends('layouts.master')
@section('title', 'Azərbaycan Respublikasının hüquqi aktları')
@section('content')
    <div class="laws colleges">
        <h2 class="coll-title text-center">Azərbaycan Respublikasının hüquqi aktları</h2>
        <!-- Konstitusiya, məcəllə və qanunları bazadan çəkərək düzəltmək -->
        @foreach($legalacts as $legalact)
        <a href="{{$legalact->link}}" class="article first d-flex align-items-center" target="_blank">
            <img src="{{asset('storage/'.$legalact->image)}}" alt="" class="coll-img">
            <span class="coll-text">{{$legalact->title}}</span>
        </a>
        @endforeach


    </div>


@endsection


