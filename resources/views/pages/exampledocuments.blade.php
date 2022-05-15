@extends('layouts.master')
@section('title', $titlesTranslation["SənədlərinNümunələri"])
@section('content')

    <div class="documents">
        <div class="container">
        @foreach($exampledocuments as $exampledocument)
            <div class="alert alert-success" role="alert">
                <a href="{{$exampledocument->link}}" target="_blank">
                    {{$exampledocument->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                </a>
            </div>
        @endforeach
        </div>
    </div>

    <div class="text-center"> {{$exampledocuments->appends(request()->input())->links()}}</div>

@endsection



