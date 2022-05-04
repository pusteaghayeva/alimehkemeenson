@extends('layouts.master')
@section('title', 'Foto materiallar')
@section('content')


    <section id="gallery">
        <div class="container">
            <div id="image-gallery">
                <div class="row">
                    @foreach($galleries as $gallery)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                            <div class="img-wrapper">
                                <a href="{{asset('storage/'.$gallery->image)}}"><img src="{{asset('storage/'.$gallery->image)}}" class="img-responsive"></a>
                                <div class="img-overlay">
                                    <i class="fas fa-expand-alt" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{--                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">--}}
                    {{--                        <div class="img-wrapper">--}}
                    {{--                            <a href="assets/img/today2.png"><img src="assets/img/today2.png" class="img-responsive"></a>--}}
                    {{--                            <div class="img-overlay">--}}
                    {{--                                <i class="fas fa-expand-alt" aria-hidden="true"></i>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">--}}
                    {{--                        <div class="img-wrapper">--}}
                    {{--                            <a href="assets/img/today3.gif"><img src="assets/img/today3.gif" class="img-responsive"></a>--}}
                    {{--                            <div class="img-overlay">--}}
                    {{--                                <i class="fas fa-expand-alt" aria-hidden="true"></i>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">--}}
                    {{--                        <div class="img-wrapper">--}}
                    {{--                            <a href="assets/img/today4.gif"><img src="assets/img/today4.gif" class="img-responsive"></a>--}}
                    {{--                            <div class="img-overlay">--}}
                    {{--                                <i class="fas fa-expand-alt" aria-hidden="true"></i>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">--}}
                    {{--                        <div class="img-wrapper">--}}
                    {{--                            <a href="assets/img/today5.gif"><img src="assets/img/today5.gif" class="img-responsive"></a>--}}
                    {{--                            <div class="img-overlay">--}}
                    {{--                                <i class="fas fa-expand-alt" aria-hidden="true"></i>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">--}}
                    {{--                        <div class="img-wrapper">--}}
                    {{--                            <a href="assets/img/today9.gif"><img src="assets/img/today9.gif" class="img-responsive"></a>--}}
                    {{--                            <div class="img-overlay">--}}
                    {{--                                <i class="fas fa-expand-alt" aria-hidden="true"></i>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">--}}
                    {{--                        <div class="img-wrapper">--}}
                    {{--                            <a href="assets/img/today7.gif"><img src="assets/img/today7.gif" class="img-responsive"></a>--}}
                    {{--                            <div class="img-overlay">--}}
                    {{--                                <i class="fas fa-expand-alt" aria-hidden="true"></i>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">--}}
                    {{--                        <div class="img-wrapper">--}}
                    {{--                            <a href="assets/img/today8.gif"><img src="assets/img/today8.gif" class="img-responsive"></a>--}}
                    {{--                            <div class="img-overlay">--}}
                    {{--                                <i class="fas fa-expand-alt" aria-hidden="true"></i>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>




@endsection