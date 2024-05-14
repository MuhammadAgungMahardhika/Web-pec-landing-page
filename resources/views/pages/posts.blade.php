@extends('template.main')
@section('container')
    <main id="main">
        <section id="posts" class="posts">
            <div class="container shadow mt-4" data-aos="fade-up" data-aos-delay="100">
                <div class="section-title p-4">
                    <h2>Seluruh Postingan</h2>
                </div>

                <div class="row content">
                    @foreach ($postData as $post)
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 p-4">
                            <div class="card  shadow-pec-success justify-content-center">
                                <a href="{{ url('post') . '/' . $post->slug }}"
                                    style="text-decoration: none; color: inherit;">
                                    <img src="{{ asset('assets/img/posts/' . $post->brosur_url) }}" class="card-img-top"
                                        alt="{{ $post->brosur_url }}">
                                    <div class="card-body">
                                        <h5 class="card-title fw-medium">{{ $post->title }}</h5>
                                        <i class="fa fa-calendar"></i>
                                        <span class=" fw-lighter">{{ $post->publication_date }}</span>
                                        <p class="card-text mt-4">{{ $post->summary }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-12">
                        <div>{{ $postData->links() }}</div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ======= Contact Section ======= -->
        @include('home_section.contact')

    </main>
@endsection
