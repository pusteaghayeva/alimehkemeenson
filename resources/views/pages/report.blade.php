@extends('layouts.master')
@section('title', 'Hesabatlar')
@section('content')

    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center mt-5">Hesabatlar</h2>
        <ul>
            @foreach($reports as $report)
                <li>
                    <a class="cool-link" href="{{route('singlereport', ['singlereport'=>$report->id])}}">
                        {{$report->title}}
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