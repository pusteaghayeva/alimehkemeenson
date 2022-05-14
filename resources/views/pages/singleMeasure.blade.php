@extends('layouts.master')
@section('title', $titlesTranslation["Tədbirlər"])

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
                            <p class="coll-text text-justify">
                                {!! mb_substr(html_entity_decode (strip_tags($singlemeasure->getTranslatedAttribute('content', $locale, 'fallbackLocale'))), 0, 400)  !!}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection