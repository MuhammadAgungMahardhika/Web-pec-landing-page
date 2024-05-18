<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>{{ $teamSection['title'] }}</h2>
            <p>
                {{ $teamSection['description'] }}
            </p>
        </div>
        <div class="row">
            <div class="testimonials-slider swiper p-4 bg-white" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper ">
                    @php $delay = 100 @endphp
                    @foreach ($teamSection['data'] as $member)
                        <div class="col-12 d-flex align-items-stretch justify-content-center swiper-slide "
                            data-aos="fade-up" data-aos-delay="{{ $delay }}">
                            <div class="member " style="width: 20rem">
                                <div class="member-img shadow-pec-success">
                                    <img src="{{ asset('assets/img/team/' . $member->image_url) }}" class="img-fluid "
                                        alt="team pec" loading="lazy" />
                                    <div class="social ">
                                        <a href="https://twitter.com/{{ $member->twitter }}"><i
                                                class="bi bi-twitter"></i></a>
                                        <a href="https://www.facebook.com/{{ $member->facebook }}"><i
                                                class="bi bi-facebook"></i></a>
                                        <a href="https://www.instagram.com/{{ $member->instagram }}"><i
                                                class="bi bi-instagram"></i></a>
                                        <a href="https://www.linkedin.com/in/{{ $member->linkedin }}"><i
                                                class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>{{ $member->name }}</h4>
                                    <span>{{ $member->position }}</span>
                                </div>
                            </div>
                        </div>
                        @php $delay += 150  @endphp
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
