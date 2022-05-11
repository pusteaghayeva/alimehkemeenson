@extends('layouts.master')
@section('title', 'Rəyasət heyətinin qərarları')
@section('content')

    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center mt-5">Rəyasət heyətinin qərarları</h2>
        <ul>
         @foreach($decisionpresidias as $decisionpresidia)
                <li>
                    <a class="cool-link" href="{{route('singledecisionpresidia', ['singledecisionpresidia'=>$decisionpresidia->id])}}">
                        <img src="./assets/img/decision-icon-17.jpg" alt="">
                        {{$decisionpresidia->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}

                    </a>
                </li>
         @endforeach
        </ul>
    </div>
    <div class="text-center"> {{$decisionpresidias->appends(request()->input())->links()}}</div>

@endsection


