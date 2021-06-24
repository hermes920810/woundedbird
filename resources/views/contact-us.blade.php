@extends('layouts.clean')

@section('content')
<!-- big-banner-area start -->
<div class="big-banner-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="big-banner-descs">
                    <h1 class="big-b-title">Contact Page</h1>
                    <a href="{{ route('landing') }}">Home page</a>
                    <span>Contact Page</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- big-banner-area end -->
<!-- contact-us-area start -->
<div class="contact-us-areas single-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="single-help-us">
                    <div class="help-icon-circle">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="single-help-descs">
                        <h4>Address</h4>
                        <p>123 Kingsland Rd. Bighouse London</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="single-help-us">
                    <div class="help-icon-circle">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="single-help-descs">
                        <h4>Phone Number</h4>
                        <p>1800 222 222</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="single-help-us">
                    <div class="help-icon-circle">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="single-help-descs">
                        <h4>Email</h4>
                        <p><a href="#">admin@bootexperts.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="single-help-us">
                    <div class="help-icon-circle">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div class="single-help-descs">
                        <h4>Website</h4>
                        <p><a href="#">www.charity.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ctmts">
            <form action="mail.php" method="post">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-form-details">
                        <input type="text" placeholder="Name:" name="name">
                        <input type="email" placeholder="Email:" name="email">
                        <input type="text" placeholder="Subject:" name="subject">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="cntct-txtarea">
                        <textarea cols="40" rows="10" placeholder="Message:" name="message"></textarea>
                        <input type="submit" value="Send">
                    </div>
                </div>
            </form>
        </div>
        <div class="row bfcfmt">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="be-first-comments">
                    <h4>be first to comment </h4>
                </div>
            </div>
        </div>
        <div class="row">
            <form action="#">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="be-first-cmmnt-form">
                        <span class="cmmnt-label">
                            Your Name
                            <b>*</b>
                        </span>
                        <p class="comment-form-author">
                            <input type="text" placeholder="Your Name">
                        </p>
                        <span class="cmmnt-label">
                            Your Email
                            <b>*</b>
                        </span>
                        <p class="comment-form-author">
                            <input type="email" placeholder="hello@example.com">
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="be-first-cmmnt-form">
                        <span class="cmmnt-label">
                            Message
                            <b>*</b>
                        </span>
                        <p class="comment-txtarea">
                            <textarea cols="45" rows="8"></textarea>
                            <input type="submit" value="SUBMIT">
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- contact-us-area end -->
@endsection
