@extends('layouts.app2')
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url({{ asset('frontend/images/page-banner-1.jpg') }})">
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

<!--====== ABOUT PART START ======-->

<section id="about-page" class="pt-70 pb-110">
    <div class="container">
        <div class="row">
            @foreach($abouts as $key => $about)
            <div class="col-lg-8">
                <div class="section-title mt-50">
                    <h5>About us</h5>
                    <h2>{{ $about->title }} </h2>
                </div> <!-- section title -->
                <div class="about-cont">
                    <p>{{ $about->description }}</p>

                </div>
            </div> <!-- about cont -->
            <div class="col-lg-4">
                <div class="about-image mt-50">
                    <img src="{{ asset('frontend/images/about/about-2.jpg') }}" alt="About">
                </div>  <!-- about imag -->
            </div>
            @endforeach

        </div> <!-- row -->


    </div> <!-- container -->
</section>
@endsection
