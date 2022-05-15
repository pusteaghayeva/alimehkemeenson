@extends('layouts.master')
@section('title', $titlesTranslation["FotoMateriallar"])

@section('content')

    <section id="gallery">
        <div class="container">
            <div id="image-gallery">
                <div class="row">
                    @foreach($galleries as $gallery)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                            <div class="img-wrapper">
                                <a href="{{asset('storage/'.$gallery->image)}}"><img src="{{asset('storage/'.$gallery->image)}}" class="img-responsive min-vh-25"></a>
                                <div class="img-overlay">
                                    <i class="fas fa-expand-alt" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>




@endsection