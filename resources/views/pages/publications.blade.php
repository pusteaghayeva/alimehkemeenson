{{--@extends('layouts.master')--}}
{{--@section('title', $titlesTranslation["NəşrlərinNümunələri"])--}}

{{--@section('content')--}}
{{--    <div class="publications">--}}
{{--        <div class="container">--}}
{{--            <div class="publications-img">--}}
{{--                <div class="row">--}}
{{--                    @foreach($publications as $publication)--}}
{{--                    <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3 publications-card">--}}
{{--                        <a href="{{asset('/storage/'.json_decode($publication->pdf)[0]->download_link)}}" class="public-link" download>--}}
{{--                            <img class="public-img img-thumbnail" src="{{asset('storage/'.$publication->image)}}" alt="everyone loves kittens, right?" />--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}


@extends('layouts.master')
@section('title', $titlesTranslation["NəşrlərinNümunələri"])

@section('content')
    <div class="container">
    <div class="wrap min-vh-100">
        @foreach($publications as $publication)
            <div class="box">
                <div class="boxInner">
                    <a href="{{asset('/storage/'.json_decode($publication->pdf)[0]->download_link)}}" target="_blank">
                        <img src="{{asset('storage/'.$publication->image)}}" style="height: 200px; width: 240px; " />
                    </a>
                </div>
            </div>
        @endforeach

    </div>
    </div>
@endsection






