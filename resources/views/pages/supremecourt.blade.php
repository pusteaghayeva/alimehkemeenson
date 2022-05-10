@extends('layouts.master')
{{--@section('title', $supremecourt->getTranslatedAttribute('title', $locale, 'fallbackLocale'))--}}

@section('content')

    <div class="college container">
        <h2 class="first-dm-title text-center mt-5">Ali Məhkəmə-90</h2>
        @foreach($supremecourts as $supremecourt)
                    <div class="card court-card mb-3">
                        <div class="card-body">
                            <a href="{{route('singlesupremecourt', ['singlesupremecourt'=>$supremecourt->id])}}" class="court-link">
                                {{$supremecourt->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                            </a>


                        </div>
                    </div>
        @endforeach
    </div>

@endsection