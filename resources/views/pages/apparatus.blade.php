@extends('layouts.master')
@section('title', 'Məhkəmə aparatı')
@section('content')

    <div class='container apparatus'>
        <div class='row'>
{{--            <div class='col-12 col-lg-12 structure-aparat'>--}}
                @foreach($apparatus as $apparate)
                <div class='col-lg-12 structure-aparat'>
                    <a target="_blank" href="https://courts.gov.az/az/nakhchivansupreme/judge/liyev-Qasim-Vli-oglu_453" target="_blank">
                        <button type='button' class='btn-lg btn-success'>{{$apparate->title}}</button>
                    </a>

                </div>
                @endforeach
{{--            </div>--}}
{{--            <div class='col-lg-12 structure-aparat'>--}}
{{--                <a target="_blank" href="https://courts.gov.az/az/nakhchivansupreme/judge/liyev-Qasim-Vli-oglu_453" target="_blank">--}}
{{--                    <button type='button' class='btn-lg btn-success'>Ali Məhkəmənin sədri</button>--}}
{{--                </a>--}}

{{--            </div>--}}
{{--            <div class='col-lg-12 structure-aparat'>--}}
{{--                <a target="_blank" href="https://courts.gov.az/az/nakhchivansupreme/judge/Novruzov-sgr-Novruz-oglu_437">--}}
{{--                    <button type='button' class='btn-lg btn-success'>Ali Məhkəmənin sədr müavini</button>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class='col-lg-12 structure-aparat'>--}}
{{--                <a href="kollegiya.html">--}}
{{--                    <button type='button' class='btn-lg btn-success'>Mülki kollegiya</button>--}}
{{--                </a>--}}
{{--                <a href="kollegiya.html">--}}
{{--                    <button type='button' class='btn-lg btn-success'>İnzibati kollegiya</button>--}}
{{--                </a>--}}
{{--                <a href="kollegiya.html">--}}
{{--                    <button type='button' class='btn-lg btn-success'>Cinayət kollegiyası</button>--}}
{{--                </a>--}}
{{--                <a href="kollegiya.html">--}}
{{--                    <button type='button' class='btn-lg btn-success'>Kommersiya kollegiyası</button>--}}
{{--                </a>--}}

{{--            </div>--}}
{{--            <div class='col-lg-12 structure-aparat'>--}}
{{--                <a href="structure.html">--}}
{{--                    <button type='button' class='btn-lg btn-success'>Məhkəmə aparatı</button>--}}
{{--                </a>--}}

{{--            </div>--}}
        </div>
    </div>

@endsection
