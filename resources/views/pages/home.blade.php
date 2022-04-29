@extends('layouts.master')
@section('title', 'Naxçıvan Muxtar Respublikası Ali Məhkəməsi')
@section('content')
    <!-- <main> -->
    <section class="carousel-three">
        <div class="container show-grid">
            <div class="row">
                <div class="col-12 col-md-8 col-sm-8 col-lg-6">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            @foreach($news as $new)
                                <a href="" class="carousel-item  {{$new->id ==1?'active': ''}}">

                                    <img src="{{asset('storage/'.$new->image)}}" class=" w-100" alt="...">
                                    <div class="carousel-bg"></div>
                                    <div class="carousel-caption  d-md-block">
                                        <h4>{{$new->title}}</h4>
                                        <p>{!!$new->text !!}</p>
                                    </div>

                                </a>
                            @endforeach

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-sm-4 col-lg-3">
                    <div class="contact-card">

                        <div class=" list-group list-group-flush contact-ul ">

                            @foreach($contacts as $contact)
                                <a href="contact" class="list-group-item contact-list ">
                                    <img src="{{asset('storage/'.$contact->image)}}" alt="">
                                    <p>{{$contact->title}}</p>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-sm-12 col-lg-3 person-for">
                    <div class="personfor-title">
                        {{--Forcitizens--}}
                        <p class="title-border">Vətəndaşlar üçün</p>
                    </div>
                    <div class="cat-container">
                        @foreach($forpersons as $forperson)
                            <a href="{{$forperson->link}}">
                                <div class="cat-img-display">
                                    <h2 class="cat-title">{{$forperson->title}}</h2>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- </main> -->


    <div class="contact container-fluid ">
        <div class="container">
            <h1 class="contact_title "> Xİdmətlər</h1>
            <p class="underline"></p>
        </div>

        <div class="starter-template ">
            <div class="row contact-row ">
                @foreach($services as $service)
                    <div class="col-12 col-sm-6 col-md-3 contact-item ">
                        <section class="hover-div ">
                            <a href="{{$service->link}}">
                                <div class="section-divler">
                                    <i class="fa-solid {{$service->icon}}"></i>
                                    <div class="hover-div_inner ">
                                        <p class="text-center ">{{$service->title}}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </section>
                    </div>
                @endforeach
                {{--                <div class="col-12 col-sm-6 col-md-3 contact-item ">--}}
                {{--                    <section class="hover-div ">--}}
                {{--                        <a href="example_documents.html">--}}
                {{--                            <i class="fa-solid fa-file"></i>--}}
                {{--                            <div class="hover-div_inner ">--}}
                {{--                                <p class="text-center ">Sənədlərin nümunələri--}}
                {{--                                </p>--}}
                {{--                            </div>--}}
                {{--                        </a>--}}
                {{--                    </section>--}}
                {{--                </div>--}}
                {{--                <div class="col-12 col-sm-6 col-md-3 contact-item ">--}}
                {{--                    <section class="hover-div ">--}}
                {{--                        <a href="publications.html">--}}
                {{--                            <i class="fa-solid fa-print"></i>--}}
                {{--                            <div class="hover-div_inner ">--}}
                {{--                                <p class="text-center ">Nəşrlərimiz</p>--}}
                {{--                            </div>--}}
                {{--                        </a>--}}

                {{--                    </section>--}}
                {{--                </div>--}}
                {{--                <div class="col-12 col-sm-6 col-md-3 contact-item ">--}}
                {{--                    <section class="hover-div ">--}}
                {{--                        <a href="elektron_library.html">--}}
                {{--                            <i class="fa-solid fa-lines-leaning"></i>--}}
                {{--                            <div class="hover-div_inner ">--}}
                {{--                                <p class="text-center ">Elektron kitabxana</p>--}}
                {{--                            </div>--}}
                {{--                        </a>--}}

                {{--                    </section>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>

    {{--<main>--}}
    <section class="nmr-courts container">
        <div class="courts-bg courts--img">
            <h3 class="h3">Naxçıvan Muxtar Respublikası Məhkəmələri</h3>
            <div class="container nmr-courts">
                <div class="row align-items-center justify-content-between">
                    @foreach($nmrcourts as $nmrcourt)
                    <div class="col-12 col-sm-12 col-md-6 only-courts courts-left ">
                            <div class="city-court">
                                <a href="{{$nmrcourt->link}}" target="{{$nmrcourt->_blank}}">{{$nmrcourt->title}}</a>
                            </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <div class="usefull-links container ">
        <h1 class="link_title ">Faydalı Lİnklər</h1>
        <p class="underline"></p>
        <div class="owl-carousel owl-carousel4 owl-theme row ">
            @foreach($usefullinks as $usefullink)
            <a href="https://president.az/ " class="useful-link-img " target="blank ">
                <img src="{{asset('storage/'.$usefullink->image)}}" alt=" ">
            </a>
            @endforeach

        </div>
    </div>


    <div class="carousel-second container ">
        <h1 class="link_title ">Naxçıvan bu gün</h1>
        <p class="underline"></p>
        <div class="owl-carousel owl-theme p-0 ">

            <div class="carousel-img ">
                <img class="d-block img-nmr " src="assets/img/today1.gif " alt="First slide ">
            </div>
            <div class="carousel-img ">
                <img class="d-block img-nmr " src="assets/img/today2.gif " alt="First slide ">
            </div>
            <div class="carousel-img ">
                <img class="d-block img-nmr " src="assets/img/today3.gif " alt="First slide ">
            </div>
            <div class="carousel-img ">
                <img class="d-block img-nmr " src="assets/img/today4.gif " alt="First slide ">
            </div>
            <div class="carousel-img ">
                <img class="d-block img-nmr " src="assets/img/today5.gif " alt="First slide ">
            </div>
            <div class="carousel-img ">
                <img class="d-block img-nmr " src="assets/img/today6.gif " alt="First slide ">
            </div>
            <div class="carousel-img ">
                <img class="d-block img-nmr " src="assets/img/today7.gif " alt="First slide ">
            </div>
            <div class="carousel-img ">
                <img class="d-block img-nmr " src="assets/img/today8.gif " alt="First slide ">
            </div>
            <div class="carousel-img ">
                <img class="d-block img-nmr " src="assets/img/today9.gif " alt="First slide ">
            </div>
            <div class="carousel-img ">
                <img class="d-block img-nmr " src="assets/img/today10.gif " alt="First slide ">
            </div>
            <div class="carousel-img ">
                <img class="d-block img-nmr " src="assets/img/today12.gif " alt="First slide ">
            </div>
            <div class="carousel-img ">
                <img class="d-block img-nmr " src="assets/img/today13.gif " alt="First slide ">
            </div>
            <div class="carousel-img ">
                <img class="d-block img-nmr " src="assets/img/today14.gif " alt="First slide ">
            </div>
        </div>
    </div>

    <div class="container footer-socialicons">
        <div class="row">
            <div class="col-10  m-auto circle-icons">
                <div class="circle-2">
                    <a href="https://goo.gl/maps/T626L2cTkQxmNNgh8" target="_blank">

                        <img src="./assets/img/Group1285.png" alt="location"/>
                        <p class="h4">
                            {{setting('site.address')}}
                        </p>
                    </a>
                </div>
                <div class="circle-2">
                    <a href="tel:{{setting('site.phone')}}">
                        <img src="./assets/img/Group1286.png" alt="location"/>
                        <p class="h4">
                            {{setting('site.phone')}}
                        </p>
                    </a>

                </div>
                <div class="circle-2">
                    <a href="fax:{{setting('site.fax')}}">
                        <img src="./assets/img/Group1287.png" alt="location"/>
                        <p class="h4">
                            {{setting('site.fax')}}
                        </p>
                    </a>


                </div>
                <div class="circle-2">
                    <a href="mailto:{{setting('site.email')}}">
                        <img src="./assets/img/Group1288.png" alt="location"/>
                        <p class="h4">
                            {{setting('site.email')}}
                        </p>
                    </a>

                </div>
            </div>

        </div>
    </div>
@endsection
