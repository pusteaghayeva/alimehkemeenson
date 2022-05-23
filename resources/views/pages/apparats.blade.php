@extends('layouts.master')
@section('title', $titlesTranslation["MəhkəməninStrukturu"])
@section('content')

    <div class='container apparatus'>
        <div class='row'>
            <div class='col-lg-12 structure-aparat'>
                <a href="">
                    <button type='button' class='btn-lg btn-success'>
                        {{$titlesTranslation['NaxcivanMRAMStrukturu']}}
                    </button>
                </a>
            </div>
            @foreach($apparats as $apparat)
                @if($apparat->college!=1)
                    <div class='col-lg-12 structure-aparat'>
{{--                        <a href="{{url($apparat->link)}}">--}}
                        <a href="{{($apparat->getTranslatedAttribute('link', $locale, 'fallbackLocale'))}}">
                            <button type='button' class='btn-lg btn-success'>
                                {{$apparat->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}
                            </button>
                        </a>
                    </div>
                @else
                    <div class='col-lg-3 structure-aparat mt-3'>
                        <a href="/{{$apparat->link}}">
                            <button type='button' class='btn-lg btn-success'>
                                {{$apparat->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}
                            </button>
                        </a>
                    </div>
                @endif
            @endforeach
                        <div class='col-lg-12 structure-aparat mt-3 mb-5'>
                            <a href="\structure">
                                <button type='button' class='btn-lg btn-success'>
                                    {{$titlesTranslation['AliMəhkəməninAparatı']}}
                                </button>
                            </a>
                        </div>
        </div>
    </div>

@endsection
