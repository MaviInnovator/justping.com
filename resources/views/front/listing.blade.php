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
      
            <div class="container menu-list-wrapper">
                <div class="menu-list category-grid-layout2 zoom-gallery">
                   <div class="trending-franchise-wrap">
                    
                          @foreach($brands as $brand)
                                                    
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section">
                                <a href="#" target="_blank"> <img src="{{ asset('uploads/'.$brand->photo) }}" alt="Kathi Junction" loading="lazy" width="205" height="100"></a>
                            </div>
                        </div>
                        <div class="card-body-section">
                            <h2>
                                <a href="#" target="_blank">{{ $brand->name }}
                                </a>
                            </h2>
                            <p><span class="rating">4.0 ★</span> Dining</p>
                             
                <p class="category">@foreach($categories as $cat) {{ in_array($cat->name, $selectedSubcategories) ? $cat->name : '' }}  @endforeach</p>
                
                <p class="location">{{ $brand->location }}, {{ $brand->city }}</p>
                         
                            
                            <div class="link-section"><a href="{{ route('listing_details',$brand->id) }}" target="_blank">Know More</a></div>
                        </div>
                    </div>
                             @endforeach                  
              </div>
                </div>
            </div>
        </section>
              

@endsection