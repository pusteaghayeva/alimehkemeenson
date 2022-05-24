@extends('layouts.master')
@section('title', $titlesTranslation["RəyasətHeyətininQərarları"])
@section('css')
    <style>
        table{
            border: 1px solid #000;
        }
        td {
            border: 1px solid #000 !important;
        }
    </style>
@endsection

@section('content')
    <section class="blog-area">
        <div class="container">
            <div class="row">
                @foreach($singledecisionpresidias as $singledecisionpresidia)
                    <div class="colleges single-news ">
                        <h2 class="coll-title text-center">{{$singledecisionpresidia->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}</h2>
                        <div class="container single_text">
                            <p class="coll-text text-justify">
                                {!! $singledecisionpresidia->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection