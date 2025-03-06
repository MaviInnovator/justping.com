@extends('front.layouts.master')

@section('seo_title', $global_other_page_items->page_about_seo_title)
@section('seo_meta_description', $global_other_page_items->page_about_seo_meta_description)

@section('content')
  <!-- Header Area End Here -->
        <section class="listing-details-section"  style="background-image: url({{ asset('uploads/'.$brands->banner) }});"> 
		<div class="container">
			<div class="row about-breadcrumbs">
				<div class="col-md-6">
					<div class="about-head">
						<h2>Listing</h2>
					</div>
				</div>
				<div class="col-md-6">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumbs">
							<li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
							<li class="breadcrumb-item active" aria-current="page">Listing</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
      <!-- Products Area Start Here -->
        <section class="products-layout1 products-first s-space-default best-franchise-opportunity generic" id="best-franchise-opportunity">
      
        </section>
              

@endsection