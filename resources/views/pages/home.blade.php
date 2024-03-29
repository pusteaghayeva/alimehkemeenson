@extends('layouts.master')
@section('title', $titlesTranslation["NaxçıvanMuxtarRespublikasıAliMəhkəməsi"])
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
                            @foreach($news as $key => $new)
                                <a href="{{route('singlenews', ['singlenews'=>$new->id])}}"
                                   class="carousel-item  {{$key === 0 ? 'active' : ''}}">

{{--                                    <img src="{{asset('storage/'.$new->image)}}" class=" w-100" alt="...">--}}
                                    <?php
                                    if (!empty($new->image)) {
                                        $image = $new->image;
                                    } else {
                                        $image = 'alimeh.jpg';
                                    }
                                    ?>
                                    <img src="{{asset('storage/'.$image)}}" alt=""/>
                                    <div class="carousel-bg"></div>
                                    <div class="carousel-caption  d-md-block ">
                                        <h5 class="text-left">
                                            {{$new->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                                        </h5>
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
                                <a href="{{$contact->slug}}" class="list-group-item contact-list ">
                                    <img src="{{asset('storage/'.$contact->image)}}" width="40" alt="">
                                    <p>
                                        {{$contact->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                                    </p>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-sm-12 col-lg-3 person-for">
                    <div class="personfor-title">
                        {{--Forcitizens--}}
                        <p class="title-border">
                            {{$titlesTranslation['vətəndaşlarÜçün']}}
                        </p>
                    </div>
                    <div class="cat-container">
                        @foreach($forpersons as $forperson)
                            <a href="
{{--{{$forperson->getTranslatedAttribute('link', $locale, 'fallbackLocale') }}--}}
                            {{$forperson->link}}
                                    ">
                                <div class="cat-img-display">
                                    <h2 class="cat-title">
                                        {{$forperson->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                                    </h2>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>


    <div class="contact container-fluid ">
        <div class="container">
            <h1 class="contact_title ">  {{$titlesTranslation['Xidmətlər']}}</h1>
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
                                        <p class="text-center ">
                                            {{$service->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </section>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <section class="nmr-courts container">
        <div class="courts-bg courts--img">
            <h3 class="h3">{{$titlesTranslation['NaxçıvanMrMəhkəmələri']}}</h3>
            <div class="container nmr-courts">
                <div class="row align-items-center justify-content-between">
                    @foreach($nmrcourts as $nmrcourt)
                        <div class="col-12 col-sm-12 col-md-6 only-courts courts-left ">
                            <div class="city-court">
                                <a href="{{$nmrcourt->getTranslatedAttribute('link', $locale, 'fallbackLocale')}}" target="_blank">
                                    {{$nmrcourt->getTranslatedAttribute('title', $locale, 'fallbackLocale') }}
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <div class="usefull-links container ">
        <h1 class="link_title ">
            {{$titlesTranslation['faydalıLinklər']}}
        </h1>
        <p class="underline"></p>
        <div class="owl-carousel owl-carousel4 owl-theme row ">
            @foreach($usefullinks as $usefullink)
                <a href="{{$usefullink->link}}" class="useful-link-img " target="_blank ">
                    <img src="{{asset('storage/'.$usefullink->image)}}" alt=" ">
                </a>
            @endforeach

        </div>
    </div>


    <div class="carousel-second container ">
        <h1 class="link_title ">{{$titlesTranslation['NaxçıvanBuGün']}}</h1>
        <p class="underline"></p>
        <div class="owl-carousel owl-theme p-0 ">
            @foreach($slidertodays as $slidertoday)
                <div class="carousel-img ">
                    <img class="d-block img-nmr " src="{{asset('storage/'.$slidertoday->image)}}" alt="First slide ">
                </div>
            @endforeach
        </div>
    </div>

    <div class="container footer-socialicons">
        <div class="row">
            <div class="col-10  m-auto circle-icons">
                @foreach($adres as $adres_item)
                    <div class="circle-2">
                        <a href="{{$adres_item->link}}">
                            <img src="{{asset('storage/'.$adres_item->image)}}" alt="location"/>
                            <p class="h4">
                                {{$adres_item->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}
                                :
                                {{$adres_item->getTranslatedAttribute('adres', $locale, 'fallbackLocale')}}
                            </p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
