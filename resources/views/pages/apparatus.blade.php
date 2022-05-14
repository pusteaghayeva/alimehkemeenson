@extends('layouts.master')
@section('title', $titlesTranslation["MəhkəməAparatı"])
@section('content')

    <div class='container apparatus'>
        <div class='row'>
            @foreach($apparatus as $apparate)
                @if($apparate->college!=1)
                    <div class='col-lg-12 structure-aparat'>
                        <a href="{{$apparate->link}}">
                            <button type='button' class='btn-lg btn-success'>
                                {{$apparate->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}
                            </button>
                        </a>
                    </div>
                @else
                    <div class='col-lg-3 structure-aparat'>
                        <a href="{{$apparate->link}}">
                            <button type='button' class='btn-lg btn-success'>
                                {{$apparate->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}
                            </button>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

@endsection
