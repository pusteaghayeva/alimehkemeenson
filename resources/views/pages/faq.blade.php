@extends('layouts.master')
@section('title', 'Sual-cavab')
@section('content')



    <!-- Accordion -->
    <div class="faq">
        {{--    <h3 class="text-center">Tez-tez verilən suallar</h3>--}}

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




@endsection