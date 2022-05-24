@extends('layouts.master')
@section('title', $titlesTranslation["Hesabatlar"])
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
                @foreach($singlereports as $singlereport)
                    <div class="colleges single-news ">
                        <h3 class="coll-title text-center font-weight-bold">
                            {{$singlereport->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                        </h3>
                        <div class="container single_text">
                            <p class="coll-text text-justify">
                                {!! $singlereport->getTranslatedAttribute('content', $locale, 'fallbackLocale')!!}

                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection