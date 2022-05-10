@extends('layouts.master')
@section('title')
{{--    {{$singlenews[0]->title}}--}}
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
                                {!! mb_substr(html_entity_decode (strip_tags($singlereport->getTranslatedAttribute('content', $locale, 'fallbackLocale'))), 0, 400) !!}
                            </p>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection