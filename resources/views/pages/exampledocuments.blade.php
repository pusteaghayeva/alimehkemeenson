@extends('layouts.master')
@section('title', 'Sənədlərin nümunələri')
@section('content')

    <div class="documents">
        <div class="container">
        @foreach($exampledocuments as $exampledocument)
            <div class="alert alert-success" role="alert">
                <a href="https://courts.gov.az/az/main/page/Iddia-rizlri_2774" target="_blank">
                    {{$exampledocument->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                </a>
            </div>
        @endforeach
        </div>
    </div>


@endsection



