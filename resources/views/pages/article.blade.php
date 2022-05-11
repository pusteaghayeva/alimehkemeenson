@extends('layouts.master')
@section('title', 'Məqalələr')
@section('content')

    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center mt-5 mb-5">Məqalələr</h2>
        <ul>
         @foreach($articles as $article)
                <li>
                    <a class="cool-link" href="{{route('singlearticle', ['singlearticle'=>$article->id])}}">
                        <img src="{{asset('storage/'.$article->image)}}" alt="">
                        {{$article->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}

                    </a>
                </li>
         @endforeach
        </ul>
    </div>
    <div class="text-center"> {{$articles->appends(request()->input())->links()}}</div>

@endsection


