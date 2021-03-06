@extends('layouts.clean')

@section('content')
<!-- slider-area start -->
<div class="slider-area">
    <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides"> 
            <img src="{{ asset('img/slider/slide1.jpg') }}" alt="" title="#slider-direction-1"  />
            <img src="{{ asset('img/slider/slide2.jpg') }}" alt="" title="#slider-direction-2"  />
            <img src="{{ asset('img/slider/slide3.jpg') }}" alt="" title="#slider-direction-3"  />
        </div>
        <!-- direction 1 -->
        <div id="slider-direction-1" class="t-cn slider-direction slider-one">
            <div class="container slider-space">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-content-1 text-center hidden-xs">
                            <div class="layer-1-1 wow fadeInDownBig" data-wow-duration="0.6s" data-wow-delay="0s">
                                <img src="{{ asset('img/slider/caption1_slider1.png') }}" alt="">
                            </div>
                            <div class="layer-1-2 wow slideInLeft" data-wow-duration="0.3s" data-wow-delay="0.6s">
                                <img src="{{ asset('img/slider/caption2_slider1.png') }}" alt="">
                            </div>
                            <div class="layer-1-3 wow slideInRight" data-wow-duration="0.3s" data-wow-delay="0.3s">
                                <img src="{{ asset('img/slider/caption3_slider1.png') }}" alt="">
                            </div>
                            <div class="layer-1-4 wow bounceInUp" data-wow-duration="0.6s" data-wow-delay="1.0s">
                                <a class="stat" href="#"><img src="{{ asset('img/slider/caption4_slider1.png') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- direction 2 -->
        <div id="slider-direction-2" class="slider-direction slider-two">
            <div class="container slider-space">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-content-2 hidden-xs">
                            <div class="layer-2-1 wow fadeInDown" data-wow-duration="0.3s" data-wow-delay="0s">
                                <img src="{{ asset('img/slider/caption1_slider2.png') }}" alt="">
                            </div>
                            <div class="layer-2-2 wow flipInX" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <img src="{{ asset('img/slider/caption2_slider2.png') }}" alt="">
                            </div>
                            <div class="layer-2-3 wow bounceInUp" data-wow-duration="0.6s" data-wow-delay="1.1s">
                               <a class="stat" href="#"><img src="{{ asset('img/slider/caption4_slider1.png') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- direction 3 -->
        <div id="slider-direction-3" class="slider-direction slider-three">
            <div class="container slider-space">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-content-3 text-right hidden-xs">
                            <div class="layer-3-1 wow fadeInLeftBig" data-wow-duration="0.7s" data-wow-delay="0s">
                                <img src="{{ asset('img/slider/caption1_slider3.png') }}" alt="">
                            </div>
                            <div class="layer-3-2 wow bounceInRight" data-wow-duration="0.2s" data-wow-delay="0.7s">
                                <img src="{{ asset('img/slider/caption2_slider3.png') }}" alt="">
                            </div>
                            <div class="layer-3-3 wow bounceInUp" data-wow-duration="0.6s" data-wow-delay="0.9s">
                                <a class="stat" href="#"><img src="{{ asset('img/slider/caption4_slider1.png') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider-area end -->
<!-- urgent-cause-area start -->
<section class="urgent-cause-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="section-title-white text-center">Urgent cause</h2>
                <div class="urgent-cause-img img-hvr-effect">
                    <a class="venobox" data-gall="myGallery" href="{{ asset('img/img_urgent.jpg') }}"><img src="{{ asset('img/img_urgent.jpg') }}" alt="image alt"/></a>
                </div>
                <div class="urgent-cause-prgrs-bar">
                    <div class="progress">
                      <div class="progress-bar wow fadeInLeft" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;" data-wow-duration="1.5s" data-wow-delay="1.5s">
                        <span>70%</span>
                      </div>
                    </div>
                    <div class="prgrs-collected-amnt">
                        <span class="collected-txt">Collected:</span>
                        <span class="collected-amnt">$14,080.00</span>
                    </div>
                    <div class="prgrs-goal-amnt pull-right">
                        <span class="goal-txt">Goal:</span>
                        <span class="goal-amnt">$20,000.00</span>
                    </div>  
                </div>
                <div class="actions-speaks-area text-center">
                    <h3><a href="#">Actions speak louder than words!</a></h3>
                    <p>Necessities local solutions cause, hack; human rights treatment Action Against</p>
                    <div class="btn-dnt">
                        <a href="#">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- urgent-cause-area end -->
<!-- who-are-we-area -->
<section class="who-are-we-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="who-are-we-txt">
                    <h2 class="section-title-black"><strong>Who are we?</strong></h2>
                    <p>We are Wounded Bird Human Health Services. We Establish Sustainable Burn and Wound Care Facilities and Services for underserved Populations Worldwide.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- who-are-we-area end -->
<!-- who-are-we-img-area start -->
<div class="who-are-we-img-area"></div>
<!-- who-are-we-img-area end -->
<!-- cause-list-area start -->
<section class="cause-list-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="section-title-white text-center">Cause list</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-cause-list">
                    <div class="single-cause-img img-hvr-effect">
                        <a class="venobox" data-gall="myGallery" href="{{ asset('img/pr1.jpg') }}"><img src="{{ asset('img/logo.png') }}" alt="image alt"/></a>
                    </div>
                    <div class="cause-lists-desc">
                        <div class="cause-prgrs-br">
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                    <span>90%</span>
                                </div>
                            </div>
                            <div class="prgrs-collected-amnt">
                                <span class="collected-txt">Collected:</span>
                                <span class="collected-amnt">$80,000.00</span>
                            </div>
                            <div class="prgrs-goal-amnt pull-right">
                                <span class="goal-txt">Goal:</span>
                                <span class="goal-amnt">$89,000.00</span>
                            </div>
                        </div>
                        <div class="cause-list-desig text-center">
                            <div class="cause-desig-title">
                                <h3><a href="#">Domestic Projects</a></h3>
                            </div>
                            <div class="cause-desig-title-desc">
                                <p>Necessities local solutions cause, hack; human rights treatment Action Against Hunger generosity UNICEF change movements</p>
                            </div>
                            <div class="cause-dnt">
                                <a href="#">Donate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-cause-list">
                    <div class="single-cause-img img-hvr-effect">
                        <a class="venobox" data-gall="myGallery" href="{{ asset('img/pr2.jpg') }}"><img src="{{ asset('img/logo.png') }}" alt="image alt"/></a>
                    </div>
                    <div class="cause-lists-desc">
                        <div class="cause-prgrs-br">
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                    <span>75%</span>
                                </div>
                            </div>
                            <div class="prgrs-collected-amnt">
                                <span class="collected-txt">Collected:</span>
                                <span class="collected-amnt">$60,000.00</span>
                            </div>
                            <div class="prgrs-goal-amnt pull-right">
                                <span class="goal-txt">Goal:</span>
                                <span class="goal-amnt">$80,000.00</span>
                            </div>
                        </div>
                        <div class="cause-list-desig text-center">
                            <div class="cause-desig-title">
                                <h3><a href="#">International Efforts</a></h3>
                            </div>
                            <div class="cause-desig-title-desc">
                                <p>Necessities local solutions cause, hack; human rights treatment Action Against Hunger generosity UNICEF change movements</p>
                            </div>
                            <div class="cause-dnt">
                                <a href="#">Donate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-cause-list">
                    <div class="single-cause-img img-hvr-effect">
                        <a class="venobox" data-gall="myGallery" href="{{ asset('img/pr3.jpg') }}"><img src="{{ asset('img/logo.png') }}" alt="image alt"/></a>
                    </div>
                    <div class="cause-lists-desc">
                        <div class="cause-prgrs-br">
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                    <span>12%</span>
                                </div>
                            </div>
                            <div class="prgrs-collected-amnt">
                                <span class="collected-txt">Collected:</span>
                                <span class="collected-amnt">$6,000.00</span>
                            </div>
                            <div class="prgrs-goal-amnt pull-right">
                                <span class="goal-txt">Goal:</span>
                                <span class="goal-amnt">$50,000.00</span>
                            </div>
                        </div>
                        <div class="cause-list-desig text-center">
                            <div class="cause-desig-title">
                                <h3><a href="#">Community Involvement</a></h3>
                            </div>
                            <div class="cause-desig-title-desc">
                                <p>Necessities local solutions cause, hack; human rights treatment Action Against Hunger generosity UNICEF change movements</p>
                            </div>
                            <div class="cause-dnt">
                                <a href="#">Donate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cause-list-area end -->
<!-- search-for-cause-area start -->
<section class="search-for-cause-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-3">
                <div class="cause-br">
                    <div class="cause-icons">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9 cpl">
                <div class="cause-srch-txt-input">
                    <h4>Search for causes</h4>
                    <input type="text" placeholder="Keywords">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
                <div class="cause-select-opt">
                    <label class="wd_label_cause">
                        <select class="wd_search_cause" name="term">
                            <option value="">All Categories</option>
                            <option value="africa">Africa</option>
                            <option value="cause-slider">Cause-slider</option>
                            <option value="food">Food</option>
                            <option value="middle-east">Middle East</option>
                            <option value="cause-syria">Syria</option>
                            <option value="urgent-cause">Urgent cause</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5">
                <div class="cause-search-btns">
                    <input type="submit" value="search">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- search-for-cause-area end -->
<!-- charity-shop-area start -->
<section class="charity-shop-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="section-title-white text-center">Charity Shop</h2>
            </div>
        </div>
        <div class="row csa-mt">
            <div class="charity-shop-carousel indicator-style">
                <div class="col-lg-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('img/webshop/webshop-product1-270-400.jpg') }}" alt=""></a>
                            <div class="pro-label">
                                <span class="product_label">New</span>
                            </div>
                            <div class="product-actions">
                                <div class="list-add-to-cart">
                                    <a href="#">Select options</a>
                                </div>
                                <div class="add-to-links">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-desc text-center">
                            <h3><a href="#">Med-kit (Small)</a></h3>
                            <div class="product-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <span class="product-price">
                                <span class="amount-one">$17.20</span>
                                -
                                <span class="amount-two">$18.20</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('img/webshop/webshop-product2-270-400.jpg') }}" alt=""></a>
                            <div class="pro-label">
                                <span class="product_label blue_label">16%</span>
                            </div>
                            <div class="product-actions">
                                <div class="list-add-to-cart">
                                    <button class="button">
                                        <span>Add to Cart</span>
                                    </button>
                                </div>
                                <div class="add-to-links">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-desc text-center">
                            <h3><a href="#">Med-kit (Medium)</a></h3>
                            <span class="product-price pro-mb">
                                <span class="amount-one amnt-one">$50.00</span>
                                <span class="amount-two amnt-two">$42.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('img/webshop/webshop-product3-270-400.jpg') }}" alt=""></a>
                            <div class="pro-label">
                                <span class="product_label blue_label">4%</span>
                            </div>
                            <div class="product-actions">
                                <div class="list-add-to-cart">
                                    <button class="button">
                                        <span>Buy product</span>
                                    </button>
                                </div>
                                <div class="add-to-links">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-desc text-center">
                            <h3><a href="#">Med-kit (Large)</a></h3>
                            <span class="product-price pro-mb">
                                <span class="amount-one amnt-one">$230.00</span>
                                <span class="amount-two amnt-two">$220.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('img/webshop/webshop-product4-270-400.jpg') }}" alt=""></a>
                            <div class="pro-label">
                                <span class="product_label">New</span>
                            </div>
                            <div class="product-actions">
                                <div class="list-add-to-cart">
                                    <a href="#">Select options</a>
                                </div>
                                <div class="add-to-links">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-desc text-center">
                            <h3><a href="#">Med-kit (Deluxe)</a></h3>
                            <span class="product-price pro-mb">
                                <span class="amount-one">$17.99</span>
                                -
                                <span class="amount-two">$18.55</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('img/webshop/webshop-product1-270-400.jpg') }}" alt=""></a>
                            <div class="pro-label">
                                <span class="product_label blue_label">20%</span>
                            </div>
                            <div class="product-actions">
                                <div class="list-add-to-cart">
                                    <button class="button">
                                        <span>Add to Cart</span>
                                    </button>
                                </div>
                                <div class="add-to-links">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-desc text-center">
                            <h3><a href="#">Med-kit (Small)</a></h3>
                            <span class="product-price pro-mb">
                                <span class="amount-one amnt-one">$100.00</span>
                                <span class="amount-two amnt-two">$80.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('img/webshop/webshop-product2-270-400.jpg') }}" alt=""></a>
                            <div class="pro-label">
                                <span class="product_label">New</span>
                            </div>
                            <div class="product-actions">
                                <div class="list-add-to-cart">
                                    <a href="#">View products</a>
                                </div>
                                <div class="add-to-links">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-desc text-center">
                            <h3><a href="#">Med-kit (Medium)</a></h3>
                            <span class="product-price pro-mb">
                                <span class="amount-one">$80.50</span>
                                -
                                <span class="amount-two">$120.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('img/webshop/webshop-product3-270-400.jpg') }}" alt=""></a>
                            <div class="pro-label">
                                <span class="product_label">New</span>
                            </div>
                            <div class="product-actions">
                                <div class="list-add-to-cart">
                                    <a href="#">Select options</a>
                                </div>
                                <div class="add-to-links">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-desc text-center">
                            <h3><a href="#">Med-kit (Large)</a></h3>
                            <span class="product-price pro-mb">
                                <span class="amount-one">$250.00</span>
                                -
                                <span class="amount-two">$260.00</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('img/webshop/webshop-product4-270-400.jpg') }}" alt=""></a>
                            <div class="pro-label">
                                <span class="product_label">New</span>
                            </div>
                            <div class="product-actions">
                                <div class="list-add-to-cart">
                                    <button class="button">
                                        <span>Buy product</span>
                                    </button>
                                </div>
                                <div class="add-to-links">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-desc text-center">
                            <h3><a href="#">Med-kit (Deluxe)</a></h3>
                            <div class="product-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                            </div>
                            <span class="product-price">
                                <span class="amount-one">$245.00</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- charity-shop-area end -->
<!-- Quickview-product-start -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <!-- modal-content-start-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product">
                        <!-- product-images -->
                        <div class="mdl-product-images">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <a class="venobox" data-gall="myGallery" href="{{ asset('img/products/x39.jpg') }}"><img src="{{ asset('img/products/x39.jpg') }}" alt=""></a>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <a class="venobox" data-gall="myGallery" href="{{ asset('img/products/h01.jpg') }}"><img alt="" src="{{ asset('img/products/h01.jpg') }}"></a>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="messages">
                                    <a class="venobox" data-gall="myGallery" href="{{ asset('img/products/h05.jpg') }}"><img alt="" src="{{ asset('img/products/h05.jpg') }}"></a>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="settings">
                                    <a class="venobox" data-gall="myGallery" href="{{ asset('img/products/h04.jpg') }}"><img alt="" src="{{ asset('img/products/h04.jpg') }}"></a>
                                </div>
                            </div>
                            <!-- Nav tabs -->
                            <ul class="mdl-tab" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><img src="{{ asset('img/products/x39-70x90.jpg') }}" alt=""></a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><img src="{{ asset('img/products/h01-70x90.jpg') }}" alt=""></a></li>
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><img src="{{ asset('img/products/h05-70x90.jpg') }}" alt=""></a></li>
                                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><img src="{{ asset('img/products/h04-70x90.jpg') }}" alt=""></a></li>
                            </ul>
                        </div>
                        <!-- product-images -->
                        <!-- product-info -->
                        <div class="mdl-product-info">
                            <div class="mdl-pro-descs text-center">
                                <h3><a href="#">Fusce aliquam variable ??? v1</a></h3>
                                <p class="mdl-sku">
                                    SKU:
                                    <span class="product_sku">W013</span>
                                </p>
                                <p class="availability">
                                    <span class="wd_availability">Availability: </span>
                                    <span class="stock">In stock</span>
                                </p>
                                <div class="mdl-short-description">
                                    <h6 class="short-description-title">Quick Overview</h6>
                                    <div class="std"> Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget sem auctor auctor eget vitae arcu.... </div>
                                </div>
                            </div>
                            <div class="mdl-price-size-clr">
                                <div class="product-rating text-center">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="prc-range-md text-center">
                                    <p class="price">
                                        <span class="amount">$17.20</span>
                                        -
                                        <span class="amount">$18.20</span>
                                    </p>
                                </div>
                                <div class="mdl-sz-clr">
                                    <label>size</label>
                                    <select class="slct1">
                                        <option value="">Choose an option</option>
                                        <option value="l">L</option>
                                        <option value="m">M</option>
                                        <option value="s">S</option>
                                        <option value="xl">XL</option>
                                        <option value="xxl">XXL</option>
                                    </select>
                                </div>
                                <div class="mdl-sz-clr">
                                    <label>color</label>
                                    <select class="slct2">
                                        <option value="">Choose an option</option>
                                        <option value="black">Black</option>
                                        <option value="blue">Blue</option>
                                        <option value="green">Green</option>
                                        <option value="pink">Pink</option>
                                        <option value="red">Red</option>
                                        <option value="yellow">Yellow</option>
                                        <option value="orange">Orange</option>
                                        <option value="purple">Purple</option>
                                        <option value="white-2">White</option>
                                    </select>
                                </div>
                                <div class="mdl-fav-icon">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- product-info -->
                    </div>
                    <!-- modal-product -->
                </div>
                <!-- modal-body -->
            </div>
            <!-- modal-content -->
        </div>
        <!-- modal-dialog -->
    </div>
    <!-- END Modal -->
</div>
<!-- End quickview product -->
<!-- how-can-help-us-area start -->
<section class="how-can-help-us-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="hw-can-hlp-txt">
                    <h2 class="section-title-black text-center">How can you help us?</h2>
                </div>
            </div>
        </div>
        <div class="row help-us-mt">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="single-help-us">
                    <div class="help-icon-circle">
                        <i class="fa fa-heartbeat"></i>
                    </div>
                    <div class="single-help-descs">
                        <h4>Donate</h4>
                        <p>Ford Foundation; vulnerable citizens; storytelling life-savingleverage inclusive mobilize. Jane Addams.</p>
                    </div>
                </div>
                <div class="single-help-us">
                    <div class="help-icon-circle">
                        <i class="fa fa-usd"></i>
                    </div>
                    <div class="single-help-descs">
                        <h4>Fundraise</h4>
                        <p>Small-scale farmers, inspire social change eq life-savingleverage inclusive mobilize. Jane Addams.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="single-help-us">
                    <div class="help-icon-circle">
                        <i class="fa fa-user-plus"></i>
                    </div>
                    <div class="single-help-descs">
                        <h4>Participate</h4>
                        <p>Forward-thinking gender equality urban resourceful social challenges human rights rural generosity.</p>
                    </div>
                </div>
                <div class="single-help-us">
                    <div class="help-icon-circle">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <div class="single-help-descs">
                        <h4>Contribute</h4>
                        <p>Vulnerable citizens; storytelling Small-scale farmers life-savingleverage inclusive mobilize. Jane Addams.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- how-can-help-us-area end -->
<!-- child-banner-area start -->
<section class="child-banner-area">
    <div class="single-child-banner">
        <div class="single-child-bnr-img">
            <a class="venobox" data-gall="myGallery" href="{{ asset('img/showcase/showcase1.jpg') }}"><img src="{{ asset('img/showcase/showcase1.jpg') }}" alt="image alt"/></a>
        </div>
        <div class="single-child-bnr-descs">
            <h2><a href="#">Braid slipper dress dungaree</a></h2>
            <span>Accessories, Dresses, Shoes</span>
        </div>
    </div>
    <div class="single-child-banner">
        <div class="single-child-bnr-img">
            <a class="venobox" data-gall="myGallery" href="{{ asset('img/showcase/showcase2.jpg') }}"><img src="{{ asset('img/showcase/showcase2.jpg') }}" alt="image alt"/></a>
        </div>
        <div class="single-child-bnr-descs">
            <h2><a href="#">NTeger scelerisque vel congue</a></h2>
            <span>Dresses, Jeans, Sweaters</span>
        </div>
    </div>
    <div class="single-child-banner">
        <div class="single-child-bnr-img">
            <a class="venobox" data-gall="myGallery" href="{{ asset('img/showcase/showcase3.jpg') }}"><img src="{{ asset('img/showcase/showcase3.jpg') }}" alt="image alt"/></a>
        </div>
        <div class="single-child-bnr-descs">
            <h2><a href="#">Braid slipper dress dungaree </a></h2>
            <span>Accessories, Dresses</span>
        </div>
    </div>
    <div class="single-child-banner">
        <div class="single-child-bnr-img">
            <a class="venobox" data-gall="myGallery" href="{{ asset('img/showcase/showcase4.jpg') }}"><img src="{{ asset('img/showcase/showcase4.jpg') }}" alt="image alt"/></a>
        </div>
        <div class="single-child-bnr-descs">
            <h2><a href="#">Givenchy knot ponytail razor</a></h2>
            <span>Accessories, Dresses, Jeans, Shoes, Sweaters</span>
        </div>
    </div>
    <div class="single-child-banner">
        <div class="single-child-bnr-img">
            <a class="venobox" data-gall="myGallery" href="{{ asset('img/showcase/showcase5.jpg') }}"><img src="{{ asset('img/showcase/showcase5.jpg') }}" alt="image alt"/></a>
        </div>
        <div class="single-child-bnr-descs">
            <h2><a href="#">Givenchy knot ponytail razor</a></h2>
            <span>Accessories, Jeans</span>
        </div>
    </div>
    <div class="single-child-banner">
        <div class="single-child-bnr-img">
            <a class="venobox" data-gall="myGallery" href="{{ asset('img/showcase/showcase6.jpg') }}"><img src="{{ asset('img/showcase/showcase6.jpg') }}" alt="image alt"/></a>
        </div>
        <div class="single-child-bnr-descs">
            <h2><a href="#">NTeger Scelerisque Vel congue</a></h2>
            <span>Dresses, Shoes</span>
        </div>
    </div>
</section>
<!-- child-banner-area end -->
<!-- newsletter-area start -->
<section class="newsletter-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-3">
                <div class="cause-br news-br">
                    <div class="cause-icons cause-icons-mtt">
                        <i class="fa fa-paper-plane-o"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-9">
                <div class="sbscrb-nwsltr-txt">
                    <h2>Subscribe to newlletter</h2>
                    <p>Suspendisse et tortor nec sem imperdiet auctor ultrices at nisl</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="newslttr-email">
                    <input type="text" placeholder="Put your email address here">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="cause-search-btns newslttr-btn">
                    <input type="submit" value="Subscribe">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- newsletter-area end -->
<!-- recent-news-area start -->
<section class="recent-news-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="section-title-black text-center">Recent news</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-recent-news">
                    <div class="recent-news-img img-hvr-effect">
                        <a class="venobox" data-gall="myGallery" href="{{ asset('img/recent-news/recent-news1.jpg') }}"><img src="{{ asset('img/recent-news/recent-news1.jpg') }}" alt="image alt"/></a>
                        <div class="extra-date">
                            <span class="wd-date">22</span>
                            <span class="wd-month">August</span>
                        </div>
                    </div>
                    <div class="recent-news-desc text-center">
                        <h4>
                            <a href="#">Curabitur euismod iaculis orci quis</a>
                        </h4>
                        <p>Navy blue spearmint Herm??s white shirt envelope clutch shoe C??line bandeau. Paris texture crop sports luxe strong.</p>
                        <div class="recent-admin-comments">
                            <div class="entry-author">
                                By
                                <span>admin</span>
                            </div>
                            <div class="comments-count">5 Comments</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-recent-news">
                    <div class="recent-news-img img-hvr-effect">
                        <a class="venobox" data-gall="myGallery" href="{{ asset('img/recent-news/recent-news2.jpg') }}"><img src="{{ asset('img/recent-news/recent-news2.jpg') }}" alt="image alt"/></a>
                        <div class="extra-date">
                            <span class="wd-date">22</span>
                            <span class="wd-month">August</span>
                        </div>
                    </div>
                    <div class="recent-news-desc text-center">
                        <h4>
                            <a href="#">Braid slipper dress dungaree silhouette</a>
                        </h4>
                        <p>Lilac chunky sole bandeau street style leather tote. Center part washed out sports luxe tucked t-shirt minimal tee sneaker black</p>
                        <div class="recent-admin-comments">
                            <div class="entry-author">
                                By
                                <span>admin</span>
                            </div>
                            <div class="comments-count">5 Comments</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-recent-news">
                    <div class="recent-news-img img-hvr-effect">
                        <a class="venobox" data-gall="myGallery" href="{{ asset('img/recent-news/recent-news3.jpg') }}"><img src="{{ asset('img/recent-news/recent-news3.jpg') }}" alt="image alt"/></a>
                        <div class="extra-date">
                            <span class="wd-date">22</span>
                            <span class="wd-month">August</span>
                        </div>
                    </div>
                    <div class="recent-news-desc text-center">
                        <h4>
                            <a href="#">Indigo skirt skirt braid vintage</a>
                        </h4>
                        <p>Lilac chunky sole bandeau street style leather tote. Center part washed out sports luxe tucked t-shirt minimal tee sneaker black</p>
                        <div class="recent-admin-comments">
                            <div class="entry-author">
                                By
                                <span>admin</span>
                            </div>
                            <div class="comments-count">5 Comments</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- recent-news-area end -->
<!-- testimonial-area start -->
<section class="testimonial-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="section-title-white text-center">Testimonial</h2>
            </div>
        </div>
        <div class="row testimonial-mt">
            <div class="testimonial-carousel indicator-style">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="single-testimonial">
                                <div class="testimonial-img">
                                    <a href="#"><img src="{{ asset('img/testimonial/testimonial1.png') }}" alt=""></a>
                                </div>
                                <div class="testimonial-desc">
                                    <h4>Dr Giao</h4>
                                    <div class="post-info-meta">
                                        <div class="entry-date">August 21, 2014
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        Tucked t-shirt clutch dungaree C??line vintage tortoise-shell sunglasses seam So-Cal cashmere. Lanvin indigo print bomber???
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="single-testimonial">
                                <div class="testimonial-img">
                                    <a href="#"><img src="{{ asset('img/testimonial/testimonial2.png') }}" alt=""></a>
                                </div>
                                <div class="testimonial-desc">
                                    <h4>Dr Hung</h4>
                                    <div class="post-info-meta">
                                        <div class="entry-date">August 21, 2014
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        Tucked t-shirt clutch dungaree C??line vintage tortoise-shell sunglasses seam So-Cal cashmere. Lanvin indigo print bomber???
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="single-testimonial">
                                <div class="testimonial-img">
                                    <a href="#"><img src="{{ asset('img/testimonial/testimonial3.png') }}" alt=""></a>
                                </div>
                                <div class="testimonial-desc">
                                    <h4>Dr Hung</h4>
                                    <div class="post-info-meta">
                                        <div class="entry-date">August 21, 2014
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        Tucked t-shirt clutch dungaree C??line vintage tortoise-shell sunglasses seam So-Cal cashmere. Lanvin indigo print bomber???
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="single-testimonial">
                                <div class="testimonial-img">
                                    <a href="#"><img src="{{ asset('img/testimonial/testimonial4.png') }}" alt=""></a>
                                </div>
                                <div class="testimonial-desc">
                                    <h4>Mr. Duy</h4>
                                    <div class="post-info-meta">
                                        <div class="entry-date">August 21, 2014
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        Tucked t-shirt clutch dungaree C??line vintage tortoise-shell sunglasses seam So-Cal cashmere. Lanvin indigo print bomber???
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <div class="single-testimonial">
                                <div class="testimonial-img">
                                    <a href="#"><img src="{{ asset('img/testimonial/testimonial5.png') }}" alt=""></a>
                                </div>
                                <div class="testimonial-desc">
                                    <h4>Mr. Duy</h4>
                                    <div class="post-info-meta">
                                        <div class="entry-date">
                                            August 21, 2014
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        Tucked t-shirt clutch dungaree C??line vintage tortoise-shell sunglasses seam So-Cal cashmere. Lanvin indigo print bomber???
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <div class="single-testimonial">
                                <div class="testimonial-img">
                                    <a href="#"><img src="{{ asset('img/testimonial/testimonial6.png') }}" alt=""></a>
                                </div>
                                <div class="testimonial-desc">
                                    <h4>Dr Giao</h4>
                                    <div class="post-info-meta">
                                        <div class="entry-date">
                                            August 21, 2014
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        Tucked t-shirt clutch dungaree C??line vintage tortoise-shell sunglasses seam So-Cal cashmere. Lanvin indigo print bomber???
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-area end -->
<!-- contact-us-area start -->
<section class="contact-us-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="section-title-white text-center">Contact us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="contact-addrss">
                    <ul>
                        <li>
                            <div class="adrs-icon">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="my-adrs-ic">
                                <h3>Address</h3>
                                <p>Wounded Bird Human Health Services<br/>#123 Prosperity Blvd<br/>Suite A<br/>Las Vegas, Nevada. 89100</p>
                            </div>
                        </li>
                        <li>
                            <div class="adrs-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="my-adrs-ic">
                                <h3>Phone Number</h3>
                                <p>702 468 0087</p>
                            </div>
                        </li>
                        <li>
                            <div class="adrs-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="my-adrs-ic">
                                <h3>Email</h3>
                                <p>info@woundedbird.org</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="cntct-frm">
                    <form action="#">
                        <input type="text" placeholder="Name:">
                        <input type="text" placeholder="Email:">
                        <input type="text" placeholder="Subject:">
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="cntct-form-txtarea">
                    <textarea cols="40" rows="10" placeholder="Message:"></textarea>
                    <input type="submit" value="Send">
                </div>
            </div>
        </div>
        <div class="volunteer-area">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="vounteer-img">
                        <img src="{{ asset('img/line_footer.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="volunteer-descs text-center">
                        <h3><strong>We Need You!</strong></h3>
                        <h2><strong>Become Volunteer</strong></h2>
                        <p>Plumpy???nut, disruptor legal aid; respect, best practices; economic independence crisis
                        <br>
                        situation focus on impact institutions</p>
                        <a href="#" class="button button3">Apply now</a>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</section>
<!-- contact-us-area end -->
@endsection
