@extends('layouts.master')
@section('title', 'Sənədlərin nümunələri')
@section('content')

    <div class="documents">
        <div class="container">

        @foreach($exampledocuments as $exampledocument)
            <div class="alert alert-success" role="alert">
                <a href="https://courts.gov.az/az/main/page/Iddia-rizlri_2774" target="_blank">{{$exampledocument->title}}</a>
            </div>
        @endforeach
{{--            <div class="alert alert-success" role="alert">--}}
{{--                <a href="https://courts.gov.az/az/main/page/rizlr_2775" target="_blank">Ərizələr</a>--}}

{{--            </div>--}}
{{--            <div class="alert alert-success" role="alert">--}}
{{--                <a href="https://courts.gov.az/az/main/page/Sikaytlr_2776" target="_blank">Şikayətlər</a>--}}

{{--            </div>--}}
{{--            <div class="alert alert-success" role="alert">--}}
{{--                <a href="https://courts.gov.az/az/main/page/Vsattlr_2777" target="_blank">Vəsaitlər</a>--}}
{{--            </div>--}}
{{--            <div class="alert alert-success" role="alert">--}}
{{--                <a href="https://courts.gov.az/az/main/page/Etirazlar_2778" target="_blank">Etirazlar</a>--}}
{{--            </div>--}}

        </div>
    </div>


@endsection



