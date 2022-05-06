@extends('layouts.master')
@section('title', 'Maarifləndirici materiallar')
@section('content')


    <div class="speech">
        <div class="container">
            @foreach($educationmaterials as $educationmaterial)
            <div class="bd-speech bd-speech-warning">
                <h3 class="speech-title">{{$educationmaterial->title}}</h3>
                <div class="speech-text">
                    <a href="{{route('singleeducation', ['singleeducation'=>$educationmaterial->id])}}" class="speech-link">{{mb_substr(html_entity_decode (strip_tags($educationmaterial->content)), 0, 400) }}</a>
                </div>
            </div>
            @endforeach

{{--            <div class="bd-speech bd-speech-warning">--}}
{{--                <h3 class="speech-title">Çıxış2</h3>--}}
{{--                <div class="speech-text">--}}
{{--                    <a href="" class="speech-link">Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself--}}
{{--                        (e.g. the visible text), or is included through alternative means, such as additional text hidden with the Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself--}}
{{--                        (e.g. the visible text), or is included through alternative means, such as additional text hidden with the class.--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
    </div>


@endsection