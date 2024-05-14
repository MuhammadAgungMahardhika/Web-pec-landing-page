<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3> {{ $hospitalData->name }}</h3>
                    <p>
                        {{ $hospitalData->address }} <br />
                        <strong>Phone:</strong> +1 5589 55488 55<br />
                        <strong>Email:</strong> info@example.com<br />
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Informasi</h4>
                    <ul>
                        <li>
                            <i class="bx bx-chevron-right"></i> <a href="#">Home</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i> <a href="#">About us</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i> <a href="#">Services</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="#">Terms of service</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="#">Privacy policy</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Kontak Pec</h4>
                    <ul>
                        <li>
                            <i class="fa fa-phone text-sm me-2"> </i>
                            <a href="#">{{ $hospitalData->social_accounts[1]->url }}</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope me-2"></i>
                            <a href="#">{{ $hospitalData->social_accounts[0]->url }}</a>
                        </li>
                        <li>
                            <i class="bx bxl-facebook me-2"></i>
                            <a href="#">{{ $hospitalData->social_accounts[3]->url }}</a>
                        </li>
                        <li>
                            <i class="bx bxl-instagram me-2"></i>
                            <a href="#">{{ $hospitalData->social_accounts[2]->url }}</a>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Join Our Newsletter</h4>
                    <p>
                        Tamen quem nulla quae legam multos aute sint culpa legam noster
                        magna
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
                Developed by <a href="https://github.com/MuhammadAgungMahardhika">Muhammad Agung Mahardhika</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            {{-- <a href="" class="twitter"><i class="bx bxl-twitter"></i></a> --}}
            <a href="https://www.facebook.com/{{ $hospitalData->social_accounts[3]->url }}" class="facebook"><i
                    class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/{{ $hospitalData->social_accounts[2]->url }}" class="instagram"><i
                    class="bx bxl-instagram"></i></a>
            {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
            {{-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
        </div>
    </div>
</footer>
