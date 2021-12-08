<header id="header-part">

    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="header-contact text-lg-left text-center">
                        <ul>
                            <li><img src="{{ asset('frontend/images/all-icon/map.png') }}" alt="icon"><span>No.(8)Quarter,Nawaratt(8x9)St,Thakayta Tsp, Yangon</span></li>
                            <li><img src="{{ asset('frontend/images/all-icon/email.png') }}" alt="icon"><span>YVCTmyanmar@gmail.com</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="header-opening-time text-lg-right text-center">
                        <p>Opening Hours : Monday to Saturay - 8 Am to 5 Pm</p>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header top -->


    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-3 col-4">
                    <div class="logo mt-3">
                        <a href="index-2.html">
                            <img src="{{ asset('frontend/images/logo.png') }}" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-9 col-8">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="active" href="{{ route('homepage') }}">Home</a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('frontend.about') }}">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('frontend.course') }}">Student</a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('frontend.image') }}">Image</a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('frontend.teacher') }}">Our teachers</a>

                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('frontend.contact') }}">Contact</a>

                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>
