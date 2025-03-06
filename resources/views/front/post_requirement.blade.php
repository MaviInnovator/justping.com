@extends('front.layouts.master')

@section('seo_title', $global_other_page_items->page_about_seo_title)
@section('seo_meta_description', $global_other_page_items->page_about_seo_meta_description)

@section('content')
  <!-- Header Area End Here -->
        <section class="about-section"  style="background-image: url({{ asset('uploads/'.$global_setting->banner) }});"> 
		<div class="container">
			<div class="row about-breadcrumbs">
				<div class="col-md-6">
					<div class="about-head">
						<h2>Post Requirement</h2>
					</div>
				</div>
				<div class="col-md-6">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumbs">
							<li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
							<li class="breadcrumb-item active" aria-current="page">Post Requirement</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
         <section id="first" class="section-white">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8 left">
                    <h2>Post Free Classified Ad with JustPing Today</h2>
                    
                    <form>
                          @csrf
                    <div class="row mt-5 register-block">
                        <div class="col-md-2 d-flex align-items-center ">
                            <input id="num" type="text" placeholder="+91" class="form-control" value="+91" disabled />
                        </div>
                        <div class="col-md-7 d-flex align-items-center">
                            <input  type="tel" placeholder="Enter your phone number" class="form-control" id="inputPhone"/>
                        </div>
                        <div class="col-md-3 d-flex align-items-center">
                            <button class="btn btn-submit w-100 sendOTPBtn" >Submit</button>
                        </div>
                    </div>
     
                    </form>
                    <form>
                         @csrf
       <div class="container text-center mt-5 verification-block d-none">
        <p class="mb-3">Enter the 4-digit code sent to your device</p>
        <div class="otpTimerBlock d-block"></div>
         <div class="tempOTP d-block"></div>
        <div class="otp-input d-flex justify-content-center otp-fields">
            <input type="number" class="form-control otp-field" oninput='digitValidate(this,1)'  maxlength="1" >
            <input type="number" class="form-control otp-field" oninput='digitValidate(this,2)' maxlength="1" >
            <input type="number" class="form-control otp-field" oninput='digitValidate(this,3)' maxlength="1" >
            <input type="number" class="form-control otp-field" oninput='digitValidate(this,4)' maxlength="1" >
            <button class="btn verifybutton mx-3 verifyOTPBtn" >Verify</button>
            <button id="resendButton" class="resendbutton otpResendBlock d-none resendOTPBtn"  disabled>Resend Code</button>
        </div>
    </div>
                    </form>
                    <div class="mt-3 text-start">
                        <h5>• Promote Your Product & Services Online</h5>
                        <h5>• Get a FREE Business Listing in 3 Simple Steps</h5>
                    </div>
                    <div class="mt-4 text-start">
                        <ol id="progress-bar">
                            <li class="step-done"> Create Account</li>
                            <li class="step-active"> Enter Your Business Details</li>
                            <li class="step-todo"> Select Categories</li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-4 right">
                    <img src="{{ asset('justping-front/img/category/mobile.png') }}" alt="#" class="img-fluid">
                </div>
                <div class="col-md-12 mt-5 text-center title">
                    <h2>How does JustPing work?</h2>
                    <p> Advertise, get verified leads, and grow your business</p>
                </div>
                <div class="row mt-4 header text-center justify-content-center">
                    <div class="col-md-3 col-12">
                        <img src="{{ asset('justping-front/img/19197942.jpg') }}" class="img-fluid">
                        <h4>Receive an enquiry from JustPing</h4>
                        <p> We connect your business with the right customers— plus,they can reach out to you directly!
                        </p>
                    </div>
                    <div class="col-md-3 col-12">
                        <img src="{{ asset('justping-front/img/19197604.jpg') }}" class="img-fluid">
                        <h4> Connect with customers over call & chat</h4>
                        <p>Stay ahead of the competition and start connecting with customers instantly!</p>
                    </div>
                    <div class="col-md-3 col-12">
                        <img src="{{ asset('justping-front/img/194.jpg') }}" class="img-fluid">
                        <h4> Transform and expand your business!</h4>
                        <p> Stay active and keep growing with JustPing!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="second">
        <div class="container">
            <h2 class="my-5 text-center">Why advertise in JustPing?</h2>
            <div class="row my-4 header text-center justify-content-center gap-5">
                <div class="col-md-3 col-12 box">
                    <img src="{{ asset('justping-front/img/19197942.jpg') }}" class="img-fluid">
                    <h4> Enhance your Profile</h4>
                    <p> Verify & manage your contact information. Describe about your company and updates time to time.
                    </p>
                </div>
                <div class="col-md-3 col-12 box">
                    <img src="{{ asset('justping-front/img/19197604.jpg') }}" class="img-fluid">
                    <h4>Listing Management</h4>
                    <p> Add or Update your listing. Add
                        maximum images of your
                        Product/Services for
                        display online.</p>
                </div>
                <div class="col-md-3 col-12 box">
                    <img src="{{ asset('justping-front/img/194.jpg') }}" class="img-fluid">
                    <h4> Monitor Result</h4>
                    <p>Manage your leads & inquiries
                        at one place. Reply to your
                        customers instantly
                        about their</p>
                </div>
            </div>
        </div>
    </section>


    <section class="third">
        <div class="container py-5">
            <h2 class="text-center"> Advantages of Marketing Your Business on the Internet</h2>
            <div class="row">
                <div class="col-md-6 my-2 col-12">
                    <div class="cards">
                        <div class="icon">
                            <img src="{{ asset('justping-front/img/19197604.jpg') }}" alt="Virtual Shop">
                            <h3 class="titles">Virtual Shop</h3>
                        </div>
                        <p class="description">
                            24/7 Availability: JustPing is always open! Customers can shop anytime, making it easy to
                            browse and buy whenever they want—boosting sales and satisfaction.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 my-2 col-12">
                    <div class="cards">
                        <div class="icon">
                            <img src="{{ asset('justping-front/img/19197604.jpg') }}" alt="Virtual Shop">
                            <h3 class="titles"> Broad Exposure</h3>
                        </div>
                        <p class="description">
                            The online world attracts a wide range of potential buyers,
                            giving your products greater visibility and reaching more
                            customers without the need for in-person visits.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 my-2 col-12">
                    <div class="cards">
                        <div class="icon">
                            <img src="{{ asset('justping-front/img/19197604.jpg') }}" alt="Virtual Shop">
                            <h3 class="titles"> SEO Benefits</h3>
                        </div>
                        <p class="description">
                            JustPing helps your products get discovered through search
                            engine optimization, driving organic traffic to your shop
                            and increasing visibility without extra cost.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 my-2 col-12">
                    <div class="cards">
                        <div class="icon">
                            <img src="{{ asset('justping-front/img/19197604.jpg') }}" alt="Virtual Shop">
                            <h3 class="titles"> Flexibility</h3>
                        </div>
                        <p class="description">
                            The online world attracts a wide range of potential buyers,
                            giving your products greater visibility and reaching more
                            customers without the need for in-person visits.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="fourth">
        <div class="container">
            <div class=" my-4">
                <h2 class="text-center py-4">Popular Categories on JustPing</h2>
                <div class="row">
                    <div class="col-md-3 col-12">
                        <div class="card-box" style="background-image:url('{{ asset('justping-front/img/category/AC-Repair.jpg') }}'); background-position: center;">
                            <div class="card_content">
                                <div class="card_title">AC Services</div>
                            </div>
                            <div class="card_bottom_shadow"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="card-box" style="background-image:url('{{ asset('justping-front/img/category/business.png') }}'); background-position: center;">
                            <div class="card_content">
                                <div class="card_title">Rent</div>
                            </div>
                            <div class="card_bottom_shadow"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="card-box" style="background-image:url('{{ asset('justping-front/img/category/event.png') }}'); background-position: center;">
                            <div class="card_content">
                                <div class="card_title">Event Organisers</div>
                            </div>
                            <div class="card_bottom_shadow"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="card-box" style="background-image:url('{{ asset('justping-front/img/category/massage.png') }}'); background-position: center;">
                            <div class="card_content">
                                <div class="card_title">Beauty Spa</div>
                            </div>
                            <div class="card_bottom_shadow"></div>
                        </div>
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-md-3 col-12">
                        <div class="card-box" style="background-image:url('{{ asset('justping-front/img/category/packer-movers.png') }}'); background-position: center;">
                            <div class="card_content">
                                <div class="card_title">Packers & Movers</div>
                            </div>
                            <div class="card_bottom_shadow"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="card-box" style="background-image:url('{{ asset('justping-front/img/category/painting.png') }}'); background-position: center;">
                            <div class="card_content">
                                <div class="card_title">Painting and Contractors</div>
                            </div>
                            <div class="card_bottom_shadow"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="card-box" style="background-image:url('{{ asset('justping-front/img/category/pest-control.png') }}'); background-position: center;">
                            <div class="card_content">
                                <div class="card_title">Pest Control Services</div>
                            </div>
                            <div class="card_bottom_shadow"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="card-box" style="background-image:url('{{ asset('justping-front/img/category/resturant.png') }}'); background-position: center;">
                            <div class="card_content">
                                <div class="card_title">Restaurants</div>
                            </div>
                            <div class="card_bottom_shadow"></div>
                        </div>
                    </div>
                </div>
                <div class="my-5 text-center">
                    <h3>Still Have Questions? <br> Talk to Us to List Your Business</h3>
                    <button class="btn btn-call mt-4">Call Now</button>
                </div>
            </div>
        </div>
    </section>

    <section class="fifth">
        <div class="container py-5 footer">
            <div class="row">
                <div class="col-12">
                    <h5><strong>Top Cities (India)</strong> </h5><br>
                    <p class="para1">
                        <a href="#">Chennai</a> 
                        <a href="#">Mumbai</a> 
                        <a href="#">Hyderabad</a> 
                        <a href="#">Bangalore</a> 
                        <a href="#">Delhi</a> 
                        <a href="#">Kolkata</a> 
                        <a href="#">Pune</a> 
                        <a href="#">Ahmedabad</a> 
                        <a href="#">Faridabad</a> 
                        <a href="#">Ghaziabad</a> 
                        <a href="#">Noida</a> 
                        <a href="#">Gurgaon</a> 
                        <a href="#">Greater Noida</a> 
                        <a href="#">Chandigarh</a> 
                        <a href="#">Coimbatore</a> 
                        <a href="#">Jaipur</a> 
                        <a href="#">Nagpur</a> 
                        <a href="#">Surat</a> 
                        <a href="#">Vadodara</a> 
                        <a href="#">Vijayawada</a> 
                        <a href="#">Visakhapatnam</a> 
                        <a href="#">Indore</a> 
                        <a href="#">Lucknow</a>
                    </p>                    
                    <hr>
                </div>
                <div class="col-12">
                    
            <h5><strong>Popular Categories</strong> </h5><br>
            <p class="para">
                <a href="#">Body Massage Center</a> |
                <a href="#">Hospitals</a> |
                <a href="#">Beauty Parlour</a> |
                <a href="#">Estate Agents</a> |
                <a href="#">Banquet Hall</a> |
                <a href="#">ENT Doctors</a> |
                <a href="#">Wedding Planner</a> |
                <a href="#">Education</a> |
                <a href="#">Rent & Hire</a> |
                <a href="#">Contractors</a> |
                <a href="#">Pet Shop</a> |
                <a href="#">Pg/Hostels</a> |
                <a href="#">Dentists</a> |
                <a href="#">Gyms</a> |
                <a href="#">Loans</a> |
                <a href="#">Events Organizers</a> |
                <a href="#">Driving School</a> |
                <a href="#">Packer & Movers</a> |
                <a href="#">Courier Service</a> |
                <a href="#">AC Services</a> |
                <a href="#">Nursing Services</a> |
                <a href="#">Scrap Dealer</a> |
                <a href="#">Pest Control Services</a> |
                <a href="#">Furniture & Decor</a> |
                <a href="#">Services</a> |
                <a href="#">Transporters</a> |
                <a href="#">Fabricators</a> |
                <a href="#">Painting Contractors</a> |
                <a href="#">Medical Equipments</a> |
                <a href="#">Construction Materials</a> |
                <a href="#">Restaurants</a>
            </p>            
                </div>
              <!--  <div class="col-12">
                    <div class="my-4 d-flex align-items-baseline">
                        <h5><strong>Follow Us</strong> </h5>
                        <ul class="social">
                            <li><i class="fa fa-brands fa-facebook-f"></i></li>
                            <li><i class="fa fa-brands fa-twitter"></i></li>
                            <li><i class="fa fa-brands fa-instagram"></i></li>
                            <li><i class="fa fa-brands fa-whatsapp"></i></li>
                          </ul>
                    </div>
                </div>-->
            </div>
        </div>
    </section>
    
@endsection