<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>{{ $title }}</title>
    <meta content="padang eye center" name="description" />
    <meta content="padang eye center, mata" name="keywords" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Preload image --}}
    <link rel="preload" href="{{ asset('assets/img/pec.jpg') }}" as="image">
    <link rel="preload" href="{{ asset('assets/logo/logo_pec.png') }}" as="image">
    <!-- Favicons -->
    <link href="{{ asset('assets/logo/logo_pec.png') }}" rel="icon" />
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />
    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/9d17737383.js" crossorigin="anonymous"></script>
    {{-- Sweet alert --}}
    <script src="{{ asset('assets/vendor/sweetalert/sweetalert2@11.js') }}"></script>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&family=Oswald&display=swap" rel="stylesheet">

    <style>
        .gilda-display-regular {
            font-family: "Gilda Display", serif;
            font-weight: 700;
            font-style: normal;
        }

        .text-pec-primary {
            color: #124265
        }

        .text-pec-success {
            color: #46dfac;
        }

        .text-pec-warning {
            color: #eca46b;
        }

        .shadow-pec-warning {
            box-shadow: 0px 0px 3px rgba(236, 164, 107, 0.5);
        }

        .shadow-pec-warning:hover {
            box-shadow: 0px 0px 10px rgba(236, 164, 107, 0.5);
        }

        .shadow-pec-success {
            box-shadow: 0px 0px 3px rgba(70, 223, 172, 0.5);
        }

        .shadow-pec-success:hover {
            box-shadow: 0px 0px 10px rgba(70, 223, 172, 0.5);
        }

        .bg-pec {
            background: linear-gradient(to right, #46dfac, #66e0b1, #86e1b6, #a6e2bb, #c6e3c0, #e6e4c5, #ffe5aa, #ffce88, #ffb766, #ffa044, #ff8922);
        }
    </style>
    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="logo "><img src="{{ asset('assets/logo/logo_pec.png') }}"
                    alt="logo pec" class="img-fluid" /></a>
            <h1 class="logo "><a href="{{ url('/') }}" class="gilda-display-regular text-success">Padang Eye
                    Center</a></h1>
            @include('template.navbar')
        </div>
    </header>

    @yield('container')

    <!-- End #main -->

    @include('template.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
