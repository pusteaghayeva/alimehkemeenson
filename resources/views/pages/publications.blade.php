@extends('layouts.master')
@section('title', $titlesTranslation["NəşrlərinNümunələri"])

@section('content')
    <div class="publications">
        <div class="container">
            <div class="publications-img">
                <div class="row">
                    @foreach($publications as $publication)
                    <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3 publications-card">
                        <a href="{{asset('/storage/'.json_decode($publication->pdf)[0]->download_link)}}" class="public-link" download>
                            <img class="public-img img-thumbnail" src="{{asset('storage/'.$publication->image)}}" alt="everyone loves kittens, right?" />
                        </a>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection



