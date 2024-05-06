<nav id="navbar" class="navbar">
    <ul>
        <li>
            <a class="nav-link scrollto active" href="#hero">{{ $navbarData[0] }}</a>
        </li>
        <li><a class="nav-link scrollto" href="#about">{{ $navbarData[1] }}</a></li>
        <li> <a class="nav-link scrollto" href="#services">{{ $navbarData[2] }}</a> </li>
        <li> <a class="nav-link scrollto" href="#posts">{{ $navbarData[3] }}</a></li>
        <li> <a class="nav-link scrollto" href="#testimonials">{{ $navbarData[4] }}</a> </li>
        <li> <a class="nav-link scrollto o" href="#branch">{{ $navbarData[5] }}</a> </li>
        <li><a class="nav-link scrollto" href="#team">{{ $navbarData[6] }}</a></li>
        <li><a class="nav-link scrollto" href="#contact">{{ $navbarData[7] }}</a></li>
        <li>
            <a class="getstarted scrollto" href="{{ url('login') }}">{{ $navbarData[8] }}</a>
        </li>

        <li class="dropdown">
            <a href="#"><img src="{{ asset('assets/logo/' . $navbarData[9]) }}" alt=""
                    width="30"></a>
            <ul>
                <li>
                    <img src="{{ asset('assets/logo/flag_indonesia.png') }}" alt="">
                </li>
                <li>
                    <img src="{{ asset('assets/logo/flag_indonesia.png') }}" alt="">
                </li>
            </ul>
        </li>
    </ul>

    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
