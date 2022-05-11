@extends('layouts.master')
@section('title', 'Məhkəmə aparatı')
@section('content')

    <div class='container apparatus'>
        <div class='row'>
                @foreach($apparatus as $apparate)
                <div class='col-lg-12 structure-aparat'>
                    <a target="_blank" href="https://courts.gov.az/az/nakhchivansupreme/judge/liyev-Qasim-Vli-oglu_453" target="_blank">
                        <button type='button' class='btn-lg btn-success'>{{$apparate->title}}</button>
                    </a>

                </div>
                @endforeach

        </div>
    </div>

@endsection
