<!DOCTYPE html>
<html @if(session('sess_lang_direction') == 'Right to Left (RTL)') dir="rtl" @endif lang="{{ session('sess_lang_code') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="_token" content="{{ csrf_token() }}">

    <title >@yield('seo_title')</title>
    <meta name="description" content="@yield('seo_meta_description')">
    
    <link rel="shortcut icon" href="{{ asset('uploads/'.$global_setting->favicon) }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('uploads/'.$global_setting->favicon) }}" type="image/x-icon">

    @include('front.layouts.styles')

    @yield('dark_mode')

    @if($global_setting->sticky_header == 'Hide')
    <style >
        .sticky-header.fixed-header {
            display: none;
        }
    </style>
    @endif

    @if($global_setting->tawk_live_chat_status == 'Show')
		<style >
		.scroll-to-top {
			bottom: 50px!important;
		}
		</style>
    @endif

    @if($global_setting->cookie_consent_status == 'Show')
        <script src="https://cdn.websitepolicies.io/lib/cookieconsent/1.0.3/cookieconsent.min.js" defer></script><script >window.addEventListener("load",function(){window.wpcc.init({"colors":{"popup":{"background":"#{{ $global_setting->cookie_consent_bg_color }}","text":"#{{ $global_setting->cookie_consent_text_color }}","border":"#b3d0e4"},"button":{"background":"#{{ $global_setting->cookie_consent_button_bg_color }}","text":"#{{ $global_setting->cookie_consent_button_text_color }}"}},"position":"bottom","padding":"large","margin":"none","content":{"message":"{{ $global_setting->cookie_consent_message }}","button":"{{ $global_setting->cookie_consent_button_text }}"}})});</script>
    @endif

    @if($global_setting->google_analytic_status == 'Show')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ $global_setting->google_analytic_id }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{ $global_setting->google_analytic_id }}');
    </script>
    @endif

    <style >
    :root {
        --theme-color1: #{{ $global_setting->theme_color }};
    }
    </style>

</head>

<body>
    <div id="wrapper">
       <!-- Header Area Start Here -->
        <header>
            <div id="header-three" class="header-style2 header-fixed bg-body">
                   
            @include('front.layouts.top')
                <div class="main-menu-area" id="sticker">
                    <div class="container">
                        <div class="row no-gutters d-flex align-items-center">
                            <div class="col-lg-2 col-md-2 col-sm-3">
                                <div class="logo-area">
                                    <a href="{{ route('home') }}" class="img-fluid"><img src="{{ asset('uploads/'.$global_setting->logo) }}" alt="{{ env('APP_NAME') }}"></a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-6 possition-static">
                                <div class="cp-main-menu">
                                    <nav>
                                        <ul>
                                              @foreach($global_menu as $item)
                                @php 
                                    $menu_arr[$item->name] = $item->status;
                                @endphp
                                @endforeach
                                 @if($menu_arr['About'] == 'Show')
                                            <li><a href="{{ route('about') }}">{{ __('About Us') }}</a></li>
                                             @endif
                                               @if($menu_arr['PinCode'] == 'Show')
                                            <li><a href="#">PinCode</a></li>
                                            @endif
                                               @if($menu_arr['Listing'] == 'Show')
                                           <li><a href="{{ route('listing') }}"> Listing</a></li>
                                           @endif
                                               @if($menu_arr['Advertise'] == 'Show')
                                            <li><a href="#">Advertise</a></li>
                                            @endif
                                               @if($menu_arr['Franchise'] == 'Show')
                                            <li><a href="#">Franchise</a></li>
                                            @endif
                                               @if($menu_arr['Business'] == 'Show')
                                            <li><a href="#">Business</a></li>
                                            @endif
                                               @if($menu_arr['Personal'] == 'Show')
                                            <li><a href="#">Personal</a></li>
                                             @endif
                                           
                                    
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 text-right">
                                <a href="{{ route('post-requirement') }}" class="cp-default-btn">Post Requirement</a>
                            </div>
                        </div>
                    </div>
                    <div class="search-layout3">
                        <div class="search-layout3-holder">
                            <div class="container">
                                <form id="cp-search-form2" class="bg-primary search-layout3-inner">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4">
											   <div class="form-group search-input-area input-icon-location">
											       <input type="text" id="location" placeholder="Enter location here ..." onkeyup="fetchArea()">
                                                <div id="suggestions"></div>
                                            </div>
                                    
                                        </div>
                                        <div class="col-xl-6 col-lg-4">
                                                   <div class="form-group search-input-area input-icon-category">
                                                <select id="categories" class="select2">
                                        <option value="">Select Categories</option>
                                    <option value=""> Restaurants</option>
                                      <option value="" >  Hotels</option>
                                      <option value="" > Beauty Spa</option>
                                     <option value="" >Home Decor</option>
                                    <option value=""> Wedding Planning</option>
                                   <option value="">Education</option>
                                     <option value="">Rent & Hire</option>
                                     <option value=""> Hospitals</option>
                                      <option value="" >Contractors</option>
                                      <option value="">Pet Shops</option>
                                   <option value="">PG/Hostels</option>
                                   <option value="">Estate Agent</option>
                                   <option value="">Dentists</option>
                                   <option value="">Gym</option>
                                   <option value="">Loans</option>
                                   <option value="">Event Organisers</option>
                                   <option value="">Driving Schools</option>
                                   <option value="">Packers & Movers</option>
                                   <option value="">Courier Service</option>
                                   <option value="">Popular Categories</option>
                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 text-right">
                                            <a href="#" class="cp-search-btn"><i class="fa fa-search" aria-hidden="true"></i>Search</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area Start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    
                                    <ul>
                                          <li><a href="#">About Us</a></li>
                                            <li><a href="#">PinCode </a></li>
                                           <li><a href="#"> Listing</a></li>
                                            <li><a href="#">Advertise</a></li>
                                            <li><a href="#">Franchise</a></li>
                                            <li><a href="#">Business</a></li>
                                            <li><a href="#">Personal</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End -->
        </header>
        <!-- Header Area End Here -->
        <!-- Search Area Start Here -->
        <div class="search-layout3 d-lg-none bg-accent">
            <div class="search-layout3-holder">
                <div class="container">
                    <form id="cp-search-form" class="bg-primary search-layout3-inner">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-12 mb15--sm">
								 <div class="form-group search-input-area input-icon-location">
                                    <input placeholder="Enter location here ..." value="" name="key-word" type="text">
                                </div>
                                
                            </div>
                            <div class="col-md-8 col-sm-6 col-12 mb15--sm">
                               <div class="form-group search-input-area input-icon-category">
									
                                    <select id="location-header" class="select2">
                                        <option value="">Select Categories</option>
                                        <option value=""> Restaurants</option>
                                      <option value="" >  Hotels</option>
                                      <option value="" > Beauty Spa</option>
                                     <option value="" >Home Decor</option>
                                    <option value=""> Wedding Planning</option>
                                   <option value="">Education</option>
                                     <option value="">Rent & Hire</option>
                                     <option value=""> Hospitals</option>
                                      <option value="" >Contractors</option>
                                      <option value="">Pet Shops</option>
                                   <option value="">PG/Hostels</option>
                                   <option value="">Estate Agent</option>
                                   <option value="">Dentists</option>
                                   <option value="">Gym</option>
                                   <option value="">Loans</option>
                                   <option value="">Event Organisers</option>
                                   <option value="">Driving Schools</option>
                                   <option value="">Packers & Movers</option>
                                   <option value="">Courier Service</option>
                                   <option value="">Popular Categories</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 text-right text-left-mb mb15--sm">
                                <a href="#" class="cp-search-btn"><i class="fa fa-search" aria-hidden="true"></i>Search</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Search Area End Here -->

    <div class="page-wrapper">
        
        @if($global_setting->preloader == 'Show')
        <div class="preloader"></div>
        @endif
        
       

        @yield('content')

        <!-- Main Footer -->
         

      <footer>
        <div class="footer-area-top s-space-equal">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="footer-box">
                            <h3 class="title-medium-light title-bar-left size-lg">About us</h3>
                            <ul class="useful-link">
                                <li>
                                    <a href="{{ route('about') }}">About us</a>
                                </li>
                                <li>
                                    <a href="#">PinCode </a>
                                </li>
                                <li>
                                    <a href="#"> Advertise</a>
                                </li>
                                <li>
                                    <a href="{{ route('terms') }}">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a href="{{ route('privacy') }}">Privacy Policy</a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="footer-box">
                            <h3 class="title-medium-light title-bar-left size-lg">___</h3>
                            <ul class="useful-link">
                                  <li>
                                    <a href="#">Listing</a>
                                </li>
                                <li>
                                    <a href="#">Franchise</a>
                                </li>
                                <li>
                                    <a href="#">Business</a>
                                </li>
                                <li>
                                    <a href="#">Personal</a>
                                </li>
                                <li>
                                    <a href="{{ route('post-requirement') }}">Post Requirement</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="footer-box">
                            <h3 class="title-medium-light title-bar-left size-lg">Help &amp; Support</h3>
                            <ul class="useful-link">
                                <li>
                                    <a href="#">Live Chat</a>
                                </li>
                                <li>
                                    <a href="{{ route('faqs') }}">FAQ</a>
                                </li>  <li>
                                    <a href="{{ route('blog') }}">Blogs</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact-us') }}">Contact us</a>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="footer-box">
                            <h3 class="title-medium-light title-bar-left size-lg">Follow Us On</h3>
                            <ul class="folow-us">
                              <li>
                                        <a href="#">
                                            <img src="{{ asset('justping-front/img/footer/follow1.jpg') }}" alt="follow">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('justping-front/img/footer/follow2.jpg') }}" alt="follow">
                                        </a>
                                    </li>
                            </ul>
                             <ul class="social-link">
                                      @if($global_setting->facebook!='')
                                    <li class="fa-classipost">
                                        <a href="{{ $global_setting->facebook }}">
                                            <img src="{{ asset('justping-front/img/footer/facebook.jpg') }}" alt="social">
                                        </a>
                                    </li>
                                     @endif
                                      @if($global_setting->twitter!='')
                                    <li class="tw-classipost">
                                        <a href="{{ $global_setting->twitter }}">
                                            <img src="{{ asset('justping-front/img/footer/twitter.jpg') }}" alt="social">
                                        </a>
                                    </li>
                                      @endif
                                      @if($global_setting->youtube!='')
                                    <li class="yo-classipost">
                                        <a href="{{ $global_setting->youtube }}">
                                            <img src="{{ asset('justping-front/img/footer/youtube.jpg') }}" alt="social">
                                        </a>
                                    </li>
                                     @endif
                                      @if($global_setting->pinterest!='')
                                    <li class="pi-classipost">
                                        <a href="{{ $global_setting->pinterest }}">
                                            <img src="{{ asset('justping-front/img/footer/pinterest.jpg') }}" alt="social">
                                        </a>
                                    </li>
                                     @endif
                                      @if($global_setting->linkedin!='')
                                    <li class="li-classipost">
                                        <a href="{{ $global_setting->linkedin }}">
                                            <img src="{{ asset('justping-front/img/footer/linkedin.jpg') }}" alt="social">
                                        </a>
                                    </li>
                                    @endif
                                </ul>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-center-mb">
                        <p>Copyright © justping</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right text-center-mb">
                        <ul>
                            <li>
                                <img src="{{ asset('justping-front/img/footer/card1.jpg') }}" alt="card">
                            </li>
                            <li>
                                <img src="{{ asset('justping-front/img/footer/card2.jpg') }}" alt="card">
                            </li>
                            <li>
                                <img src="{{ asset('justping-front/img/footer/card3.jpg') }}" alt="card">
                            </li>
                            <li>
                                <img src="{{ asset('justping-front/img/footer/card4.jpg') }}" alt="card">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
      
        <!-- Footer Area End Here -->
    </div>
    <!-- Modal Start-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
          <!-- <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" >&times;</button>
                    <div class="title-default-bold mb-none">Login</div>
                </div>-->
                <div class="modal-body">
                    <div class="login-form">
					<div class="row">
                <div class="col-sm-3">
                    <img src="{{ asset('justping-front/img/Just Ping.png') }}" alt="logo" style="width:100px; height:45px;">
                </div>
                 <div class="col-sm-9 modelContent">
                     <h2>Welcome</h2>
            <p>Login for a seamless experience</p>
                 </div>
            </div>
                        <form>
						<div class="loginSection">
                            <div class="input-group">
                <span>+91</span>
                <input type="text" id="phoneNumber" placeholder="Enter phone number" maxlength="10" fdprocessedid="3mdkvh">
            </div>
                            <div class="checkbox checkbox-primary checkbox-group">
                                <input id="termsCheckbox" type="checkbox">
                              <label for="termsCheckbox">I Agree to Terms and Conditions <a href="#">Terms &amp; Conditions</a></label>
                            </div>
                            <button class="default-big-btn form-sendOtp" onclick="sendOTP()" value="Login">Send OTP</button>
							
                            <button class="default-big-btn form-cancel" type="submit" value="">Cancel</button>
							</div>
							<div id="otpSection" style="display: none;">
                <p>Enter the OTP sent to your phone.</p> <div class="input-group">
                <input type="text" id="otpInput" placeholder="Enter OTP" maxlength="6"></div>
                <button class="verify-otp-btn default-big-btn" onclick="verifyOTP()">Verify OTP</button>
            </div>
                         
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End-->
   
     <!-- Floating Banner -->
    <div id="floatingBanner">
        <button class="close-btn" onclick="closeBanner()">✖</button>
        <a href="https://bizzopp.com/" target="_blank">
            <img src="{{ asset('justping-front/img/banner/popup.jpg') }}" alt="Floating Banner" style="
    width: 400px;">
        </a>
       <!-- <div class="banner-text">
            <p>Special Offer! Click to learn more.</p>
        </div>-->
    </div>
    <!-- Report Abuse Modal End-->
   @include('front.layouts.scripts')


</body>


</html>
         
      