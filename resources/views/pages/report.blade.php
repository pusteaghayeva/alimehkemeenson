@extends('layouts.master')
@section('title', 'Hesabatlar')
@section('content')

    <div class="first-down-menu container">
        <h2 class="first-dm-title text-center mt-5">Hesabatlar</h2>
        <ul>
            @foreach($reports as $report)
                <li>
                    <a class="cool-link" href="{{route('singlereport', ['singlereport'=>$report->id])}}">
                        {{$report->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                    </a>
                </li>
            @endforeach

        </ul>
    </div>

@endsection