@extends('front.layouts.master')

@section('seo_title', $global_other_page_items->page_privacy_seo_title)
@section('seo_meta_description', $global_other_page_items->page_privacy_seo_meta_description)

@section('content')
<!-- Start main-content -->
        <section class="about-section"  style="background-image: url({{ asset('uploads/'.$global_setting->banner) }});"> 
		<div class="container">
			<div class="row about-breadcrumbs">
				<div class="col-md-6">
					<div class="about-head">
						<h2>Privacy Policy</h2>
					</div>
				</div>
				<div class="col-md-6">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumbs">
							<li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
							<li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
<!-- end main-content -->
   
    <div class="leading-page py-4">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="leading-content">
						<div class="head-title">
							<h2 class="nusys-title aos-init aos-animate" data-aos="fade-up">Introduction</h2>
							<p class="m-top-30 text-black aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">JustPing.com ("JustPing," "we," "our," or "us") respects your privacy and is committed to protecting your personal information. This Privacy Policy outlines how we collect, use, share, and process your personal data through our website (www.justping.com) and any related mobile applications or services (collectively, the "Platform"). </p>
							<p data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">This Privacy Policy is a legally binding document that governs your use of our Platform and services. By accessing or using our Platform, you agree to be bound by the terms of this Privacy Policy and our Terms of Service. If you do not agree, please do not use our Platform. 
</p>
										<p data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">You voluntarily disclose your Personal Information when using our Platform. While you can browse without providing certain information, some services may require you to provide specific details. If you are a corporate customer, any existing non-disclosure agreements will remain in effect. 

</p>

							<h2 class="nusys-title aos-init aos-animate" data-aos="fade-up">Application of Policy</h2>
							<p data-aos="fade-up" data-aos-delay="400" class="aos-init">This policy applies to all users, vendors, service providers, partners, and employees who access or use our Platform. It covers all data we hold relating to identifiable individuals, including names, addresses, phone numbers, email addresses, and any other information collected during your use of our Platform. 
</p><p data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">This Privacy Policy is part of our Terms of Service and covers the treatment of user information, including personally identifiable information, obtained through our Platform. It does not apply to the practices of organizations we do not own or people we do not employ. </p>
							<h2 class="nusys-title aos-init aos-animate" data-aos="fade-up">Objectives of Policy</h2>
							<p data-aos="fade-up" data-aos-delay="400" class="aos-init">Our goal is to collect and use your information responsibly and securely. This policy ensures we comply with data protection laws and best practices, protecting the rights of all users, vendors, employees, and partners. We aim to be transparent about how we collect, store, and process your data and protect it from unauthorized access or breaches. 
 </p>
							<h2 class="nusys-title aos-init aos-animate" data-aos="fade-up">Collection of Information</h2>
							<p data-aos="fade-up" data-aos-delay="400" class="aos-init">We collect information to provide and improve our services. This information may be collected online or offline, and the same privacy protections apply regardless of the collection method. 
 </p>
							<p>We collect Personal Information when you: </p>
							<ul>
								<li>* Create an account. </li>
								<li>* Use our services. </li>
								<li>* Contact customer support.  </li>
								<li>* Conduct transactions. </li>
								<li>* Submit reviews or other user-generated content.  </li>
								<li>* Provide information voluntarily.  </li>

							</ul>
							<p>Information collected may include: </p>
							<ul>
	<li>* Personal Identifying Information: Name, address, phone number, email address, age, profile picture, etc. 
	<li>* Payment Information:Credit/debit card details, payment instrument details. </li>
	<li>* KYC Documents: Officially valid documents (OVDs) such as driving licenses, Aadhaar cards, passports, etc., as required by regulatory compliance. </li>
	<li>* Business Information: For vendors and sellers, information such as business registration, GST details, etc. </li>
	<li>* Automatic Information:IP address, login details, device information, location data, browsing history, etc. </li>
	<li>* Information from Other Sources: Updated address information, account information from partners, search results, etc. </li>
	<li>* Employee/Reseller Information: Personal identifying information, educational information, KYC documents. </li>
	<li>* Third-Party Information: Corporate and financial information about partners, location data, device information. </li>
</ul>
	<p>Examples of collected information, by source </p>
							<ul>
	<li>* Users/Customers: Contact details, location, device information, purchase history, reviews, voice recordings during calls. </li>
	<li>* Vendors/Sellers: Contact details, business information, payment information, KYC documents, device logs. </li>
	<li>* Automatic Information: IP address, login details, device location, content interaction, usage history.</li> 
	<li>* Information from Other Sources: Delivery information, partner data, search results, device details. </li>
	<li>* Officials/Employees/Resellers: Contact details, educational information, KYC documents, payment information. </li>
	<li>* Third-Party Information: Corporate and financial data, location data, device information. </li>
</ul>
							<h2 class="nusys-title aos-init aos-animate" data-aos="fade-up">Information We Do Not Collect:</h2>
							<p data-aos="fade-up" data-aos-delay="400" class="aos-init">JustPing.com does not collect sensitive personal data unless necessary for providing a service or fulfilling a legal obligation. We do not collect emails, addresses, or other contact information from your mobile address book beyond names and phone numbers. We do not store historical location data, except for the last known location when accessing our software. 
 </p>
							<p>We ensure you are informed about: </p>
							<ul>
								<li>* The information being collected. </li>
								<li>* The purpose of collection. </li>
								<li>* The intended recipients.</li>
								<li>* The collecting and retaining agencies. </li>

							</ul>
							<p>We only collect data with your valid consent or when necessary for contractual, legal, or public interest purposes. </p>
							<h2 class="nusys-title aos-init aos-animate" data-aos="fade-up">Usage of Information:</h2>
							<p data-aos="fade-up" data-aos-delay="400" class="aos-init">We use your information for </p>
							<ul>
								<li>* Providing and improving our services. 
								<li>* Fulfilling your requests. </li>
								<li>* Personalizing your experience. </li>
								<li>* Communicating with you. </li>
								<li>* Preventing fraud and abuse. </li>
								<li>* Complying with legal obligations. </li>
								<li>* Marketing and promotional activities. </li>
								<li>* Operational and maintenance purposes. </li>
								<li>* Sharing information with vendors and partners to fulfill service requests. </li>

							</ul>
							
							<p data-aos="fade-up" data-aos-delay="400" class="aos-init">We may share your information with vendors, service providers, and business partners to provide you with access to our products and services, process orders, improve customer experience, resolve disputes, collect payments, and comply with legal obligations. 
 </p>
							<h2 class="nusys-title aos-init aos-animate" data-aos="fade-up">Processing of Personal Information:</h2>
							<p data-aos="fade-up" data-aos-delay="400" class="aos-init">We process personal data for </p>
							<ul>
								<li>* Legal compliance. </li>
								<li>* Medical emergencies and public health. </li>
								<li>* Employment-related activities. </li>
								<li>* Other reasonable purposes, including fraud prevention and security. * Processing children's data with parental consent. </li>
								<li>* Processing sensitive data with explicit consent. </li>


							</ul>
								<h2 class="nusys-title aos-init aos-animate" data-aos="fade-up">Disclosure of Information:</h2>
							<p data-aos="fade-up" data-aos-delay="400" class="aos-init">We may disclose your information to</p>
							<ul>
								<li>* Other users of our services, consistent with the service's functionality. * Third-party service providers for necessary functions. </li>
<li>* Vendors, sellers, and business partners. </li>
<li>* Law enforcement or legal authorities when required. </li>

							</ul>
							<p data-aos="fade-up" data-aos-delay="400" class="aos-init">We do not sell your personally identifiable information for marketing purposes without your consent. We may share information with third parties for service-related purposes, such as processing payments or fulfilling orders.
We may disclose your information to comply with legal obligations, enforce our terms of service, or protect our rights and the rights of others. </p>

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
   
		</div>
        
	</div>
<!--<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! clean($global_other_page_items->page_privacy_content) !!}
            </div>
        </div>
    </div>
</section>-->
@endsection