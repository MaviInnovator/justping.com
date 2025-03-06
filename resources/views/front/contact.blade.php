@extends('front.layouts.master')

@section('seo_title', $global_other_page_items->page_contact_seo_title)
@section('seo_meta_description', $global_other_page_items->page_contact_seo_meta_description)

@section('content')
        <section class="about-section"  style="background-image: url({{ asset('uploads/'.$global_setting->banner) }});"> 
		<div class="container">
			<div class="row about-breadcrumbs">
				<div class="col-md-6">
					<div class="about-head">
						<h2>Contact Us</h2>
					</div>
				</div>
				<div class="col-md-6">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumbs">
							<li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
							<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
 <!-- About Area Start Here -->
        <div class="section-white">
		<div class="container">
			<div class="contact-title text-center">
				<h3>Let's Discuss Your Idea</h3>
				<p>We appreciate your interest in VR Soft Solutions</p>
			</div>
			<div class="row">
				<div class="col-md-5">
					<div class="loc-box contact-pg">
						<i class="ri-map-pin-line"></i>
						<h6>Location</h6>
					
            <p>A12/13 Noida Sector 16 ,
Gautam buddha nagar ,
Uttar Pradesh - 201301</p>
					</div>
					<div class="loc-box contact-pg">
						<i class="ri-mail-send-line"></i>
						<h6>Mail us</h6>
						<p> info@justping.com</p>
					</div>
					<div class="loc-box contact-pg">
						<i class="ri-24-hours-line"></i>
						<h6>Contact Number</h6>
						<p>+91 98181 33151,+91 9266434392</p>
					</div>
				</div>
				<div class="col-md-7">
					<div class="contact-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
						<form action="#" >
							<div class="row">
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="ri-user-line"></i></div>
										</div>
										<input type="text" class="form-control" id="" placeholder="First Name" fdprocessedid="1jko0a">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="ri-user-line"></i></div>
										</div>
										<input type="text" class="form-control" id="" placeholder="Last Name" fdprocessedid="1jko0a">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="ri-mail-line"></i></div>
										</div>
										<input type="text" class="form-control" id="" placeholder="Enter E-mail" fdprocessedid="s0xesu">
									</div>
								</div>
								<div class="col-sm-6 ">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="ri-phone-line"></i></div>
										</div>
										<input type="text" class="form-control" id="" placeholder="Mobile Number" fdprocessedid="8dkw0v">
									</div>
								</div>
								<div class="col-sm-6 my-1">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="ri-git-pull-request-line"></i></div>
										</div>
										
										<input type="text" class="form-control" id="" placeholder="Country" fdprocessedid="8dkw0v">
									</div>
								</div>
								
								<div class="col-sm-6 my-1">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="ri-git-pull-request-line"></i></div>
										</div>
										
										<input type="text" class="form-control" id="" placeholder="State" fdprocessedid="8dkw0v">
									</div>
								</div>
								<div class="form-group mb-4">
									<textarea class="form-control" id="" placeholder="Enquiry Description" rows="5"></textarea>
								</div>
							</div>
							<button class="theme-btn btn-style-three" type="submit" name="submit-form" fdprocessedid="d7zaea"><span class="txt">Send Now</span></button>

						</form>
					</div>
				</div>

			</div>
		</div>
	</div>

@if($global_setting->map != '')
<section class="map-section">
    {!! $global_setting->map !!}
</section>
@endif

@endsection