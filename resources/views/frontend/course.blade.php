@extends('layouts.app2')
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url({{ asset('frontend/images/page-banner-2.jpg') }})">
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

<!--====== COURSES PART START ======-->

<section id="courses-part" class="pt-120 pb-120 gray-bg">
    <div class="container">
        <h4>Student Page</h4>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                <div class="row">
                    @foreach ($articles as $key =>$article)
                    @if($article->type->name=="students")
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-course mt-30">
                            <div class="thum">
                                <div class="image">
                                    <img src="{{ asset('images/'.$article->image) }}" alt="Course">
                                </div>

                            </div>
                            <div class="cont">

                                <h4 class="text-center">{{ $article->title }}</h4>
                            </div>
                        </div> <!-- singel course -->
                    </div>
                    @endif
                    @endforeach
                </div>

            </div>

        </div>

    </div> <!-- container -->
</section>
@endsection
