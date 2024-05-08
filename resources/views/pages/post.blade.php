@extends('template.main')
@section('container')
    <main id="main">
        <section id="posts" class="posts">
            <div class="container shadow mt-4 p-4" data-aos="fade-up" data-aos-delay="100">
                <div class="section-title  text-start">
                    <h4>{{ $postData->title }}</h4>
                    <p><i class="fa fa-calendar"></i> {{ $postData->publication_date }}</p>
                    <div class="social-links text-end text-md-right pt-3 pt-md-0">
                        <span class="me-2">Share</span>
                        <a href="" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="https://www.facebook.com/{{ $hospitalData->social_accounts[3]->url }}" class="facebook"><i
                                class="bx bxl-facebook "></i></a>
                        <a href="https://www.instagram.com/{{ $hospitalData->social_accounts[2]->url }}"
                            class="instagram"><i class="bx bxl-instagram "></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-wa"></i></a>
                        {{-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
                    </div>
                    <hr>
                </div>

                <div class="section-image  text-center">
                    <img src="{{ asset('assets/img/posts/' . $postData->brosur_url) }}" alt="" width="100%"
                        height="600">
                </div>

                <div class="row content">

                </div>
                <div class="row">
                    <div class="col-12">

                    </div>
                </div>

            </div>
        </section>
        <!-- ======= Contact Section ======= -->
        @include('section.contact')

    </main>
@endsection
