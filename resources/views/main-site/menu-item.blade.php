
@extends('layouts.main-site')

@push('styles')
    
    
    <!-- Animation CSS -->
    <link rel="stylesheet" href="/assets/css/animate.css">	
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet"> 
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/linearicons.css">
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="/assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/owlcarousel/css/owl.theme.css">
    <link rel="stylesheet" href="/assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/css/slick-theme.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!-- DatePicker CSS -->
    <link href="/assets/css/datepicker.min.css" rel="stylesheet">
    <!-- TimePicker CSS -->
    <link href="/assets/css/mdtimepicker.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <link id="layoutstyle" rel="stylesheet" href="/assets/color/theme-red.css">
@endpush

@push('scripts')
    <!-- Latest jQuery --> 
    <script src="/assets/js/jquery-1.12.4.min.js"></script> 
    <!-- Latest compiled and minified Bootstrap --> 
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script> 
    <!-- owl-carousel min js  --> 
    <script src="/assets/owlcarousel/js/owl.carousel.min.js"></script> 
    <!-- magnific-popup min js  --> 
    <script src="/assets/js/magnific-popup.min.js"></script> 
    <!-- waypoints min js  --> 
    <script src="/assets/js/waypoints.min.js"></script> 
    <!-- parallax js  --> 
    <script src="/assets/js/parallax.js"></script> 
    <!-- countdown js  --> 
    <script src="/assets/js/jquery.countdown.min.js"></script> 
    <!-- jquery.countTo js  -->
    <script src="/assets/js/jquery.countTo.js"></script>
    <!-- imagesloaded js --> 
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope min js --> 
    <script src="/assets/js/isotope.min.js"></script>
    <!-- jquery.appear js  -->
    <script src="/assets/js/jquery.appear.js"></script>
    <!-- jquery.dd.min js -->
    <script src="/assets/js/jquery.dd.min.js"></script>
    <!-- slick js -->
    <script src="/assets/js/slick.min.js"></script>
    <!-- DatePicker js -->
    <script src="/assets/js/datepicker.min.js"></script>
    <!-- TimePicker js -->
    <script src="/assets/js/mdtimepicker.min.js"></script>
    <!-- scripts js --> 
    <script src="/assets/js/scripts.js"></script>
@endpush


@section('title', 'Menu Details')


@section('header')
    <!-- START HEADER -->
        <header class="header_wrap fixed-top header_with_topbar light_skin main_menu_uppercase">
        <div class="container">
            @include('partials.nav')
        </div>
    </header>
    <!-- END HEADER -->
@endsection


@section('content')

 <!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="/assets/images/product_bg.jpg">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title">
            		<h1>Product Detail</h1>
                </div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Product Detail</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
		<div class="row">
            <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
              <div class="product-image">
                    <img src='{{ asset('storage/' . $menu->image) }}' alt="product_img1" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="pr_detail">
                    <div class="product_description">
                        <h4 class="product_title"><a href="#">{{ $menu->name }}</a></h4>
                        <div class="product_price"> 
                            <span class="price">${{ number_format($menu->price, 2) }}</span> 
                        </div>
                        <div class="rating_wrap">
                                <div class="rating">
                                    <div class="product_rate" style="width:100%"></div>
                                </div>
                                
                            </div>
                            <br/>
                            <hr/>
                        <div class="pr_desc">
                            <p>{{ $menu->description  }}</p>
                        </div>
                        <ul class="product-meta">
                            <li>Category:  {{ $menu->category->name }}</li>
                        </ul>
                    </div>
                    <hr />
                    <div class="cart_extra">
                        <div class="cart-product-quantity">
                            <div class="quantity">
                                <input type="button" value="-" class="minus">
                                <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                <input type="button" value="+" class="plus">
                            </div>
                        </div>
                        <div class="cart_btn">
                            <button class="btn btn-default btn-addtocart" type="button"><span>Add to cart</span></button>
                        </div>
                    </div>
                    <hr />
                    <div class="product_share">
                        <span>Share:</span>
                        <ul class="social_icons">
                            <!-- Facebook Share -->
                            <li>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}" target="_blank">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            
                            <!-- Twitter Share -->
                            <li>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::url()) }}&text=Check+this+out!" target="_blank">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>

                            
                            <!-- WhatsApp Share -->
                            <li>
                                <a href="https://api.whatsapp.com/send?text=Check+this+out!+{{ urlencode(Request::url()) }}" target="_blank">
                                    <i class="ion-social-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="medium_divider clearfix"></div>
            </div>
        </div>
   
        <div class="row">
        	<div class="col-12">
                <div class="medium_divider"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="heading_s1">
                	<h3>Releted</h3>
                </div>
            	<div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-margin="10" data-responsive='{"0":{"items": "1"}, "575":{"items": "2"}, "991":{"items": "3"}, "1199":{"items": "4"}}'>


      
                            @foreach ($relatedMenus as $relatedMenu)


                            <div class="item">
                                <div class="single_product">
                                    <div class="menu_product_img">
                                        <img src="/assets/images/menu_item1.jpg" alt="menu_item1">
                                        <div class="action_btn"><a href="#" class="btn btn-white">Add To Cart</a></div>
                                    </div>
                                    <div class="menu_product_info">
                                        <div class="title">
                                            <h5><a href="{{ route('menu.item',$relatedMenu->id) }}"> {{ $relatedMenu->name }}</a></h5>
                                        </div>
                                        <p>{{ $relatedMenu->description }}</p>
                                    </div>
                                    <div class="menu_footer">
                                        <div class="rating">
                                            <div class="product_rate" style="width:100%"></div>
                                        </div>
                                        <div class="price">
                                            <span>${{ number_format($relatedMenu->price, 2) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

          
                            @endforeach
       
                    

                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->
@endsection



 