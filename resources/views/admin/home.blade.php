@extends('admin.dashboard')
@section('content')
<div class="main-content-inner mt-5">
    <div class="row">
        <!-- seo fact area start -->
        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-6 mb-3 mb-lg-0">
                    <div class="card">
                        <div class="seo-fact sbg3">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon">Impressions</div>
                                <canvas id="seolinechart3" height="60"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="seo-fact sbg4">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon">New students</div>
                                <canvas id="seolinechart4" height="60"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- seo fact area end -->
        <!-- Social Campain area start -->

        <!-- Social Campain area end -->
        <!-- Statistics area start -->
        <div class="col-lg-8 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Student Rate</h4>
                    <div id="user-statistics"></div>
                </div>
            </div>
        </div>
        <!-- Statistics area end -->
        <!-- Advertising area start -->
        <div class="col-lg-4 mt-5">
            <div class="card h-full">
                <div class="card-body">
                    <h4 class="header-title">Advertising In Social</h4>
                    <canvas id="seolinechart8" height="233"></canvas>
                </div>
            </div>
        </div>
        <!-- Advertising area end -->
        <!-- sales area start -->

        <!-- testimonial area end -->
    </div>
</div>
@endsection
