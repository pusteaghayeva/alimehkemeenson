@extends('layouts.master')
@section('title', 'Sual-cavab')
@section('content')



    <h2 class="text-center">Tədbirlər</h2>
    @foreach($measures as $measure)
        <figure class="news_hor container">
        <img src="{{asset('storage/'.$measure->image)}}" alt="image" />
        <figcaption>
            <h3>{{$measure->title}} </h3>
            <p>{!! $measure->content !!} </p>
            <footer>
                <div class="hor_date">{{$measure->created_at}}</div>
            </footer>
        </figcaption>
        <a href="{{route('singlemeasures', ['singlemeasures'=>$measure->id])}}"></a>
    </figure>


@endforeach


@endsection