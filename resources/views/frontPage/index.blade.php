<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Autixir - Car Services and Auto Mechanic HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png')}}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{ asset('css/font-icons.css')}}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
</head>

<body>
    {{--  <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->  --}}

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-4) -->
    <header class="ltn__header-area ltn__header-4 ltn__header-6--- ltn__header-7 ltn__header-transparent--- gradient-color-2---">
        <!-- ltn__header-top-area start -->
        <div class="ltn__header-top-area top-area-color-white d-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li><a href="mailto:info@webmail.com?Subject=Flower%20greetings%20to%20you"><i class="icon-mail"></i> info@webmail.com</a></li>
                                <li><a href="locations.html"><i class="icon-placeholder"></i> 15/A, Nest Tower, NYC</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="top-bar-right text-end">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li>
                                        <!-- ltn__language-menu -->
                                        <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                            <ul>
                                                <li><a href="#" class="dropdown-toggle"><span class="active-currency">English</span></a>
                                                    <ul>
                                                        <li><a href="#">Arabic</a></li>
                                                        <li><a href="#">Bengali</a></li>
                                                        <li><a href="#">Chinese</a></li>
                                                        <li><a href="#">English</a></li>
                                                        <li><a href="#">French</a></li>
                                                        <li><a href="#">Hindi</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- ltn__social-media -->
                                        <div class="ltn__social-media">
                                            <ul>
                                                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                
                                                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-top-area end -->
        
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo">
                            <a href="index.html"><img src="img/logo.png" alt="Logo"></a>
                                

                               
                            
                        </div>
                    </div>
                    <div class="col header-menu-column">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li class="menu-icon"><a href="{{ url('/')}}">الصفحة الرئيسية</a>
                                            
                                        </li>
                                        <li class="menu-icon"><a href="{{ url('about')}}">عنا</a>
                                           
                                        </li>
                                        <li class="menu-icon"><a href="{{ url('cart')}}">السلة</a>
                                            
                                        </li> 
                                    
                                        
                                        <li><a href="{{ url('contact')}}">تواصل معنا</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ltn__header-options">
                            <!-- ltn__currency-menu -->
                            <div class="ltn__drop-menu ltn__currency-menu">
                              
                            </div>
                            <!-- header-search-1 -->
                            <div class="header-search-wrap">
                                <div class="header-search-1">
                                    <div class="search-icon">
                                        <i class="icon-search for-search-show"></i>
                                        <i class="icon-cancel  for-search-close"></i>
                                    </div>
                                </div>
                                <div class="header-search-1-form">
                                    <form id="#" method="get"  action="#">
                                        <input type="text" name="search" value="" placeholder="Search here..."/>
                                        <button type="submit">
                                            <span><i class="icon-search"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- user-menu -->
                            <div class="ltn__drop-menu user-menu">
                                <ul>
                                    <li>
                                        <a href="#"><i class="icon-user"></i></a>
                                        <ul>
                                            <li> <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>        
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- mini-cart -->
                            <div class="mini-cart-icon">
                                <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                                    <i class="icon-shopping-cart"></i>
                                    <sup ></sup>
                                </a>
                            </div>
                            <!-- Mobile Menu Button -->
                            <div class="mobile-menu-toggle d-xl-none">
                                <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                    <svg viewBox="0 0 800 600">
                                        <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                        <path d="M300,320 L540,320" id="middle"></path>
                                        <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->

    <!-- Utilize Cart Menu Start -->
    <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <span class="ltn__utilize-menu-title">السلة</span>
                <button class="ltn__utilize-close">×</button>
            </div>

            <div class="mini-cart-product-area ltn__scrollbar">
                @foreach ($carts as $cart)

                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="images/products/{{$cart->product->product_img}}" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i >
                            <form action="{{ route('carts.destroy', $cart->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="icon-cancel"></button>
                            </form>    
                        </i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">{{$cart->product->name}}</a></h6>
                        <span class="mini-cart-quantity"> السعر : شيكل{{$cart->price}}</span>
                    </div>
                </div>
                
            </div>
            @endforeach

            <div class="mini-cart-footer">
                
                <div class="btn-wrapper">
                    <a href="cart" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                </div>
            </div>

        </div>
    </div>
    <!-- Utilize Cart Menu End -->

    <!-- Utilize Mobile Menu Start -->
    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="index.html"><img src="img/logo.png" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
           
            <div class="ltn__utilize-menu">
                <ul>
                    <li><a href="{{ url('/')}}">الصفحه الرئيسية</a>
                        
                    </li>
                    <li><a href="{{ url('about')}}">عنا</a>
                       
                    </li>
                    <li><a href="{{ url('cart')}}">السلة</a>
                        
                    </li>
                  
                   
                    <li><a href="{{ url('contact')}}">تواصل معنا</a></li>
                </ul>
            </div>
            <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                <ul>
                    <li>
                        <a href="{{ url('admin')}}" title="My Account">
                            <span class="utilize-btn-icon">
                                <i class="far fa-user"></i>
                            </span>
                            Admin
                        </a>
                    </li>
                   
                   
                </ul>
            </div>
            <div class="ltn__social-media-2">
                <ul>
                    <li><a href="https://www.facebook.com/MikrazAbuElyan" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title="whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- SLIDER AREA START (slider-1) -->
    <div class="ltn__slider-area ltn__slider-6 mb-120---">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item section-bg-1">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-7 col-sm-7 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <h1 class="slide-title  animated ltn__secondary-color">مرحبأ بك في معرض ابو عليان للمخراز أونلاين خانيونس</h1>
                                        <div class="slide-brief animated">
                                            <p>معرض ابو عليان للجديد والمخراز شروات من الداخل المحتل //توصيل طلبات للبيت// فقط احجز طلبك </p>
                                        </div>
                                        <div class="btn-wrapper  animated">
                                            <a href="#liton_tab_3_1" class="theme-btn-1 btn btn-effect-1 text-uppercase"> احجز الأن</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 col-sm-5 align-self-center">
                                <div class="slide-item-img">
                                    <a href="#liton_tab_3_1"><img src="img/product/1.png" alt="Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item section-bg-1">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-5 col-sm-5 align-self-center">
                                <div class="slide-item-img">
                                    <a href="#liton_tab_3_1"><img src="img/product/2.png" alt="Image"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-7 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <h4 class="slide-sub-title ltn__secondary-color animated text-uppercase">مرحبا بكم في معرض ابو عليان</h4>
                                        <h1 class="slide-title  animated">ابو عليان للمخراز اونلاين</h1>
                                        <div class="slide-brief animated">
                                            <p>معرض ابو عليان للجديد والمخراز شروات من الداخل المحتل //توصيل طلبات للبيت// فقط احجز طلبك </p>
                                        </div>
                                        <div class="btn-wrapper  animated">
                                            <a href="#liton_tab_3_1" class="theme-btn-1 btn btn-effect-1 text-uppercase"> احجز الأن</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item section-bg-1">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-7 col-sm-7 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <h4 class="slide-sub-title ltn__secondary-color animated text-uppercase">مرحبا بكم في معرض ابو عليان</h4>
                                        <h1 class="slide-title  animated">ابو عليان للمخراز اونلاين</h1>
                                        <div class="slide-brief animated">
                                            <p>معرض ابو عليان للجديد والمخراز شروات من الداخل المحتل //توصيل طلبات للبيت// فقط احجز طلبك </p>
                                        </div>
                                        <div class="btn-wrapper  animated">
                                            <a href="#liton_tab_3_1" class="theme-btn-1 btn btn-effect-1 text-uppercase"> احجز الأن</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 col-sm-5 align-self-center">
                                <div class="slide-item-img">
                                    <a href="#liton_tab_3_1"><img src="img/product/3.png" alt="Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER AREA END -->



    <!-- PRODUCT TAB AREA START (product-item-3) -->
    <div class="ltn__product-tab-area ltn__product-gutter pt-85 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">// القطع</h6>
                        <h1 class="section-title">منتجاتنا <a href="nam"></a></h1>
                    </div>
                    <div class="ltn__tab-menu ltn__tab-menu-2 ltn__tab-menu-top-right-- text-uppercase text-center">
                        <div class="nav">
                            <a class="active show" data-bs-toggle ="tab" href="#liton_tab_3_1">جميع المنتجات </a>
                           
                        </div>
                    </div>














                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_3_1">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-3">
                                        @foreach ($products as $product)
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{url('reservation')}}"><img src="/images/products/{{$product->product_img}}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-action">
                                                    <ul>
                                                       
                                                        <li>
                                                            <form action="{{route('carts.store')}}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="username" value="{{$product->name}}">
                                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                                            <input type="hidden" name="price" value="{{$product->newPrice}}">
                                                            <button title="Add to Cart" data-bs-toggle ="modal" name="submit" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"><a href="{{url('reservation')}}">احجز الان </a>

                                                                </i>
                                                            </button>
                                                            </form>
                                                        </li>
                                                      
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                  
                                                </div>
                                                <h2 ><a href="{{url('reservation')}}">{{$product->name}}</a></h2>
                                                <div class="product-price">
                                                    <span>شيكل {{$product->newPrice}}</span>
                                                    {{--  <del>${{$product->oldPrice}}</del>  --}}
                                                    <p class="product-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa iusto, dolorum tempora assumenda adipisci sequi!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                
                                    <!--  -->
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TAB AREA END -->



    

    <!-- CALL TO ACTION START (call-to-action-2) -->
    <div class="ltn__call-to-action-area call-to-action-2 pt-20 pb-20" data-bs-bg="img/1.jpg--">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-2 text-center">
                        <h2> اتصل بنا عبر الهاتف فقط اضغط اتصل الان </h2>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-4 btn-white" href="tel:0599486738"><i class="fas fa-phone-volume"></i>اتصل الان</a>
                            {{--  <a href="tel:+972597389313">+972597389313</a>  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->
    <div class="ltn__contact-address-area mb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                   
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="img/icons/11.png" alt="Icon Image">
                        </div>
                        <h3 class="animated fadeIn">رقم الهاتف للتواصل</h3>
                        <p>+972597389313 <br>0597389313</p>
                        <p>أثناء ساعات العمل من الساعه 9 للمغرب </p>
                        <p>يوميا عدا يوم الجمعه</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="img/icons/12.png" alt="Icon Image">
                        </div>
                        <h3 class="animated fadeIn">العنوان</h3>
                        <p>خانيونس <br>
                            عبسان الكبيرة</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SMALL PRODUCT LIST AREA START -->
    <div class="ltn__small-product-list-area pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title">جميع المنتجات</h1>
                    </div>
                </div>
            </div>








            <div class="row">
                <!-- small-product-item -->
                @foreach ($products as $product)
                    
                
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__small-product-item">
                        <div class="small-product-item-img">
                            <a href="product-details.html"><img src="/images/products/{{$product->product_img}}" alt="Image"></a>
                        </div>
                        <div class="small-product-item-info">
                           
                            <h2 class="product-title"><a href="product-details.html">{{$product->name}}</a></h2>
                            <div class="product-price">
                                <span>${{$product->newPrice}}</span>
                                <form action="{{route('carts.store')}}" method="post">
                                    @csrf
                                <button title="Add to Cart" data-bs-toggle ="modal" name="submit" data-bs-target="#add_to_cart_modal">
                                    <i class="fas fa-shopping-cart2"> احجز الان </i>
                                </button></form>
                            </div>
                        </div>
                        
                    </div>
                </div>

                @endforeach







              
                <!--  -->
            </div>
        </div>
    </div>
    <!-- SMALL PRODUCT LIST AREA END -->

    <!-- BRAND LOGO AREA START -->
    <div class="ltn__brand-logo-area ltn__brand-logo-1 section-bg-1 pt-110 pb-110 plr--9">
        <div class="container-fluid">
            <div class="row ltn__brand-logo-active">
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/1.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/2.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/3.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/4.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/5.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/3.png" alt="Brand Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BRAND LOGO AREA END -->

    <!-- TESTIMONIAL AREA START -->
    {{--  <div class="ltn__testimonial-area ltn__testimonial-4 pt-115 pb-100 plr--9">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">//  Testimonials</h6>
                        <h1 class="section-title">Clients Feedbacks<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__testimonial-slider-4 ltn__testimonial-slider-4-active slick-arrow-1">
                        <div class="ltn__testimonial-item-5">
                            <div class="ltn__quote-icon">
                                <i class="far fa-comments"></i>
                            </div>
                            <div class="ltn__testimonial-image">
                                <img src="img/testimonial/1.jpg" alt="quote">
                            </div>
                            <div class="ltn__testimonial-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  ullamco laboris nisi ut aliquip ex ea commodo.  </p>
                                <h4>Jacob William</h4>
                                <h6>Manager</h6>
                            </div>
                        </div>
                        <div class="ltn__testimonial-item-5">
                            <div class="ltn__quote-icon">
                                <i class="far fa-comments"></i>
                            </div>
                            <div class="ltn__testimonial-image"><img src="img/testimonial/2.jpg" alt="quote"></div>
                            <div class="ltn__testimonial-info">
                                <p>Quidem Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  ullamco laboris nisi ut aliquip ex ea. </p>
                                <h4>Ethan James</h4>
                                <h6>Admin</h6>
                            </div>
                        </div>
                        
                        <div class="ltn__testimonial-item-5">
                            <div class="ltn__quote-icon">
                                <i class="far fa-comments"></i>
                            </div>
                            <div class="ltn__testimonial-image"><img src="img/testimonial/3.jpg" alt="quote"></div>
                            <div class="ltn__testimonial-info">
                                <p>Dolor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  ullamco nisi ut aliquip ex ea commodo. </p>
                                <h4>Noah Alexander</h4>
                                <h6>Professor</h6>
                            </div>
                        </div>

                        <div class="ltn__testimonial-item-5">
                            <div class="ltn__quote-icon">
                                <i class="far fa-comments"></i>
                            </div>
                            <div class="ltn__testimonial-image"><img src="img/testimonial/4.jpg" alt="quote"></div>
                            <div class="ltn__testimonial-info">
                                <p>Amet Ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  nisi ut aliquip ex ea commodo.  </p>
                                <h4>Liam Mason</h4>
                                <h6>Officer</h6>
                            </div>
                        </div>
                    </div>
                    <ul class="ltn__testimonial-quote-menu d-none d-lg-block">
                        <li><img src="img/testimonial/1.jpg" alt="Quote image"></li>
                        <li><img src="img/testimonial/2.jpg" alt="Quote image"></li>
                        <li><img src="img/testimonial/3.jpg" alt="Quote image"></li>
                        <li><img src="img/testimonial/4.jpg" alt="Quote image"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>  --}}
    <!-- TESTIMONIAL AREA END -->

   

   

  

    <!-- FOOTER AREA START -->
  
    <!-- FOOTER AREA END -->

    <!-- MODAL AREA START (Quick View Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="quick_view_modal" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <!-- <i class="fas fa-times"></i> -->
                        </button>
                    </div>



































    <!-- MODAL AREA START (Add To Cart Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            <img src="img/product/1.png" alt="#">
                                        </div>
                                         <div class="modal-product-info">
                                            <h5><a href="product-details.html">Brake Conversion Kit</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Cart</p>
                                            <div class="btn-wrapper">
                                                <a href="{{ url('cart')}}" class="theme-btn-1 btn btn-effect-1">تفقد السلة</a>
                                            </div>
                                         </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="img/icons/payment.png" alt="#">
                                            </div>
                                         </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Wishlist Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            <img src="img/product/7.png" alt="#">
                                        </div>
                                         <div class="modal-product-info">
                                            <h5><a href="product-details.html">Brake Conversion Kit</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Wishlist</p>
                                            <div class="btn-wrapper">
                                                <a href="wishlist.html" class="theme-btn-1 btn btn-effect-1">View Wishlist</a>
                                            </div>
                                         </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout </p>
                                            <div class="payment-method">
                                                <img src="img/icons/payment.png" alt="#">
                                            </div>
                                         </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

</div>
<!-- Body main wrapper end -->    

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  
</body>

</html>

