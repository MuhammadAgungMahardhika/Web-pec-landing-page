<section id="posts" class="posts">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Postingan</h2>
            <p>
                Berbagai update dan informasi terbaru dari Padang Eye Center, termasuk tips kesehatan mata dan layanan
                unggulan kami.
            </p>
        </div>

        <div class="row">
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="px-4 text-end">
                    <a href="{{ url('posts') }}" class="text-success mt-4">Lihat semua postingan</a>
                </div>
                <div class="swiper-wrapper ">
                    <?php $no = 5; ?>
                    @foreach ($postData as $post)
                        <div class="col-12 d-flex align-items-stretch justify-content-center swiper-slide p-4">
                            <a href="{{ url('post') . '/' . $post->slug }}"
                                style="text-decoration: none; color: inherit;">
                                <div class="card shadow-pec-success" style="width: 23rem">
                                    <img src="{{ asset('assets/img/posts/' . $post->brosur_url) }}" class="card-img-top"
                                        alt="{{ $post->brosur_url }}">
                                    <div class="card-body">
                                        <h5 class="card-title fw-medium">{{ $post->title }}</h5>
                                        <i class="fa fa-calendar"></i>
                                        <span class=" fw-lighter">{{ $post->publication_date }}</span>
                                        <p class="card-text mt-4">{{ $post->summary }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </div>
</section>
