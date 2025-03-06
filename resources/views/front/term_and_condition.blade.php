@extends('front.layouts.master')

@section('seo_title', $global_other_page_items->page_about_seo_title)
@section('seo_meta_description', $global_other_page_items->page_about_seo_meta_description)

@section('content')
  <!-- Header Area End Here -->
        <section class="about-section"> 
		<div class="container">
			<div class="row about-breadcrumbs">
				<div class="col-md-6">
					<div class="about-head">
						<h2>{{ $global_other_page_items->page_about_title }}</h2>
					</div>
				</div>
				<div class="col-md-6">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumbs">
							<li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ $global_other_page_items->page_about_title }}</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
       
    <div class="leading-page py-4">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="leading-content">
						<div class="head-title">
							<h2 class="nusys-title aos-init aos-animate" data-aos="fade-up">Who we are</h2>
							<p class="m-top-30 text-black aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">At JustPing, we are dedicated to simplifying the way businesses and customers connect. Operating 24/7, our platform serves as a comprehensive hub for discovering services, products, and business opportunities across various industries. Whether you're looking for a trusted service provider, a promising franchise opportunity, or ways to expand your business, JustPing is your go-to platform.</p>
							<p data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">We specialize in providing detailed listings for a wide range of categories, including healthcare, education, food & beverage, beauty, fitness, and much more. Our goal is to bring you closer to the businesses and services that matter most, all in one place, and available at your convenience.</p>

							<h2 class="nusys-title aos-init aos-animate" data-aos="fade-up">Our Services</h2>
							<p data-aos="fade-up" data-aos-delay="400" class="aos-init">24/7 Availability: Access essential services and business opportunities whenever you need them, at any time. Franchise Opportunities: Explore a variety of franchise options and learn everything you need to know about investment, location, and business potential. Lead Generation: We help businesses grow by connecting them with potential clients and customers, generating valuable leads to boost their success.</p>
							
							<div class="separator-left"></div>
						</div>
					</div>
				</div>
				<!-- <div class="col-md-5">
					<div class="leading-img0">
						<img src="assets/img/about1.png" alt="slider" class="img-fluid" data-aos="fade-left">
					</div>
				</div> -->
			</div>
            <h2>Meet Our Team</h2>
        <div class="team-container">
            <div class="team-member">
                <img src="img/ceo.jpeg" alt="Team Member">
                <h3>Syed Shahab Mujtaba</h3>
                <p>CEO & Founder</p>
                <div class="social-icons">
                    <a href="#"><img src="img/twitter.png"></a>
                    <a href="#"><img src="img/linkedin.png"></a>
                 
                </div>
            </div>
           
        
        </div>
		</div>
        
	</div>
              

@endsection