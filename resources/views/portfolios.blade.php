@extends('layouts.clean')

@section('content')
<!-- big-banner-area start -->
<div class="big-banner-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="big-banner-descs">
                    <h1 class="big-b-title">Portfolio</h1>
                    <a href="{{ route('landing') }}">Home page</a>
                    <span>Portfolio</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- big-banner-area end -->
<!-- portfolio-area start -->
<div class="portfolio-area single-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-menu">
                    <ul>
                        <li class="filter active" data-filter="all">All</li>
                        <li class="filter" data-filter=".accessories">Accessories</li>
                        <li class="filter" data-filter=".dresses">Dresses</li>
                        <li class="filter" data-filter=".jeans">Jeans</li>
                        <li class="filter" data-filter=".shoes">Shoes</li>
                        <li class="filter" data-filter=".sweaters">Sweaters</li>
                    </ul>
                </div>
                <div id="portfolio-mixitup">
                    <div class="single-child-banner mix all accessories dresses shoes">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x21-480x357.jpg') }}"><img src="{{ asset('img/child-img/x21-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">Braid slipper dress dungaree</a></h2>
                            <span>Accessories, Dresses, Shoes</span>
                        </div>
                    </div>
                    <div class="single-child-banner mix all dresses jeans sweaters">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x2-480x357.jpg') }}"><img src="{{ asset('img/child-img/x2-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">NTeger scelerisque vel congue</a></h2>
                            <span>Dresses, Jeans, Sweaters</span>
                        </div>
                    </div>
                    <div class="single-child-banner mix all accessories dresses">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x3-480x357.jpg') }}"><img src="{{ asset('img/child-img/x3-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">Braid slipper dress dungaree </a></h2>
                            <span>Accessories, Dresses</span>
                        </div>
                    </div>
                    <div class="single-child-banner mix all accessories dresses jeans shoes sweaters">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x15-480x357.jpg') }}"><img src="{{ asset('img/child-img/x15-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">Givenchy knot ponytail razor</a></h2>
                            <span>Accessories, Dresses, Jeans, Shoes, Sweaters</span>
                        </div>
                    </div>
                    <div class="single-child-banner mix all accessories jeans">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x17-480x357.jpg') }}"><img src="{{ asset('img/child-img/x17-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">Givenchy knot ponytail razor</a></h2>
                            <span>Accessories, Jeans</span>
                        </div>
                    </div>
                    <div class="single-child-banner mix all dresses shoes">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x8-480x357.jpg') }}"><img src="{{ asset('img/child-img/x8-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">NTeger Scelerisque Vel congue</a></h2>
                            <span>Dresses, Shoes</span>
                        </div>
                    </div>
                    <div class="single-child-banner mix all jeans shoes sweaters">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x9-480x357.jpg') }}"><img src="{{ asset('img/child-img/x9-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">NTeger Scelerisque Vel congue</a></h2>
                            <span>Jeans, Shoes, Sweaters</span>
                        </div>
                    </div>
                    <div class="single-child-banner mix all accessories jeans sweaters">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x23-480x357.jpg') }}"><img src="{{ asset('img/child-img/x23-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">Braid slipper dress dungaree</a></h2>
                            <span>Accessories, Jeans, Sweaters</span>
                        </div>
                    </div>
                    <div class="single-child-banner mix all dresses shoes">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x18-480x357.jpg') }}"><img src="{{ asset('img/child-img/x18-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">Givenchy knot ponytail razor</a></h2>
                            <span>Dresses, Shoes</span>
                        </div>
                    </div>
                    <div class="single-child-banner mix all dresses jeans sweaters">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x12-480x357.jpg') }}"><img src="{{ asset('img/child-img/x12-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">NTeger Scelerisque vel congue</a></h2>
                            <span>Dresses, Jeans, Sweaters</span>
                        </div>
                    </div>
                    <div class="single-child-banner mix all accessories dresses jeans shoes sweaters">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x14-480x357.jpg') }}"><img src="{{ asset('img/child-img/x14-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">NTeger Scelerisque vel congue</a></h2>
                            <span>Accessories, Dresses, Jeans, Shoes, Sweaters</span>
                        </div>
                    </div>
                    <div class="single-child-banner mix all dresses jeans shoes">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x014-480x357.jpg') }}"><img src="{{ asset('img/child-img/x014-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">Braid slipper dress dungaree</a></h2>
                            <span>Dresses, Jeans, Shoes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- portfolio-area end -->
@endsection
