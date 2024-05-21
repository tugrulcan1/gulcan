
@extends('client.layouts.master')
@section('content')

<!-- Start Main Slider -->
<section class="main-slider style1">
    <div class="slider-box">
        <!-- Banner Carousel -->
        <div class="banner-carousel owl-theme owl-carousel">
            <!-- Slide -->
            <div class="slide">
                <div class="image-layer" style="background-image:url(assets/images/slides/slide-v1-1.jpg)"></div>
                <div class="slider-bg-box" style="background-image: url(assets/images/slides/slide-v1-1-bg1.jpg);"></div>
                <div class="slider-image"><img class="float-bob-y" src="assets/images/slides/slide-v1-1-image1.png" alt=""></div>
                <div class="round-box">
                    <h3>Limited<br> Time Offer</h3>
                    <h2>$15.50</h2>
                    <p>Per bottle</p>
                </div>
                <div class="auto-container">
                    <div class="content">
                        <div class="big-title">
                            <h2>Delivered Right<br> To Your Home &<br> Office Door.</h2>
                        </div>
                        <div class="text">
                            <p>Duty obligations of business will frequently occur pleasures<br> be repudiated and annoyances accepted.</p>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- Slide -->
           
        </div>
    </div>
</section>
<!-- End Main Slider -->








<!--Start Contact Style1 Area-->
<section class="contact-style1-area">
    <div class="contact-form-box1_bg" style="background-image: url(assets/images/resources/contact-form-box1_bg.jpg);"></div>
  
    <div class="gray-bg"></div>
    <div class="container">
        <div class="row">

            <div class="col-xl-6">
                <div class="contact-style1-content">
                    <div class="shape1" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="2000">
                        <img class="paroller-2" src="assets/images/shape/thm-shape-2.png" alt="">
                    </div>
                    <div class="sec-title">
                        <div class="sub-title">
                            <h5>Get In Touch</h5>
                        </div>
                        <h2>Love to assist <br>with your enquiry!</h2>
                        <div class="decor">
                            <img src="assets/images/shape/decor.png" alt="">
                        </div>
                    </div>
                    <div class="inner-content">
                        <div class="quick-contact-box">
                            <div class="icon">
                                <span class="icon-calling"></span>
                            </div>
                            <div class="title">
                                <h3>İletişime Geç</h3>
                                <h2><a href="tel:+50033333">{{$settings['phone']}}</a></h2>
                            </div>
                        </div>
                        <div class="text">
                            <p>{{$settings['adress']}}</p>
                        </div>
                     
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="contact-form-box1">
                    <div class="top-title">
                        <h2>Sipariş Hattı</h2>
                    </div>
                    <form id="contact-form" name="contact_form" class="default-form1" action="#" method="post">
                        <div class="input-box"> 
                            <input type="text" name="form_name" value="" placeholder="İşletme Adı" required="">
                            <div class="icon">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="input-box"> 
                            <input type="text" name="form_email" value="" placeholder="Telefon" required="">
                            <div class="icon">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                        </div> 
                        <div class="input-box">
                            <div class="select-box">
                                <div class="round-shape"></div>
                                <select class="wide">
                                   <option data-display="Sipariş">Sipariş</option>
                                   <option value="1">0.5 Litrelik Su</option>
                                   <option value="2">1 Litrelik Su</option>
                                   <option value="3">2 Litrelik Su</option>
                                   <option value="3">5 Litrelik Su</option>
                                   <option value="3">10 Litrelik Su</option>
                                   <option value="3">20 Litrelik Su</option>

                                </select>
                            </div>
                            <div class="input-box"> 
                            <input type="text" name="form_email" value="" placeholder="Adet (Koli)" required="">
                            <div class="icon">
                                <i class="fa fa-tint" aria-hidden="true"></i>
                            </div>
                        </div> 
                            <div class="icon">
                                <i class="fa fa-share-square" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="input-box">
                            <input type="text" name="form_address" value="" placeholder="Your Address">
                            <div class="icon">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                        </div>  
                        <div class="button-box">
                            <div class="left">
                                <div class="checked-box1">
                                    <input type="checkbox" name="skipper1" id="skipper" checked>
                                    <label for="skipper">Sipariş Ver   =></label>
                                </div>
                            </div>
                            <div class="right">
                                <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                    <span class="round"></span>
                                    <span class="txt">Continue</span>
                                </button> 
                            </div>
                        </div>  
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>
<!--End Contact Style1 Area-->





@endsection