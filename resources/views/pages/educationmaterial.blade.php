@extends('layouts.master')
@section('title', 'Maarifləndirici materiallar')
@section('content')
    <div class="speech">
        <div class="container">
            @foreach($educationmaterials as $educationmaterial)
            <div class="bd-speech bd-speech-warning">
                <h3 class="speech-title">
                    {{$educationmaterial->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                </h3>
                <div class="speech-text">
                    <a href="{{route('singleeducation', ['singleeducation'=>$educationmaterial->id])}}" class="speech-link">
                        {{mb_substr(html_entity_decode (strip_tags($educationmaterial->getTranslatedAttribute('content', $locale, 'fallbackLocale'))), 0, 400) }}
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="text-center"> {{$educationmaterials->appends(request()->input())->links()}}</div>
@endsection