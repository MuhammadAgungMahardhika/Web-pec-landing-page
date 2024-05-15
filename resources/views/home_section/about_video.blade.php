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
                        <i class="bx bx-check-double"></i> Menyediakan pelayanan mata sub spesialistik yang terpadu.
                    </li>
                    <li>
                        <i class="bx bx-check-double"></i> Menyediakan tenaga medis yang profesional dan kompeten.
                    </li>
                    <li>
                        <i class="bx bx-check-double"></i> Pelayanan yang berorientasi pada kepuasan pasien (Customer
                        Satisfaction).
                    </li>
                    <li>
                        <i class="bx bx-check-double"></i>Mendorong semangat kebersamaan untuk mencapai tujuan
                        perusahaan.
                    </li>
                    <li>
                        <i class="bx bx-check-double"></i>Menjalin hubungan kerjasama dengan institusi terkait baik
                        nasional maupun internasional.
                    </li>
                </ul>
                <p>
                    Kami percaya bahwa setiap pasien layak mendapatkan perawatan terbaik, itulah sebabnya kami terus
                    meningkatkan standar layanan kami melalui inovasi dan pelatihan berkelanjutan. Di Padang Eye Center,
                    kami tidak hanya menangani masalah kesehatan mata Anda, tetapi juga memberikan edukasi dan dukungan
                    yang Anda butuhkan untuk menjaga kesehatan mata jangka panjang.
                </p>
            </div>
        </div>
    </div>
</section>
