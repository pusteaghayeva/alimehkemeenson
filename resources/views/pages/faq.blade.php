@extends('layouts.master')
@section('title', $titlesTranslation["Faq"])

@section('content')
    <div class="faq">
            <h3 class="first-dm-title text-center  mt-5 mb-5 ">
                {{$titlesTranslation['Faq']}}
            </h3>
        @foreach($faqs as $faq)
            <details class="accordion">
                <summary>
                       {{$faq->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                </summary>
                <div class="accordion-content">
                    <p>
                        {!! $faq->getTranslatedAttribute('content', $locale, 'fallbackLocale') !!}
                    </p>
                </div>
            </details>
        @endforeach
    </div>

    <div class="text-center"> {{$faqs->appends(request()->input())->links()}}</div>



@endsection