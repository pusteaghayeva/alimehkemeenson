@extends('layouts.master')
@section('title', 'Çıxışlar')
@section('content')


    <div class="speech">
        <div class="container">
{{--            @foreach($speechs as $speech)--}}
{{--            <div class="bd-speech bd-speech-warning">--}}
{{--                <h3 class="speech-title">{{$speech->title}}</h3>--}}
{{--                <div class="speech-text">--}}
{{--                    <a href="" class="speech-link">{!! $speech->content !!}--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @endforeach--}}

                @foreach($speechs as $speech)
            <div class="bd-speech bd-speech-warning">
                <h3 class="speech-title">{{$speech->title}}</h3>
                <div class="speech-text">
                    <a href="" class="speech-link">{!!$speech->content!!}
                    </a>
                </div>
            </div>
                @endforeach

        </div>
    </div>


@endsection