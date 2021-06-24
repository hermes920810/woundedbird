@extends('layouts.clean')

@section('content')
<!-- big-banner-area start -->
<div class="big-banner-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="big-banner-descs">
                    <h1 class="big-b-title">Image Gallery</h1>
                    <a href="{{ route('landing') }}">Home page</a>
                    <span>Image Gallery</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- big-banner-area end -->
<!-- portfolio-area start -->
<div class="portfolio-area img-gallery-area single-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div id="img-gallery">
                    <div class="single-child-banner">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x3-480x357.jpg') }}"><img src="{{ asset('img/child-img/x3-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">Braid slipper dress dungaree </a></h2>
                            <span>Accessories, Dresses</span>
                        </div>
                    </div>
                    <div class="single-child-banner">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x15-480x357.jpg') }}"><img src="{{ asset('img/child-img/x15-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">Givenchy knot ponytail razor</a></h2>
                            <span>Accessories, Dresses, Jeans, Shoes, Sweaters</span>
                        </div>
                    </div>
                    <div class="single-child-banner">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x17-480x357.jpg') }}"><img src="{{ asset('img/child-img/x17-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">Givenchy knot ponytail razor</a></h2>
                            <span>Accessories, Jeans</span>
                        </div>
                    </div>
                    <div class="single-child-banner">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x21-480x357.jpg') }}"><img src="{{ asset('img/child-img/x21-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">Braid slipper dress dungaree</a></h2>
                            <span>Accessories, Dresses, Shoes</span>
                        </div>
                    </div>
                    <div class="single-child-banner">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x2-480x357.jpg') }}"><img src="{{ asset('img/child-img/x2-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">NTeger scelerisque vel congue</a></h2>
                            <span>Dresses, Jeans, Sweaters</span>
                        </div>
                    </div>
                    <div class="single-child-banner">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x8-480x357.jpg') }}"><img src="{{ asset('img/child-img/x8-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">NTeger Scelerisque Vel congue</a></h2>
                            <span>Dresses, Shoes</span>
                        </div>
                    </div>
                    <div class="single-child-banner">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x9-480x357.jpg') }}"><img src="{{ asset('img/child-img/x9-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">NTeger Scelerisque Vel congue</a></h2>
                            <span>Jeans, Shoes, Sweaters</span>
                        </div>
                    </div>
                    <div class="single-child-banner">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x18-480x357.jpg') }}"><img src="{{ asset('img/child-img/x18-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">Givenchy knot ponytail razor</a></h2>
                            <span>Dresses, Shoes</span>
                        </div>
                    </div>
                    <div class="single-child-banner">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x12-480x357.jpg') }}"><img src="{{ asset('img/child-img/x12-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">NTeger Scelerisque vel congue</a></h2>
                            <span>Dresses, Jeans, Sweaters</span>
                        </div>
                    </div>
                    <div class="single-child-banner">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x14-480x357.jpg') }}"><img src="{{ asset('img/child-img/x14-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">NTeger Scelerisque vel congue</a></h2>
                            <span>Accessories, Dresses, Jeans, Shoes, Sweaters</span>
                        </div>
                    </div>
                    <div class="single-child-banner">
                        <div class="single-child-bnr-img">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x23-480x357.jpg') }}"><img src="{{ asset('img/child-img/x23-480x357.jpg') }}" alt="image alt"/></a>
                        </div>
                        <div class="single-child-bnr-descs">
                            <h2><a href="#">Braid slipper dress dungaree</a></h2>
                            <span>Accessories, Jeans, Sweaters</span>
                        </div>
                    </div>
                    <div class="single-child-banner">
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
