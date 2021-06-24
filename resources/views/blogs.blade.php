@extends('layouts.clean')

@section('content')
<!-- big-banner-area start -->
<div class="big-banner-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="big-banner-descs">
                    <h1 class="big-b-title">Blog Gird 3 Columns</h1>
                    <a href="{{ route('landing') }}">Home page</a>
                    <span>Blog Gird 3 Columns</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- big-banner-area end -->
<!-- blog-area start -->
<section class="blog-area single-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-recent-news">
                    <div class="recent-news-img img-hvr-effect">
                        <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x21-420x300.jpg') }}"><img src="{{ asset('img/child-img/x21-420x300.jpg') }}" alt="image alt"/></a>
                        <div class="extra-date">
                            <span class="wd-date">22</span>
                            <span class="wd-month">August</span>
                        </div>
                    </div>
                    <div class="recent-news-desc">
                        <h4>
                            <a href="#">Braid slipper dress dungaree</a>
                        </h4>
                        <div class="recent-admin-comments">
                            <div class="entry-date">
                                August 22, 2014
                            </div>
                            <div class="comments-count">5 Comments</div>
                        </div>
                        <p>Lilac chunky sole bandeau street style leather tote. Center part washed out sports luxe tucked t-shirt minimal tee sneaker black holographic razor pleats. Round sunglasses collarless playsuit cami slip dress white gold collar statement dove</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-recent-news">
                    <div class="recent-news-img img-hvr-effect">
                        <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x17-420x300.jpg') }}"><img src="{{ asset('img/child-img/x17-420x300.jpg') }}" alt="image alt"/></a>
                        <div class="extra-date">
                            <span class="wd-date">22</span>
                            <span class="wd-month">August</span>
                        </div>
                    </div>
                    <div class="recent-news-desc">
                        <h4>
                            <a href="#">Vivamus viverra malesuada</a>
                        </h4>
                        <div class="recent-admin-comments">
                            <div class="entry-date">
                                August 22, 2014
                            </div>
                            <div class="comments-count">0 Comments</div>
                        </div>
                        <p>Navy blue spearmint Hermès white shirt envelope clutch shoe Céline bandeau. Paris texture crop sports luxe strong eyebrows. Maison Martin Margiela round sunglasses floral chunky sole Jil Sander Vasari bomber Furla sneaker loafer.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-recent-news">
                    <div class="recent-news-img img-hvr-effect">
                        <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x23-420x300.jpg') }}"><img src="{{ asset('img/child-img/x23-420x300.jpg') }}" alt="image alt"/></a>
                        <div class="extra-date">
                            <span class="wd-date">22</span>
                            <span class="wd-month">August</span>
                        </div>
                    </div>
                    <div class="recent-news-desc">
                        <h4>
                            <a href="#">Curabitur euismod iaculis</a>
                        </h4>
                        <div class="recent-admin-comments">
                            <div class="entry-date">
                                August 22, 2014
                            </div>
                            <div class="comments-count">5 Comments</div>
                        </div>
                        <p>Navy blue spearmint Hermès white shirt envelope clutch shoe Céline bandeau. Paris texture crop sports luxe strong eyebrows. Maison Martin Margiela round sunglasses floral chunky sole Jil Sander Vasari bomber Furla sneaker loafer.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-recent-news">
                    <div class="recent-news-img img-hvr-effect">
                        <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x18-420x300.jpg') }}"><img src="{{ asset('img/child-img/x18-420x300.jpg') }}" alt="image alt"/></a>
                        <div class="extra-date">
                            <span class="wd-date">22</span>
                            <span class="wd-month">August</span>
                        </div>
                    </div>
                    <div class="recent-news-desc">
                        <h4>
                            <a href="#">Indigo skirt skirt</a>
                        </h4>
                        <div class="recent-admin-comments">
                            <div class="entry-date">
                                August 22, 2014
                            </div>
                            <div class="comments-count">0 Comments</div>
                        </div>
                        <p>Lilac chunky sole bandeau street style leather tote. Center part washed out sports luxe tucked t-shirt minimal tee sneaker black holographic razor pleats. Round sunglasses collarless playsuit cami slip dress white gold collar statement dove</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-recent-news">
                    <div class="recent-news-img img-hvr-effect">
                        <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x15-420x300.jpg') }}"><img src="{{ asset('img/child-img/x15-420x300.jpg') }}" alt="image alt"/></a>
                        <div class="extra-date">
                            <span class="wd-date">22</span>
                            <span class="wd-month">August</span>
                        </div>
                    </div>
                    <div class="recent-news-desc">
                        <h4>
                            <a href="#">Plaited leather flats</a>
                        </h4>
                        <div class="recent-admin-comments">
                            <div class="entry-date">
                                August 22, 2014
                            </div>
                            <div class="comments-count">0 Comments</div>
                        </div>
                        <p>Floral Maison Martin Margiela Furla cami seam texture Jil Sander Vasari sports luxe braid Prada Saffiano. Boots maxi tee playsuit slip dress flats chambray chunky sole vintage. Dress bomber spearmint dove grey strong eyebrows...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-recent-news">
                    <div class="recent-news-img img-hvr-effect">
                        <a class="venobox" data-gall="myGallery" href="{{ asset('img/child-img/x24-420x300.jpg') }}"><img src="{{ asset('img/child-img/x24-420x300.jpg') }}" alt="image alt"/></a>
                        <div class="extra-date">
                            <span class="wd-date">22</span>
                            <span class="wd-month">August</span>
                        </div>
                    </div>
                    <div class="recent-news-desc">
                        <h4>
                            <a href="#">Morbi et venenatis</a>
                        </h4>
                        <div class="recent-admin-comments">
                            <div class="entry-date">
                                August 22, 2014
                            </div>
                            <div class="comments-count">0 Comments</div>
                        </div>
                        <p>Maxi boots washed out tucked t-shirt sneaker cami. Chambray midi oversized sweatshirt Hermès relaxed Paris envelope clutch shoe leggings bandeau.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="blog-pg-nav text-center">
                    <span>1</span>
                    <a href="#">2</a>
                    <a href="#">Next »</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog-area end -->
@endsection
