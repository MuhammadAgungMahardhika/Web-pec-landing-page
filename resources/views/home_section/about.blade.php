<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Tentang Pec</h2>
            <img src="{{ asset('assets/logo/logo_pec.png') }}" alt="" width="200">
            <p>
                {{ $hospitalData->about }}
            </p>
        </div>

        <div class="row content">
            <div class="col-lg-6">
                <p> Visi </p>
                <ul>
                    @foreach ($hospitalData->visions as $vision)
                        <li>
                            <i class="ri-check-double-line"></i> {{ $vision->description }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <p>Misi</p>
                <ul>
                    @foreach ($hospitalData->missions as $mission)
                        <li>
                            <i class="ri-check-double-line"></i> {{ $mission->description }}
                        </li>
                    @endforeach
                </ul>
                {{-- <a href="#" class="btn-learn-more">Learn More</a> --}}
            </div>
        </div>

    </div>
</section>
