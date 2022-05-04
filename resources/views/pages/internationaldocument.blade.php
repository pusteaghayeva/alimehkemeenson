@extends('layouts.master')
@section('title', 'Beynəlxalq hüquqi sənədlər')
@section('content')

    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center mt-5">Beynəlxalq hüquqi sənədlər</h2>
        <ul>
            @foreach($internationaldocuments as $internationaldocument)
                <li>
                    <a class="cool-link" href="{{asset('/storage/'.json_decode($internationaldocument->pdf)[0]->download_link)}}" target="_blank">
                        {{$internationaldocument->title}}
    {{--                    <img src="./assets/img/decision-icon-17.jpg" alt=""> {{$decision->title}}--}}
                    </a>
                </li>
            @endforeach

{{--            <li>--}}
{{--                <a class="cool-link" href="#">--}}
{{--                    <img src="./assets/img/decision-icon-17.jpg" alt=""> Qərar N1 2021-ci il</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="cool-link" href="#">--}}
{{--                    <img src="./assets/img/decision-icon-17.jpg" alt=""> Qərar N1 2021-ci il</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="cool-link" href="#"><img src="./assets/img/decision-icon-17.jpg" alt=""> Qərar N1 2021-ci il</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="cool-link" href="#"><img src="./assets/img/decision-icon-17.jpg" alt=""> Qərar N1 2021-ci il</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="cool-link" href="#"><img src="./assets/img/decision-icon-17.jpg" alt=""> Qərar N1 2021-ci il</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="cool-link" href="#"><img src="./assets/img/decision-icon-17.jpg" alt=""> Qərar N1 2021-ci il</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="cool-link" href="#"><img src="./assets/img/decision-icon-17.jpg" alt=""> Qərar N1 2021-ci il</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="cool-link" href="#"><img src="./assets/img/decision-icon-17.jpg" alt=""> Qərar N1 2021-ci il</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="cool-link" href="#"><img src="./assets/img/decision-icon-17.jpg" alt=""> Qərar N1 2021-ci il</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="cool-link" href="#"><img src="./assets/img/decision-icon-17.jpg" alt=""> Qərar N1 2021-ci il</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="cool-link" href="#"><img src="./assets/img/decision-icon-17.jpg" alt=""> Nаxçıvаn Muxtаr Rеspublikаsı Аli Məclisinə əlаvə sеçkilər üzrə 06 аvqust 2016-cı il tаrixdə kеçirilmiş sеçkilərin nəticələrinin yоxlаnılmаsı və təsdiq еdilməsinə dаir</a>--}}
{{--            </li>--}}
        </ul>
    </div>

@endsection