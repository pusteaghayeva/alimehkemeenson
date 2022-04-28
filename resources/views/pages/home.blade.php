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
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-sm-4 col-lg-3">
                    <div class="contact-card">

                        <div class=" list-group list-group-flush contact-ul ">

{{--                            @foreach($contacts as $contact)--}}
{{--                            <a href="contact" class="list-group-item contact-list ">--}}
{{--                                <img src="{{asset('storage/'.$contact->image)}}" alt="">--}}
{{--                                <p>$contact->title</p>--}}
{{--                            </a>--}}
{{--                            @endforeach--}}

                            <a href="reception_days.html" class="list-group-item contact-list">
                                <img src="./assets/img/result.png" alt="">
                                <p>Qəbul qrafiki</p>
                            </a>

{{--                            <a href="letter.html" class="list-group-item contact-list">--}}
{{--                                <img src="./assets/img/status.png" alt="">--}}
{{--                                <p>Onlayn müraciət</p>--}}
{{--                            </a>--}}

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-sm-12 col-lg-3 person-for">
                    <div class="personfor-title">
                        <p class="title-border">Vətəndaşlar üçün</p>
                    </div>
                    <div class="cat-container">

                        <a href="decision.html">
                            <div class="cat-img-display">
                                <h2 class="cat-title">Appelyasiya şikayətinin <br />verilməsi qaydası</h2>
                            </div>
                        </a>

                        <a href="http://supremecourt.gov.az/static/view/32" target="_blank">
                            <div class="cat-img-display">
                                <h2 class="cat-title">Kassasiya şikayətinin<br />verilməsi qaydası</h2>
                            </div>
                        </a>

                        <a href="https://e-mehkeme.gov.az/Private" target="_blank">
                            <div class="cat-img-display">
                                <h2 class="cat-title">Elektron kabinetə<br />keçid</h2>
                            </div>
                        </a>

                        <a href="https://courts.gov.az/az/main/page/Mhkm-rusumlarinin-odnilmsi_3076" target="_blank">
                            <div class="cat-img-display">
                                <h2 class="cat-title">Məhkəmə rüsumlarının<br />ödənilməsi</h2>
                            </div>
                        </a>
                        <a href="https://e-mehkeme.gov.az/Public/Cases?courtid=113" target="_blank">
                            <div class="cat-img-display cat-padding">
                                <h2 class="cat-title cat-center1">Baxılan işlər</h2>
                            </div>
                        </a>

                        <a href="https://e-mehkeme.gov.az/Public/Anonymizedecisions?courtid=113" target="_blank">
                            <div class="cat-img-display">
                                <h2 class="cat-title cat-center2">Məhkəmə <br />aktları</h2>
                            </div>
                        </a>
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
                <div class="col-12 col-sm-6 col-md-3 contact-item ">
                    <section class="hover-div ">
                        <a href="https://e-mehkeme.gov.az/Calculator" target="_blank">
                            <div class="section-divler">
                                <i class="fa-solid fa-calculator"></i>
                                <div class="hover-div_inner ">
                                    <p class="text-center ">Dövlət rüsumunun hesablanması kalkulyatoru
                                    </p>
                                </div>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="col-12 col-sm-6 col-md-3 contact-item ">
                    <section class="hover-div ">
                        <a href="example_documents.html">
                            <i class="fa-solid fa-file"></i>
                            <div class="hover-div_inner ">
                                <p class="text-center ">Sənədlərin nümunələri
                                </p>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="col-12 col-sm-6 col-md-3 contact-item ">
                    <section class="hover-div ">
                        <a href="publications.html">
                            <i class="fa-solid fa-print"></i>
                            <div class="hover-div_inner ">
                                <p class="text-center ">Nəşrlərimiz</p>
                            </div>
                        </a>

                    </section>
                </div>
                <div class="col-12 col-sm-6 col-md-3 contact-item ">
                    <section class="hover-div ">
                        <a href="elektron_library.html">
                            <i class="fa-solid fa-lines-leaning"></i>
                            <div class="hover-div_inner ">
                                <p class="text-center ">Elektron kitabxana</p>
                            </div>
                        </a>

                    </section>
                </div>
            </div>
        </div>
    </div>

{{--<main>--}}
    <section class="nmr-courts container">
        <div class="courts-bg courts--img">
            <h3 class="h3">Naxçıvan Muxtar Respublikası Məhkəmələri</h3>
            <div class="container nmr-courts">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-sm-12 col-md-6 only-courts courts-left ">
                        <div class="city-court">
                            <a href="https://courts.gov.az/az/nakhchivangravecrimes">Naxçıvan MR Ağır Cinayətlər Məhkəməsi</a>
                        </div>
                        <div class="city-court">
                            <a href="https://courts.gov.az/az/nakhchivanmilitary">Naxçıvan MR Hərbi Məhkəməsi</a>
                        </div>
                        <div class="city-court">
                            <a href="https://courts.gov.az/az/nmradministrative">Naxçıvan MR İnzibati Məhkəməsi</a>
                        </div>
                        <div class="city-court">
                            <a href="https://courts.gov.az/az/nmrcommercial">Naxçıvan MR Kommersiya Məhkəməsi</a>
                        </div>

                        <div class="city-court">
                            <a href="https://courts.gov.az/az/nakhchivan">Naxçıvan Şəhər Məhkəməsi</a>
                        </div>
                        <div class="city-court">
                            <a href="https://courts.gov.az/az/babek">Babək Rayon Məhkəməsi</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 only-courts courts-right">
                        <div class="city-court">
                            <a href="https://courts.gov.az/az/sharur">Şərur Rayon Məhkəməsi</a>
                        </div>
                        <div class="city-court">
                            <a href="https://courts.gov.az/az/ordubad">Ordubad Rayon Məhkəməsi</a>
                        </div>
                        <div class="city-court">
                            <a href="https://courts.gov.az/az/shakhbuz">Şahbuz Rayon Məhkəməsi</a>
                        </div>
                        <div class="city-court">
                            <a href="https://courts.gov.az/az/julfa">Culfa Rayon Məhkəməsi</a>
                        </div>
                        <div class="city-court">
                            <a href="https://courts.gov.az/az/kangarli">Kəngərli Rayon Məhkəməsi</a>
                        </div>
                        <div class="city-court">
                            <a href="https://courts.gov.az/az/sadarak">Sədərək Rayon Məhkəməsi</a>
                        </div>
                    </div>

                </div>
            </div>
            </div>
    </section>
{{--</main>--}}

    <div class="usefull-links container ">
        <h1 class="link_title ">Faydalı Lİnklər</h1>
        <p class="underline"></p>
        <div class="owl-carousel owl-carousel4 owl-theme row ">
            <a href="https://president.az/ " class="useful-link-img " target="blank ">
                <img src="assets/img/Group1277.png" alt=" ">
            </a>
            <a href="https://courts.gov.az/az/ " class="useful-link-img " target="blank ">
                <img src="assets/img/Group1278.png " alt=" ">
            </a>
            <a href="http://www.alimeclis.az/ " class="useful-link-img " target="blank ">
                <img src="assets/img/Group1279.png" alt=" ">
            </a>
            <a href="http://www.nakhchivan.az/portal-1/index-2.htm " class="useful-link-img " target="blank ">
                <img src="assets/img/Group1282.png" alt=" ">
            </a>
            <a href="https://www.virtualkarabakh.az/ " class="useful-link-img " target="blank ">
                <img src="assets/img/Group1283.png" alt=" ">
            </a>
            <!-- <a href=" " class="useful-link-img " target="blank ">
                <img src="assets/img/n-tebiet.jpg " alt=" ">
            </a> -->
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
                    <a href="">
                        <img src="./assets/img/Group1285.png" alt="location" />
                        <p class="h4">
                            Ünvan: Naxçıvan şəhəri, AZ 7000, Atatürk küçəsi 19
                        </p>
                    </a>
                </div>
                <div class="circle-2">
                    <a href="">
                        <img src="./assets/img/Group1286.png" alt="location" />
                        <p class="h4">
                            Telefon: (036) 544-61-77
                        </p>
                    </a>

                </div>
                <div class="circle-2">
                    <a href="">
                        <img src="./assets/img/Group1287.png" alt="location" />
                        <p class="h4">
                            Fax: (036) 550-12-77
                        </p>
                    </a>


                </div>
                <div class="circle-2">
                    <a href="">
                        <img src="./assets/img/Group1288.png" alt="location" />
                        <p class="h4">
                            E-mail: alimehkeme@nakhchivan.az
                        </p>
                    </a>

                </div>
            </div>

        </div>
    </div>
@endsection
