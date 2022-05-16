@extends('layouts.master')
{{--@section('title', $titlesTranslation["MəhkəməAparatı"])--}}
@section('content')

    <div class='container apparatus'>
        <div class='row'>
            <div class='col-lg-12 structure-aparat'>
                <a href="">
                    <button type='button' class='btn-lg btn-success'>
                        Naxçıvan Muxtar Respublikası Ali Məhkəməsinin strukturu
                    </button>
                </a>
            </div>
            @foreach($apparats as $apparat)
                @if($apparat->college!=1)
                    <div class='col-lg-12 structure-aparat'>
                        <a href="{{route('singleapparats', ['singleapparats'=>$apparat->id])}}>
                            <button type='button' class='btn-lg btn-success'>
{{--                                {{$apparate->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}--}}
                                {{$apparat->title}}

                            </button>
                        </a>
                    </div>
                @else
                    <div class='col-lg-3 structure-aparat'>
                        <a href="{{$apparat->link}}">
                            <button type='button' class='btn-lg btn-success'>
{{--                                {{$apparat->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}--}}
                                {{$apparat->title}}
                            </button>
                        </a>
                    </div>
                @endif
            @endforeach
                        <div class='col-lg-12 structure-aparat'>
                            <a href="">
                                <button type='button' class='btn-lg btn-success'>
                                    Məhkəmə aparatı
                                </button>
                            </a>
                        </div>
        </div>
    </div>

@endsection
