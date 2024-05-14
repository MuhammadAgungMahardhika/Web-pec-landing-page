@extends('template.main')
@section('container')
    <section id="home" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div id="leaves" class="text-end" style="margin-top: -300px; position:fixed;">
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1 class="text-success">{{ $hospitalData->name }}</h1>
                    <h2 class="text-pec-primary">{{ $hospitalData->moto }}</h2>
                </div>
            </div>
            <div class="text-center">
                <a href="#about" class="btn-get-started scrollto bg-success">Booking now</a>
            </div>

            <div class="row icon-boxes p-4">
                @php
                    $delay = 200;
                @endphp
                @foreach ($landingPageMenu as $menu)
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                        data-aos-delay="{{ $delay }}">
                        <div class="icon-box ">
                            <div class="icon"><i class="{{ $menu['icon'] }}"></i></div>
                            <h4 class="title"><a href="">{{ $menu['title'] }}</a></h4>
                            <p class="description">
                                {{ $menu['description'] }}
                            </p>
                        </div>
                    </div>
                    @php
                        $delay += 150;
                    @endphp
                @endforeach

            </div>
        </div>
    </section>


    <main id="main">
        @include('home_section.about')
        @include('home_section.about_count')
        @include('home_section.about_video')
        {{-- @include('home_section.client') --}}
        {{-- @include('home_section.services') --}}
        @include('home_section.posts')
        {{-- @include('home_section.testimonials') --}}
        {{-- @include('home_section.cta') --}}
        {{-- @include('home_section.branch') --}}
        @include('home_section.team')
        {{-- @include('home_section.pricing') --}}
        {{-- @include('home_section.faq_ask') --}}
        @include('home_section.contact')

    </main>
@endsection
