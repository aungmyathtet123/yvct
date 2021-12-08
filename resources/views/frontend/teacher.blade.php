@extends('layouts.app2')
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url({{ asset('frontend/images/page-banner-4.jpg') }})">
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
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== TEACHERS PART START ======-->

<section id="teachers-page" class="pt-90 pb-120 gray-bg">
    <div class="container">
       <div class="row">
        @foreach ($articles as $key =>$article)
        @if($article->type->name=="teachers")
        <div class="col-lg-3 col-sm-6">
            <div class="singel-teachers mt-30 text-center">
                 <div class="image">
                     <img src="{{ asset('images/'.$article->image) }}" alt="Teachers">
                 </div>
                 <div class="cont">
                     <a href="#"><h6>{{ $article->title }}</h6></a>
                     <span>{{ $article->description }}</span>
                 </div>
             </div>
        </div>
        @endif
        @endforeach


       </div> <!-- row -->

    </div>
</section>
@endsection
