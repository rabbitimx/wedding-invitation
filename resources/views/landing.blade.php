@extends('layouts.master')

@section('content')
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="{{ Vite::asset('resources/habibi/images/preloader.gif')}}" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->
        <header id="header">
            <div class="wpo-site-header invitation-header">
                <ul>
                    <li> <a class="navbar-brand" href="index.html">Habibi</a></li>
                    <li><a class="back-btn" href="index.html"><i class="ti-back-left"></i></a></li>
                </ul>
            </div>
        </header>
        <!-- end of header -->
        <!-- start of invitation -->
        <section class="wpo-invitation-area section-padding"
            style="background: url(./assets/images/slider/invitation-bg.jpg) no-repeat center center;  background-size: cover;">
            <div class="container-fluid">
                <div class="wpo-invitation-wrap">
                    <div class="wpo-invitation-inner-item">
                        <div class="wpo-invitation-inner">
                            <div class="middle-couple-pic wow zoomIn" data-wow-duration="1000ms">
                                <div class="middle-couple-pic-inner">
                                    <img src="{{Vite::asset('resources/habibi/images/couple/3.jpg')}}" alt="">
                                </div>
                                <div class="couple-flower">
                                    <img src="{{Vite::asset('resources/habibi/images/couple/couple-flower.png')}}" alt="">
                                </div>
                            </div>
                            <div class="wpo-invitation-info">
                                <h2 class="wow fadeInUp" data-wow-duration="1000ms">James & Amelia</h2>
                                <p class="wow fadeInUp" data-wow-duration="1200ms">Our Big Day is November 15,2022</p>
                                <span class="shape wow fadeInUp" data-wow-duration="1400ms"><img
                                        src="{{Vite::asset('resources/habibi/images/slider/date-shape.png')}}" alt=""> </span>
                                <div class="row wow fadeInUp" data-wow-duration="1600ms">
                                    <div class="col col-xs-12">
                                        <div class="clock-grids">
                                            <div id="clock"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpo-event-text">
                                <ul>
                                    <li class="wow fadeInUp" data-wow-duration="1000ms">Monday, 12 Apr. 2022 <br>
                                        1:00 PM – 2:30 PM</li>
                                    <li class="wow fadeInUp" data-wow-duration="1200ms">4517 Washington Ave. Manchester,
                                        Kentucky 39495</li>
                                    <li class="wow fadeInUp" data-wow-duration="1400ms">+1 234-567-8910</li>
                                    <li class="wow fadeInUp" data-wow-duration="1600ms"> <a class="popup-gmaps"
                                            href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25211.21212385712!2d144.95275648773628!3d-37.82748510398018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2zTWVsYm91cm5lIFZJQyAzMDA0LCDgpoXgprjgp43gpp_gp43gprDgp4fgprLgpr_gpq_gprzgpr4!5e0!3m2!1sbn!2sbd!4v1503742051881">See
                                            Location</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of invitation slider -->

        <!-- end of wpo-site-footer-section -->
        <div class="color-switcher-wrap">
            <div class="color-switcher-item">
                <div class="color-toggle-btn">
                    <i class="fa fa-cog"></i>
                </div>
                <ul id="switcher">
                    <li class="btn btn1" id="Button1"></li>
                    <li class="btn btn2" id="Button2"></li>
                    <li class="btn btn3" id="Button3"></li>
                    <li class="btn btn4" id="Button4"></li>
                    <li class="btn btn5" id="Button5"></li>
                    <li class="btn btn6" id="Button6"></li>
                    <li class="btn btn7" id="Button7"></li>
                    <li class="btn btn8" id="Button8"></li>
                    <li class="btn btn9" id="Button9"></li>
                    <li class="btn btn10" id="Button10"></li>
                    <li class="btn btn11" id="Button11"></li>
                    <li class="btn btn12" id="Button12"></li>
                    <li class="btn btn13" id="Button13"></li>
                    <li class="btn btn14" id="Button14"></li>
                    <li class="btn btn15" id="Button15"></li>
                </ul>
            </div>
        </div>

    </div>
    {{-- <section>
        <h1>Nombres</h1>
        <ul>
            <li>Fecha y hora</li>
            <li>Lugar ceremonia</li>
            <li>Recepción</li>
        </ul>
    </section>

    <section>
        <h2>Mensaje personalizado</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error esse provident doloribus exercitationem, harum,
            unde corporis doloremque, in sed veritatis earum dolor. Sequi, animi? Sapiente nisi inventore sint voluptate,
            asperiores molestiae distinctio iste reiciendis eos ut est exercitationem pariatur accusantium.</p>
    </section>
    <section>
        <p>
            Schedule of events (ceremony start time, cocktail hour, dinner, etc.)
        </p>
    </section>
    <section>
        <p>Dress code, if any (e.g., black tie, casual, themed attire)</p>
    </section>
    <section>
        <p>Timer countdown</p>
    </section> --}}
@endsection
