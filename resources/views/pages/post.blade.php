@extends('template.main')
@section('container')
    <main id="main">
        <section id="posts" class="posts">
            <div class="container shadow mt-4 p-4" data-aos="fade-up" data-aos-delay="100">
                {{-- Post Title & Share --}}
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-start">{{ $postData->title }}</h4>
                        <p class="text-start"><i class="fa fa-calendar"></i> {{ $postData->publication_date }}</p>
                        <div class="social-links text-end text-md-right pt-3 pt-md-0">
                            <span class="me-2">Share</span>
                            <a href="" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="https://www.facebook.com/{{ $hospitalData->social_accounts[3]->url }}"
                                class="facebook"><i class="bx bxl-facebook "></i></a>
                            <a href="https://www.instagram.com/{{ $hospitalData->social_accounts[2]->url }}"
                                class="instagram"><i class="bx bxl-instagram "></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-wa"></i></a>
                            {{-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
                        </div>
                        <hr>
                    </div>
                </div>

                {{-- Post Image --}}
                <div class="row">
                    <div class="col-12 text-center py-2">
                        <img src="{{ asset('assets/img/posts/' . $postData->brosur_url) }}" alt="" width="100%"
                            height="600">
                    </div>
                </div>

                {{-- Post Paragraf --}}
                <div class="row">
                    <div class="col-12 py-2">
                        @foreach ($postData->news_paragrafs as $paragraf)
                            <p>{{ $paragraf->description }}</p>
                        @endforeach
                    </div>
                </div>

                {{-- Source --}}
                <div class="row">
                    <div class="col-12">
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($postData->news_paragrafs as $paragraf)
                            @if ($paragraf->source_description)
                                <span style="font-size: 12px">
                                    [{{ $no++ }}]
                                    {{ $paragraf->source_description }} <a
                                        href="">{{ $paragraf->source_link }}</a></span>
                                <br>
                            @endif
                        @endforeach
                    </div>
                </div>

            </div>
        </section>
        <!-- ======= Contact Section ======= -->
        @include('section.contact')

    </main>
@endsection
