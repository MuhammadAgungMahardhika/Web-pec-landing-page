<section id="about-video" class="about-video">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-6 video-box align-self-baseline position-relative" data-aos="fade-right"
                data-aos-delay="100">
                <img src="{{ asset('assets/img/pec.jpg') }}" class="img-fluid" alt="" />
                <a href="{{ $hospitalData->video_profile_url }}" class="glightbox play-btn mb-4" data-vbtype="video"
                    data-autoplay="true"></a>
            </div>

            <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                <h3>
                    {{ $videoSection['title'] }}
                </h3>
                <p class="fst-italic" id="video-description">
                    {{ $videoSection['description'] }}
                </p>
                <ul>
                    <li>
                        <i class="bx bx-check-double"></i> Ullamco laboris nisi ut
                        aliquip ex ea commodo consequat.
                    </li>
                    <li>
                        <i class="bx bx-check-double"></i> Duis aute irure dolor in
                        reprehenderit in voluptate velit.
                    </li>
                    <li>
                        <i class="bx bx-check-double"></i> Voluptate repellendus
                        pariatur reprehenderit corporis sint.
                    </li>
                    <li>
                        <i class="bx bx-check-double"></i> Ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate trideta storacalaperda mastiro
                        dolore eu fugiat nulla pariatur.
                    </li>
                </ul>
                <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                    cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum
                </p>
            </div>
        </div>
    </div>
</section>
