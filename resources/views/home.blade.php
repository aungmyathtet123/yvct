@extends('layouts.app2')
@section('content')
<section id="slider-part" class="slider-active">
    @foreach ($sliders as $slider )
        @if($slider->order_no==1)
        <div class="single-slider1 bg_cover pt-150" style="background-image: url({{ asset('images/gallery/'.$slider->image) }})" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s"></h1>
                            <p data-animation="fadeInUp" data-delay="1.3s"></p>

                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        @else
        <div class="single-slider bg_cover pt-150" style="background-image: url({{ asset('images/gallery/'.$slider->image) }})" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Yangon Vocational College Of Technology</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">"နည်းပညာ၀င်ငွေရှာ YVCT ကိုလာခဲ့ပါ"</p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        @endif
    @endforeach
</section>
<section id="category-part">
    <div class="container">
        <div class="category pt-10 pb-50">
            <div class="row">
                <div class="col-lg-4">
                    <div class="category-text pt-40">
                        <h2>YVCT in learn everything</h2>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-8 offset-2">
                    <div class="row category-slied mt-40">
                        <div class="col-lg-4">
                            <a href="#">
                                <span class="singel-category text-center color-1">
                                    <span class="icon">
                                        <img src="{{ asset('frontend/images/all-icon/ctg-1.png') }}" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Language</span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#">
                                <span class="singel-category text-center color-2">
                                    <span class="icon">
                                        <img src="{{ asset('frontend/images/all-icon/ctg-2.png') }}" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Business</span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#">
                                <span class="singel-category text-center color-3">
                                    <span class="icon">
                                        <img src="{{ asset('frontend/images/all-icon/ctg-3.png') }}" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Literature</span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#">
                                <span class="singel-category text-center color-1">
                                    <span class="icon">
                                        <img src="{{ asset('frontend/images/all-icon/ctg-1.png') }}" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Language</span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#">
                                <span class="singel-category text-center color-2">
                                    <span class="icon">
                                        <img src="{{ asset('frontend/images/all-icon/ctg-2.png') }}" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Business</span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#">
                                <span class="singel-category text-center color-3">
                                    <span class="icon">
                                        <img src="{{ asset('frontend/images/all-icon/ctg-3.png') }}" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Literature</span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about-part" class="pt-200">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h5>About us</h5>
                    @foreach ($abouts as $about )
                    <h2>{{ $about->title }} </h2>
                </div>
                <div class="about-cont">
                    <p>
                       {{ $about->description }}
                    </p>
                    <a href="{{ route('frontend.about') }}" class="main-btn mt-55">Learn More</a>
                </div>

            </div> <!-- about cont -->

        </div> <!-- row -->
    </div> <!-- container -->
    <div class="about-bg">
        <img src="{{ asset('images/about/'.$about->image) }}" alt="About">
    </div>
    @endforeach
</section>
<section id="course-part" class="pt-115 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-45">
                    <h5>Our Students</h5>
                    {{-- <h2>Featured courses </h2> --}}
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row course-slied mt-30">
            @foreach ($articles as $key =>$article)
            @if($article->type->name=="students")
            <div class="col-lg-4">
                <div class="singel-course">
                    <div class="thum">
                        <div class="image">
                            <img src="{{asset( 'images/'.$article->image ) }}" alt="Course">
                        </div>

                    </div>
                    <div class="cont">
                       <h4 class="text-center">{{ $article->title }}</h4>

                    </div>
                </div> <!-- singel course -->
            </div>
            @endif
            @endforeach


        </div> <!-- course slied -->
    </div> <!-- container -->
</section>
<section id="teachers-part" class="pt-70 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h5>Our Teachers</h5>
                    {{-- <h2>Meet Our teachers</h2> --}}
                </div> <!-- section title -->
                <div class="teachers-cont">
                    <?php $count = 0; ?>
                        @foreach ($articles as $key =>$article)
                        @if($article->type->name=="teachers")
                        <?php if($count == 1) break; ?>
                    <p>{{ $article->type->description }}</p>
                    <?php $count++; ?>
                    @endif
                    @endforeach
                    <a href="{{ route('frontend.teacher') }}" class="main-btn mt-55">See More</a>
                </div> <!-- teachers cont -->
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="teachers mt-20">
                    <div class="row">
                        <?php $count = 0; ?>
                        @foreach ($articles as $key =>$article)
                        @if($article->type->name=="teachers")
                        <?php if($count == 2) break; ?>
                        <div class="col-sm-6">
                            <div class="singel-teachers mt-30 text-center">
                                <div class="image">
                                    <img src="{{asset( 'images/'.$article->image ) }}" alt="Teachers">
                                </div>
                                <div class="cont">
                                    <a href=""><h6>{{ $article->title }}</h6></a>
                                    <span>{{ $article->description }}</span>
                                </div>
                            </div> <!-- singel teachers -->
                        </div>
                        <?php $count++; ?>
                        @endif
                        @endforeach


                        </div>
                    </div> <!-- row -->
                </div> <!-- teachers -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<section id="publication-part" class="pt-115 pb-120 gray-bg">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6 col-md-8 col-sm-7">
                <div class="section-title pb-60">
                    <h5>Our Images</h5>
                    <h2>Images Store </h2>
                </div> <!-- section title -->
            </div>
            <div class="col-lg-6 col-md-4 col-sm-5">
                <div class="products-btn text-right pb-60">
                    <a href="{{ route('frontend.image') }}" class="main-btn">All Images</a>
                </div> <!-- products btn -->
            </div>
        </div> <!-- row -->
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


        </div> <!-- row -->
    </div> <!-- container -->
</section>
<section id="news-part" class="pt-115 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-50">
                    <h5>Our News</h5>
                    <h2>From the news</h2>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <?php $count = 0; ?>
            @foreach ($articles as $key =>$article)
            @if($article->type->name=="news")
            <?php if($count == 1) break; ?>
            <div class="col-lg-6">
                <div class="singel-news mt-30">
                    <div class="news-thum pb-25">
                        <img src="{{asset( 'images/'.$article->image ) }}" alt="News">
                    </div>
                    <div class="news-cont">
                        <p>{{ $article->type->description }}</p>
                    </div>
                </div> <!-- singel news -->
            </div>
            <?php $count++; ?>
            @endif
            @endforeach


            <div class="col-lg-6">
                <?php $count = 0; ?>
            @foreach ($articles as $key =>$article)
            @if($article->type->name=="news")
            <?php if($count == 3) break; ?>
                <div class="singel-news news-list">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="news-thum mt-30">
                                <img src="{{asset( 'images/'.$article->image ) }}" alt="News">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="news-cont mt-30">
                              <h3>{{ $article->title }}</h3>
                                <p>{{ $article->description }}</p>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- singel news -->
                <?php $count++; ?>
                @endif
                @endforeach

            </div>


        </div> <!-- row -->
    </div> <!-- container -->
</section>
@endsection


