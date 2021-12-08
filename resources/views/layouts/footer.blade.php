<footer id="footer-part">
    <div class="footer-top pt-40 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-about mt-40">
                        <div class="logo">
                            <a href="#"><img src="{{ asset('frontend/images/logo.png') }}" alt="Logo"></a>
                        </div>
                        <p>Yangon Vocational College of Technology (YVCT)</p>
                        <ul class="mt-20">
                            @foreach($sitesettings as $key => $sitesetting)
                            @if($sitesetting->name=="facebook")
                            <li><a href="{{ $sitesetting->value }}"><i class="fa fa-facebook-f"></i></a></li>
                            @elseif ($sitesetting->name=="twitter")
                            <li><a href="{{ $sitesetting->value }}"><i class="fa fa-twitter"></i></a></li>
                            @elseif ($sitesetting->name=="google")
                            <li><a href="{{ $sitesetting->value }}"><i class="fa fa-google-plus"></i></a></li>
                            @elseif ($sitesetting->name=="youtube")
                            <li><a href="{{ $sitesetting->value }}"><i class="fa fa-youtube"></i></a></li>
                            @else
                            <li><a href="{{ $sitesetting->value }}"><i class="fa fa-instagram"></i></a></li>
                            @endif
                            @endforeach




                        </ul>
                    </div> <!-- footer about -->
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-link support mt-40">
                        <div class="footer-title pb-25">
                            <h6>Support</h6>
                        </div>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>FAQS</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Privacy</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Policy</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>

                        </ul>
                    </div> <!-- support -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-address mt-40">
                        <div class="footer-title pb-25">
                            <h6>Contact Us</h6>
                        </div>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="cont">
                                    <p>No.(8)Quarter,Nawaratt(8x9)St,Thakayta Tsp, Yangon</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="cont">
                                    <p>09-261983030,09-97426480</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="cont">
                                    <p>YVCTmyanmar@gmail.com</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- footer address -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer top -->
</footer>
