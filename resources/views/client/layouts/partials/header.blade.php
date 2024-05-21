<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from st.ourhtmldemo.com/new/aguapure-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2024 18:36:36 GMT -->
<head>
	<meta charset="UTF-8">
	<title>Aguapure - Responsive HTML 5 Template</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/animate.css">  
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/aos.css">  
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/bootstrap.min.css">	
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/custom-animate.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/fancybox.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/flaticon.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/imp.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/jquery-ui.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/owl.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/rtl.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/scrollbar.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/icomoon.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/jquery.bootstrap-touchspin.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/nice-select.css">

    <!-- Module css -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/module-css/header-section.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/module-css/banner-section.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/module-css/about-section.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/module-css/blog-section.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/module-css/fact-counter-section.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/module-css/faq-section.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/module-css/contact-page.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/module-css/breadcrumb-section.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/module-css/team-section.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/module-css/partner-section.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/module-css/testimonial-section.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/module-css/services-section.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/module-css/footer-section.css">
   
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/style.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="assets/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/images/favicon/favicon-16x16.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="assets/js/html5shiv.js"></script>
    <![endif]-->
    
</head>

<body>

<div class="boxed_wrapper ltr">

<!-- Preloader -->
<div class="loader-wrap">
    <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
    <div class="layer layer-one"><span class="overlay"></span></div>
    <div class="layer layer-two"><span class="overlay"></span></div>        
    <div class="layer layer-three"><span class="overlay"></span></div>        
</div>

<!-- page-direction -->
<div class="page_direction">
    <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
    <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
</div>
<!-- page-direction end -->


<!-- Main header-->
<header class="main-header header-style-one">
    <div class="header-top">
        <div class="container">
            <div class="outer-box clearfix">
                <div class="header-top_left pull-left">
                    <div class="text">
                        <p>Immediate Delivery</p>
                    </div>
                    <div class="header-contact-info1">
                        <ul>
                            <li><span class="icon-calling"></span><a href="tel:180050033333">{{$settings['phone']}}</a></li>
                            <li><span class="icon-clock"></span>{{$settings['e-mail']}}</li>
                        </ul>
                    </div>
                </div>
                <div class="header-top_right pull-right">
                    <div class="header-mail-box">
                        <span class="icon-email"></span>
                        <p>Enquire? <a href="mailto:info@example.com">Send Your Mail</a></p>
                    </div>
                    <div class="space-box1"></div>
                  
                </div>

            </div>
        </div>    
    </div>

    <!--Start Header--> 
    <div class="header">
        <div class="auto-container">
            <div class="outer-box">
                <div class="header-left">
                    <div class="logo">
                        <a href="index-2.html"><img src="assets/images/resources/logo.png" alt="Awesome Logo" title=""></a>
                    </div>
                </div>

                <div class="header-right">
                    <div class="nav-outer style1 clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <div class="inner">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <!-- Main Menu -->
                                          
                        <!-- Main Menu End-->
                    </div>
                    
                 
                  
                    <div class="header-right_buttom">
                        <div class="btns-box">
                            <a class="btn-one" href="contact.html">
                                <div class="round"></div>
                                <span class="txt">Order Now</span>
                            </a>
                        </div>
                    </div> 

                </div> 
            </div>
        </div>    
    </div> 
    <!--End header-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="container">
            <div class="clearfix">
                <!--Logo-->
                <div class="logo float-left">
                    <a href="index-2.html" class="img-responsive"><img src="assets/images/resources/sticky-logo.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="right-col float-right">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>   
                </div>
            </div>
        </div>
    </div>
    <!--End Sticky Header-->
    
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
        <nav class="menu-box">
            <div class="nav-logo"><a href="index-2.html"><img src="assets/images/resources/mobilemenu-logo.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu --> 

</header>