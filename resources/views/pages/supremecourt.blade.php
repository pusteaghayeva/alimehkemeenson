@extends('layouts.master')
@section('title', $titlesTranslation["AliMəhkəmə90"])
@section('content')
    <div class="college container">
        <h2 class="first-dm-title text-center mt-5 mb-5">
            {{$titlesTranslation['AliMəhkəmə90']}}
        </h2>
        @foreach($supremecourts as $supremecourt)
            <div class="card court-card mb-3">
                <div class="card-body">
                    <a href="{{route('singlesupremecourt', ['singlesupremecourt'=>$supremecourt->id])}}"
                       class="court-link">
                        {{$supremecourt->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection