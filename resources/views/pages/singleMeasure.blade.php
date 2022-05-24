@extends('layouts.master')
@section('title', $titlesTranslation["Tədbirlər"])
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
                @foreach($singlemeasures as $singlemeasure)
                    <div class="colleges single-news ">
                        <h2 class="coll-title text-center">
                            {{$singlemeasure->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                        </h2>
                        <div class="container single_text">
                            <img src="{{asset('storage/'.$singlemeasure->image)}}" class="coll-image m-auto" alt="">
                            <p class="coll-text text-justify mt-5">
                                {!!  $singlemeasure->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection