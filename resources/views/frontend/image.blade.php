@extends('layouts.app2')
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url({{ asset('frontend/images/page-banner-3.jpg') }})">
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

<!--====== EVENTS PART START ======-->

<section id="event-page" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            @foreach($galleries as $key => $gallery)
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="singel-publication mt-30">
                    <div class="image">
                        <img src="{{ asset('images/gallery/'.$gallery->image) }}" alt="Publication">
                        <div class="add-cart">
                            <ul>
                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach


        </div>

    </div> <!-- container -->
</section>
@endsection
