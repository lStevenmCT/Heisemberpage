@extends('layout.layout')
@section('title', 'Inicio')
@section('content')
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            @php
                $siguiente = 0;
            @endphp
            @foreach ($banners as $key => $banner)
                <div class="hs-item set-bg" data-setbg="{{ asset($banner['Imagen']) }}"
                    data-hash="slide-{{ $key }}">
                    <div class="container">
                        {{-- <h2>{{ $banner['title'] }}</h2> --}}
                        <a href="{{url('/portafolio')}}" class="site-btn">Ver Más <i class="fa fa-angle-double-right"></i></a>
                    </div>
                        @php 
                            if ($key === array_key_last($banners)) {
                                $siguiente = 0;
                            } else {
                                $siguiente += 1;
                            }
                            $siguienteimg = $banners[$siguiente];
                        @endphp
                        <div class="next-hs set-bg" data-setbg="{{ $siguienteimg['Imagen'] }}">
                            <a href="#slide-{{ $siguiente }}" class="nest-hs-btn">Siguiente</a>
                        </div>
                </div>
            @endforeach
        </div>
        @include('social_network')
    </section>
    <!-- Hero section end-->

    <!-- Intro section -->
    <section class="intro-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="{{ asset("images/header-bg/{$about->imagen}") }}" alt="">
                </div>
                <div class="col-lg-7 intro-text">
                    <span>{{ $about->subtitle }}</span>
                    <h2>{{ $about->title }} </h2>
                    <p>{{ $about->description }}</p>
                    <a href="{{url('/contacto')}}" class="site-btn sb-dark">Contactar<i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Intro section end-->

    <!-- Portfolio section -->
    <section class="portfolio-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-7">
                    <a href="{{url('/portafolio')}}" class="portfolio-item">
                        <img src="{{ asset('images/portfolio/1.png') }}" alt="">
                        <h4>Ver Más</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-5">
                    <a href="{{url('/portafolio')}}" class="portfolio-item">
                        <img src="{{ asset('images/portfolio/2.png') }}" alt="">
                        <h4>Ver Más</h4>
                    </a>
                </div>
                <div class="col-lg-5 col-md-12">
                    <a href="{{url('/portafolio')}}" class="portfolio-item">
                        <img src="{{ asset('images/portfolio/3.png') }}" alt="">
                        <h4>Ver Más</h4>
                    </a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <a href="{{url('/portafolio')}}" class="portfolio-item">
                        <img src="{{ asset('images/portfolio/4.png') }}" alt="">
                        <h4>Ver Más</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="{{url('/portafolio')}}" class="portfolio-item">
                        <img src="{{ asset('images/portfolio/5.png') }}" alt="">
                        <h4>Ver Más</h4>
                    </a>
                    <a href="{{url('/portafolio')}}" class="portfolio-item">
                        <img src="{{ asset('images/portfolio/7.png') }}" alt="">
                        <h4>Ver Más</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="{{url('/portafolio')}}" class="portfolio-item">
                        <img src="images/portfolio/6.png" alt="">
                        <h4>Ver Más</h4>
                    </a>
                    <a href="{{url('/portafolio')}}" class="portfolio-item">
                        <img src="{{ asset('images/portfolio/8.png') }}" alt="">
                        <h4>Ver Más</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="{{url('/portafolio')}}" class="portfolio-item">
                        <img src="{{ asset('images/portfolio/9.png') }}" alt="">
                        <h4>ver mas</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="{{url('/portafolio')}}" class="portfolio-item">
                        <img src="{{ asset('images/portfolio/10.png') }}" alt="">
                        <h4>ver mas</h4>
                    </a>
                    <a href="{{url('/portafolio')}}" class="portfolio-item">
                        <img src="{{ asset('images/portfolio/11.png') }}" alt="">
                        <h4>ver mas</h4>
                    </a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <a href="{{url('/portafolio')}}" class="portfolio-item">
                        <img src="{{ asset('images/portfolio/12.png') }}" alt="">
                        <h4>ver mas</h4>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio section end-->
@endsection
