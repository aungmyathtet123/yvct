@extends('layouts.app2')
@section('content')
<section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url({{ asset('frontend/images/page-banner-5.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Welcome To YVCT</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">"နည်းပညာ၀င်ငွေရှာ YVCT ကိုလာခဲ့ပါ "</li>
                        </ol>
                    </nav>
                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== CONTACT PART START ======-->

<section id="contact-page" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.8236582600434!2d96.17698825073613!3d16.785446724246224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1edc1421581cb%3A0x6351a27de1bb3f2b!2sYagon%20Vocational%20College%20Of%20Technology!5e0!3m2!1sen!2smm!4v1638955661861!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            </div>
            <div class="col-lg-4">
                <div class="contact-address">
                    <div class="contact-heading">
                        <h5>Address</h5>
                        <p>If you have any further questions, please don’t hesitate to contact me.</p>
                    </div>
                    <ul>
                        <li>
                            <div class="singel-address">
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="cont">
                                    <p>No.(8)Quarter,Nawaratt(8x9)St</p>
                                    <p>Thakayta Tsp, Yangon</p>
                                </div>
                            </div> <!-- singel address -->
                        </li>
                        <li>
                            <div class="singel-address">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="cont">
                                    <p>09-261983030</p>
                                    <p>09-97426480</p>
                                </div>
                            </div> <!-- singel address -->
                        </li>
                        <li>
                            <div class="singel-address">
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="cont">
                                    <p>YVCTmyanmar@gmail.com</p>

                                </div>
                            </div> <!-- singel address -->
                        </li>
                        <li>
                            <div class="singel-address">
                                <div class="icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="cont">
                                    <p>www.vyct.com</p>
                                    {{-- <p>www.example.com</p> --}}
                                </div>
                            </div> <!-- singel address -->
                        </li>
                    </ul>
                </div> <!-- contact address -->

            </div>
        </div> <!-- row -->
    </div> <!-- container -->

</section>
@endsection
