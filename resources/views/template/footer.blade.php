<footer id="footer" class="bg-pec">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3> {{ $hospitalData->name }}</h3>
                    <p>
                        {{ $hospitalData->address }} <br />
                        <strong>Phone:</strong> {{ $hospitalData->social_accounts[1]->url }}<br />
                        <strong>Email:</strong> {{ $hospitalData->social_accounts[0]->url }}<br />
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Informasi</h4>
                    <ul>
                        <li>
                            <i class="bx bx-chevron-right"></i><a class="nav-link scrollto active"
                                href="{{ url('/#home') }}">{{ $navbarData[0] }}</a>
                        </li>
                        <li> <i class="bx bx-chevron-right"></i><a class="nav-link scrollto"
                                href="{{ url('/#about') }} ">{{ $navbarData[1] }}</a></li>
                        <li> <i class="bx bx-chevron-right"></i> <a class="nav-link scrollto"
                                href="{{ url('/#services') }}">{{ $navbarData[2] }}</a> </li>
                        <li> <i class="bx bx-chevron-right"></i> <a class="nav-link scrollto"
                                href="{{ url('/#posts') }}">{{ $navbarData[3] }}</a></li>
                        <li> <i class="bx bx-chevron-right"></i><a class="nav-link scrollto"
                                href="{{ url('/#testimonials') }}">{{ $navbarData[4] }}</a> </li>
                        <li> <i class="bx bx-chevron-right"></i> <a class="nav-link scrollto"
                                href="{{ url('/#branch') }}">{{ $navbarData[5] }}</a> </li>
                        <li> <i class="bx bx-chevron-right"></i><a class="nav-link scrollto"
                                href="{{ url('/#team') }}">{{ $navbarData[6] }}</a></li>
                        <li> <i class="bx bx-chevron-right"></i><a class="nav-link scrollto"
                                href="{{ url('/#contact') }}">{{ $navbarData[7] }}</a></li>

                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links ">
                    <h4>Sosial Media</h4>
                    <ul>
                        <li>
                            <i class="bx bxl-facebook me-2 text-primary"></i>
                            <a href="https://www.facebook.com/{{ $hospitalData->social_accounts[3]->url }}"
                                class="facebook">{{ $hospitalData->social_accounts[3]->url }}</a>
                        </li>
                        <li>
                            <i class="bx bxl-instagram me-2 text-danger"></i>
                            <a
                                href="https://www.instagram.com/{{ $hospitalData->social_accounts[2]->url }}">{{ $hospitalData->social_accounts[2]->url }}</a>
                        </li>
                        <li>
                            <i class="bx bxl-youtube me-2 text-danger"></i>
                            <a
                                href="https://www.youtube.com/{{ $hospitalData->social_accounts[4]->url }}">{{ $hospitalData->social_accounts[4]->url }}</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Ingin mengetahui berita terkini tentang Padang Eye Center ?</h4>
                    <p>
                        Masukan Alamat Email Anda Untuk Berlangganan NewsLetter PEC
                    </p>
                    <form action="" method="post">
                        <input type="email" name="email" /><input type="submit" value="Subscribe" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy;2008 - {{ date('Y') }} Copyright <strong><span>@padangeyecenter</span></strong>. All Rights
                Reserved
            </div>
            <div class="credits">
                Developed by <a href="https://github.com/MuhammadAgungMahardhika" class="text-dark">Muhammad Agung
                    Mahardhika</a>
            </div>
        </div>
        <div class="text-center text-md-right pt-3 pt-md-0">

            <a href="{{ url('term-and-aggreement') }}"><span class="text-dark">Syarat dan
                    Ketentuan</span></a>
            <span> | </span>
            <a href="#"><span class="text-dark">Kebijakan Privasi</span></a>

        </div>
    </div>
</footer>
