@extends('layouts.master')
@section('title', $titlesTranslation["Tədbirlər"])
@section('content')

    <h2 class="first-dm-title text-center  mt-5 mb-5">
        {{$titlesTranslation['Tədbirlər']}}
    </h2>
    @foreach($measures as $measure)
        <figure class="news_hor container">
            <img src="{{asset('storage/'.$measure->image)}}" alt="image"/>
            <figcaption>
                <h3>
{{--                    {{$measure->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}--}}
                    {{mb_substr($measure->getTranslatedAttribute('title', $locale, 'fallbackLocale'), 0, 160)}}

                </h3>
                <p>
                    {!! mb_substr(html_entity_decode (strip_tags($measure->getTranslatedAttribute('content', $locale, 'fallbackLocale'))), 0, 0) !!}
                </p>
{{--                <footer>--}}
{{--                    <div class="hor_date">{{$measure->created_at}}</div>--}}
{{--                </footer>--}}
            </figcaption>
            <a href="{{route('singlemeasures', ['singlemeasures'=>$measure->id])}}"></a>
        </figure>
    @endforeach
    <div class="text-center"> {{$measures->appends(request()->input())->links()}}</div>

@endsection