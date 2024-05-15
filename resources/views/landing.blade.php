@extends('layouts.master')

@section('styles')
    <style>
        .watch {
            background: white;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            border: 2px solid #e6d0c7;
            display: inline-block;
            margin: 3px;
        }
    </style>
@endsection

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
                    <img src="{{ Vite::asset('resources/habibi/images/preloader.gif') }}" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->

        <!-- start of invitation -->
        <section class="wpo-invitation-area section-padding"
            style="background: url(./assets/images/slider/invitation-bg.jpg) no-repeat center center;  background-size: cover; background-color: #f3eeec">
            <div class="container-fluid">
                <div class="wpo-invitation-wrap">
                    <div class="wpo-invitation-inner-item">
                        <div class="wpo-invitation-inner">
                            <div class="middle-couple-pic wow zoomIn" data-wow-duration="500ms">
                                <div class="middle-couple-pic-inner">
                                    <img src="{{ Vite::asset('resources/images/primos/cachorros-anillo.jpeg') }}"
                                        alt="">
                                </div>
                                <div class="couple-flower">
                                    <img src="{{ Vite::asset('resources/habibi/images/couple/couple-flower.png') }}"
                                        alt="">
                                </div>
                            </div>
                            @isset($invitation)
                                <div class="wpo-invitation-info mb-5">
                                    <h2 class="wow fadeInUp" data-wow-duration="600ms">Dulce & Alfredo</h2>
                                    <p class="wow fadeInUp px-3" data-wow-duration="700ms">Con gran alegría y emoción deseamos
                                        que nos
                                        acompañen al día más especial de nuestras vidas: nuestra unión en matrimonio.</p>
                                </div>

                                <div class="wpo-event-text">
                                    <ul>
                                        <li class="wow fadeInUp" style="margin-bottom: 3rem" data-wow-duration="800ms">
                                            <div>
                                                <small style="color: #835845">Padres de la novia</small>
                                            </div>
                                            <p class="m-0">Julio Campos Reyes</p>
                                            <p class="m-0">Ma. del Socorro Barceló Salas</p>
                                        </li>
                                        <li class="wow fadeInUp" style="margin-bottom: 3rem" data-wow-duration="900ms">
                                            <div>
                                                <small style="color: #835845">Padres del novio</small>
                                            </div>
                                            <p class="m-0">Alfredo A. Espejel Hernández</p>
                                            <p class="m-0">Remedios A. Canella López</p>
                                        </li>
                                        <li class="wow fadeInUp" style="margin-bottom: 3rem" data-wow-duration="1000ms">
                                            <div>
                                                <small style="color: #835845">Fecha</small>
                                            </div>
                                            Sábado, 17 de agosto del 2024
                                        </li>
                                    </ul>
                                </div>
                                <div class="wpo-invitation-info mt-5 mb-5">
                                    <span class="shape wow fadeInUp" data-wow-duration="1100ms">
                                        <img src="{{ Vite::asset('resources/habibi/images/slider/date-shape.png') }}"
                                            alt="">
                                    </span>
                                    <div class="row wow fadeInUp" data-wow-duration="1200ms">
                                        <div class="col col-xs-12">
                                            <div class="clock-grids">
                                                <div id="clock"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </section>


        @isset($invitation)
            <section class="wpo-invitation-area section-padding p-0"
                style="background: url(./assets/images/slider/invitation-bg.jpg) no-repeat center center;  background-size: cover; background-color: #f3eeec; position: relative">
                <div class="padrino-flower --left">
                    <img src="{{ Vite::asset('resources/habibi/images/story/s-shape1.png') }}" alt="">
                </div>

                <div class="container-fluid" id="{{ isset($just_confirmed) ? 'scroll-target' : '' }}">
                    <div class="wpo-invitation-wrap">
                        <div class="wpo-invitation-inner-item">
                            <div class="wpo-invitation-inner">
                                <div class="text-center mb-5">
                                    <h1 style="font-size: 4.5rem">{{ $invitation->envelope_name }}</h1>
                                </div>
                                <div class="mx-auto text-center mb-5" style="max-width: 600px">
                                    <p class="mb-4">Como muestra de nuestro aprecio y amor por ustedes, nos complace
                                        otorgarles
                                        <b style="color: #835845">{{ $invitation->passes }} boletos</b> para este día de
                                        celebración.
                                    </p>

                                    <p class="mb-5">Estamos muy emocionados por compartir a su lado momentos de alegría y
                                        conexión mientras
                                        marcamos el inicio de nuestra nueva vida juntos. Su presencia significa mucho para
                                        nosotros, y esperamos sinceramente que se sumen a nuestra celebración mientras unimos
                                        nuestras vidas en matrimonio.
                                    </p>

                                    <form method="POST">
                                        @csrf
                                        @if ($invitation->is_confirmed > 0)
                                            <button disabled class="theme-btn">¡Gracias por confirmar!</button>
                                        @else
                                            <button class="theme-btn">Confirmar asistencia</button>
                                        @endif
                                    </form>
                                </div>
                                <div class="wpo-event-text">
                                    <ul>
                                        <li class="wow fadeInUp" style="margin-bottom: 3rem" data-wow-duration="1200ms">
                                            <div style="width: 28px" class="mx-auto mb-3">
                                                <img src="{{ Vite::asset('resources/images/icons/iglesia.webp') }}"
                                                    alt="">
                                            </div>
                                            <div>
                                                <small style="color: #835845">Ceremonia religiosa
                                                    <br>
                                                    <span style="font-size: 80%">17:00 horas</span>
                                                </small>
                                            </div>
                                            <p>
                                                Catedral de Iztapalapa <br>Señor del Santo Sepulcro de Jerusalén<br>
                                                <span style="font-size: 80%">Ermita Iztapalapa 1281, El Molino</span>
                                            </p>
                                            <a href="https://maps.app.goo.gl/Lws3CPUuoAf5eMmF7" target="_blank">
                                                <button
                                                    style="background: transparent; color: #835845; border: 1px solid #835845;"
                                                    class="theme-btn">Ver mapa</button>
                                            </a>
                                        </li>
                                        <li class="wow fadeInUp" style="margin-bottom: 3rem" data-wow-duration="1200ms">
                                            <div style="width: 28px" class="mx-auto mb-3">
                                                <img src="{{ Vite::asset('resources/images/icons/drinks.webp') }}"
                                                    alt="">
                                            </div>
                                            <div>
                                                <small style="color: #835845">Recepción
                                                    <br>
                                                    <span style="font-size: 80%">19:30 horas</span>
                                                </small>
                                            </div>
                                            <p>
                                                Hacienda de San Nicolás Tolentino <br>
                                                <span style="font-size: 80%">Técnicos Y Manuales 45, Lomas Estrella</span>
                                            </p>
                                            <a href="https://maps.app.goo.gl/qjRG4rjR26v1kbHe6" target="_blank">
                                                <button
                                                    style="background: transparent; color: #835845; border: 1px solid #835845;"
                                                    class="theme-btn">Ver mapa</button>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end of invitation slider -->


            <section class="wpo-invitation-area section-padding"
                style="background: url(./assets/images/slider/invitation-bg.jpg) no-repeat center center;  background-size: cover; background-color: #f3eeec">
                <div class="container-fluid">
                    <div class="row">
                        <div class="wpo-section-title mb-4">
                            <span>Vestidos para la ocasión</span>
                            <h2>Código de vestimenta</h2>
                        </div>
                    </div>
                    <div class="wpo-invitation-wrap">
                        <div class="wpo-invitation-inner-item">
                            <div class="wpo-invitation-inner">
                                <div class="wpo-event-text">
                                    <ul>
                                        <li class="wow fadeInUp" style="margin-bottom: 3rem" data-wow-duration="800ms">
                                            <div style="width: 100%; max-width: 200px" class="mx-auto"
                                                data-wow-duration="800ms">
                                                <img class="img-fluid"
                                                    src="{{ Vite::asset('resources/images/icons/dresscode.png') }}"
                                                    alt="">
                                            </div>
                                            <br>
                                            <small style="color: #835845">Etiqueta rigurosa
                                            </small>
                                            <br>
                                            <span>No utilizar tonalidades de azul oscuro ni colores claros</span>
                                        </li>
                                        <li>
                                            <div style="font-size: 80%" class="mb-3">Recomendaciones de tonos:</div>
                                            <div class="px-2">
                                                <div class="watch" style="background-color: #410007;">&nbsp;</div>
                                                <div class="watch" style="background-color: #130000;">&nbsp;</div>
                                                <div class="watch" style="background-color: #322720;">&nbsp;</div>
                                                <div class="watch" style="background-color: #643f0b;">&nbsp;</div>
                                                <div class="watch" style="background-color: #9c1c0e;">&nbsp;</div>
                                                <div class="watch" style="background-color: #2c238c;">&nbsp;</div>
                                                <div class="watch" style="background-color: #10191d;">&nbsp;</div>
                                                <div class="watch" style="background-color: #64180e;">&nbsp;</div>
                                                <div class="watch" style="background-color: #67000b;">&nbsp;</div>
                                                <div class="watch" style="background-color: #643f0b;">&nbsp;</div>
                                                <div class="watch" style="background-color: #651569;">&nbsp;</div>
                                                <div class="watch" style="background-color: #7a1468;">&nbsp;</div>
                                                <div class="watch" style="background-color: #132424;">&nbsp;</div>
                                                <div class="watch" style="background-color: #413814;">&nbsp;</div>
                                                <div class="watch" style="background-color: #210003;">&nbsp;</div>
                                                <div class="watch" style="background-color: #00060b;">&nbsp;</div>
                                                <div class="watch" style="background-color: #021b15;">&nbsp;</div>
                                                <div class="watch" style="background-color: #180020;">&nbsp;</div>
                                                <div class="watch" style="background-color: #140e34;">&nbsp;</div>
                                            </div>
                                        </li>
                                        <li class="wow fadeInUp" style="margin-bottom: 3rem" data-wow-duration="1000ms">
                                            <div class="text-center px-3">
                                                Apóyanos en nuestro deseo de cumplir con el código de vestimenta y añadir un
                                                toque extra de elegancia y armonía a
                                                nuestro día especial.
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- start wpo-portfolio-section -->
            <section class="wpo-portfolio-section section-padding" id="gallery">
                <h2 class="hidden">some</h2>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="portfolio-grids gallery-container clearfix portfolio-slide owl-carousel">
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="{{ Vite::asset('resources/images/primos/cachorros-aire.jpeg') }}"
                                            class="fancybox" data-fancybox-group="gall-1">
                                            <img src="{{ Vite::asset('resources/images/primos/cachorros-aire.jpeg') }}" alt
                                                class="img img-responsive">
                                            <div class="hover-content">
                                                <i class="ti-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="{{ Vite::asset('resources/images/primos/cachorros-arbol.jpeg') }}"
                                            class="fancybox" data-fancybox-group="gall-1">
                                            <img src="{{ Vite::asset('resources/images/primos/cachorros-arbol.jpeg') }}" alt
                                                class="img img-responsive">
                                            <div class="hover-content">
                                                <i class="ti-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="{{ Vite::asset('resources/images/primos/cachorros-beso.jpeg') }}"
                                            class="fancybox" data-fancybox-group="gall-1">
                                            <img src="{{ Vite::asset('resources/images/primos/cachorros-beso.jpeg') }}" alt
                                                class="img img-responsive">
                                            <div class="hover-content">
                                                <i class="ti-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="{{ Vite::asset('resources/images/primos/cachorros-barda.jpeg') }}"
                                            class="fancybox" data-fancybox-group="gall-1">
                                            <img src="{{ Vite::asset('resources/images/primos/cachorros-barda.jpeg') }}" alt
                                                class="img img-responsive">
                                            <div class="hover-content">
                                                <i class="ti-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="{{ Vite::asset('resources/images/primos/cachorros-pose.jpeg') }}"
                                            class="fancybox" data-fancybox-group="gall-1">
                                            <img src="{{ Vite::asset('resources/images/primos/cachorros-pose.jpeg') }}" alt
                                                class="img img-responsive">
                                            <div class="hover-content">
                                                <i class="ti-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </section>


            <!-- start wpo-story-section-s4 -->
            <section class="wpo-story-section-s4 section-padding" style="padding-top: 3rem; background-color: #f3eeec">
                <div class="container">
                    <div class="row">
                        <div class="wpo-section-title">
                            <span>Acompañándonos en el camino</span>
                            <h2>Nuestros padrinos</h2>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col col-12 mb-5" style="position: relative">
                            <div class="padrino-flower --left">
                                <img src="{{ Vite::asset('resources/habibi/images/story/s-shape1.png') }}" alt="">
                            </div>
                            <div class="wpo-invitation-area mx-auto" style="max-width: 800px;">
                                <div class="wpo-invitation-wrap p-0">
                                    <div class="wpo-invitation-inner-item">
                                        <div class="wpo-invitation-inner" style="padding: 3rem 0;">
                                            <h3 class="mb-3">Padrinos de velación</h3>
                                            <p class="m-0">Beatriz L. Espejel Hernández</p>
                                            <p class="m-0">Floriberto Vera Vera</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 mb-5" style="position: relative">
                            <div class="padrino-flower --right">
                                <img src="{{ Vite::asset('resources/habibi/images/story/s-shape2.png') }}" alt="">
                            </div>
                            <div class="wpo-invitation-area mx-auto" style="max-width: 800px;">
                                <div class="wpo-invitation-wrap p-0">
                                    <div class="wpo-invitation-inner-item">
                                        <div class="wpo-invitation-inner" style="padding: 3rem 0;">
                                            <h3 class="mb-3">Padrinos de lazo</h3>
                                            <p class="m-0">Alejandra L. Mejía Salazar</p>
                                            <p class="m-0">Jorge J. Espejel Hernández</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 mb-5" style="position: relative">
                            <div class="padrino-flower --left">
                                <img src="{{ Vite::asset('resources/habibi/images/story/s-shape1.png') }}" alt="">
                            </div>
                            <div class="wpo-invitation-area mx-auto" style="max-width: 800px;">
                                <div class="wpo-invitation-wrap p-0">
                                    <div class="wpo-invitation-inner-item">
                                        <div class="wpo-invitation-inner" style="padding: 3rem 0;">
                                            <h3 class="mb-3">Padrinos de anillos</h3>
                                            <p class="m-0">Carolina Espejel Canella</p>
                                            <p class="m-0">Francisco Cruz Espíritu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 mb-5" style="position: relative">
                            <div class="padrino-flower --right">
                                <img src="{{ Vite::asset('resources/habibi/images/story/s-shape2.png') }}" alt="">
                            </div>
                            <div class="wpo-invitation-area mx-auto" style="max-width: 800px;">
                                <div class="wpo-invitation-wrap p-0">
                                    <div class="wpo-invitation-inner-item">
                                        <div class="wpo-invitation-inner" style="padding: 3rem 0;">
                                            <h3 class="mb-3">Padrinos de harras</h3>
                                            <p class="m-0">Lilia L. Espejel Hernández</p>
                                            <p class="m-0">José L. Espejel Hernández</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </section>



            <section class="wpo-invitation-area pb-3"
                style="background: url(./assets/images/slider/invitation-bg.jpg) no-repeat center center;  background-size: cover; background-color: #f3eeec">
                <div class="container-fluid">
                    <div class="row">
                        <div class="wpo-section-title mb-4">
                            <span>Sueños por cumplir</span>
                            <h2>Mesa de regalos</h2>
                        </div>
                    </div>
                    <div class="wpo-invitation-wrap">
                        <div class="wpo-invitation-inner-item">
                            <div class="wpo-invitation-inner p-5">
                                <div class="row">
                                    <div class="col-12 text-center mb-5">
                                        <div style="height: 40px" class="text-center my-4 mb-4">
                                            <img style="width: 160px"
                                                src="{{ Vite::asset('resources/images/logos/liverpool.webp') }}"
                                                alt="">
                                        </div>
                                        <div class="text-center">
                                            <p>Evento: 51301589</p>
                                            <p>
                                                Mesa de regalos
                                            </p>
                                        </div>
                                        <a style="color: #835845"
                                            href="https://mesaderegalos.liverpool.com.mx/milistaderegalos/51301589"
                                            target="_blank">
                                            <button class="theme-btn">Ver lista</button>
                                        </a>
                                    </div>
                                    <div class="col-12 text-center mb-5">
                                        <div style="height: 40px" class="text-center my-4 mb-4">
                                            <img style="width: 120px"
                                                src="{{ Vite::asset('resources/images/logos/bbva.webp') }}" alt="">
                                        </div>
                                        <p>A nombre de Dulce María Campos Barceló</p>
                                        <p>
                                            Cuenta: 153 863 9016
                                            <br>
                                            CLABE: 0121 8001 5386 390162
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-bottom: 8rem"></div>
            </section>
        @endisset

    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            var scrollId = 'scroll-target';

            var targetElement = document.getElementById(scrollId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start',
                });
            }
        });
    </script>
@endsection
