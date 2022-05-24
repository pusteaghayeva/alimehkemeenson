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
    <section class="blog-area pt-5 pb-5">
        <div class="container">
            <div class="row">
                @foreach($singleappeals as $singleappeal)
                    <div class="colleges single-news ">
                        <h2 class="coll-title text-center">
                            {{$singleappeal->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                        </h2>
                        <div class="container single_text">
                            <p class="coll-text text-justify">
                                {!!$singleappeal->getTranslatedAttribute('content', $locale, 'fallbackLocale')!!}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection