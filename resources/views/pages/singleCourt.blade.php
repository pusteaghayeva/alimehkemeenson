@extends('layouts.master')
@section('title')
{{--    {{$singlecourts[0]->title}}--}}
@endsection
@section('content')
    <div class="college container">
        @foreach($singlecourts as $singlecourt)
            <div class="card court-card mb-3 w-75 mt-3">
                <div class="card-body">
                    <p class="court-link">
                        {!! mb_substr(html_entity_decode (strip_tags($singlecourt->getTranslatedAttribute('content', $locale, 'fallbackLocale'))), 0, 400)  !!}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection