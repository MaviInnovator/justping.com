@extends('front.layouts.master')

@section('seo_title', $global_setting->home_seo_title)
@section('seo_meta_description', $global_setting->home_seo_meta_description)

@section('content')

<!-- Slider Section -->
         <!-- Products Area Start Here -->
        <section class=" s-space-custom-slider ">
        
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators/Dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- Slides -->
    <div class="carousel-inner">
         @foreach($sliders as $item)
      <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
        <img src="{{ asset('uploads/'.$item->photo) }}" class="d-block sliderImg" alt="BizzOpp Awards, Celebrities, Nomination">
        <div class="carousel-caption d-none d-md-block">
          <!--<h5>First Slide</h5>-->
          <!--<p>Some placeholder text for the first slide.</p>-->
        </div>
      </div>
       @endforeach
      
    </div>

    <!-- Controls -->
    <!--<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">-->
    <!--  <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
    <!--  <span class="visually-hidden">Previous</span>-->
    <!--</button>-->
    <!--<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">-->
    <!--  <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
    <!--  <span class="visually-hidden">Next</span>-->
    <!--</button>-->
  </div>

        </section>
        <!-- Products Area End Here -->
        <!-- Selling Process Area Start Here -->
        <!-- Selling Process Area Start Here -->
        <section class="bg-body s-space-regular">
         <div class="container-fluid">
             <div class="row">
                   <div class="col-sm-2 ad-banner1" style="background-image: url({{ asset('justping-front/img/banner/sidebanner1.jpeg') }} ); background-repeat: no-repeat;
    background-position: center; height: 972px;"> </div>
                  <div class="col-sm-8">
                      
               <div class="section-title-dark">
				   <h2>Top Categories</h2>
               </div>
               <div class="container">
                <div class="container mt-4">
                    <div class="row process-area">
                         @foreach($category as $item)
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 category-box">
                           <a href="#" target="_blank"> <img src="{{ asset('uploads/'.$item->icon) }}" alt="Restaurants" class="img-fluid">
                          <a href="#" target="_blank">  <h3>{{ $item->name }} </h3></a>
                        </div>
                       @endforeach
                    </div>
                </div>
                
            </div>
            
                  </div>
                  	 <div class="col-sm-2 celebrityBanner" style="background-image: url({{ asset('justping-front/img/banner/sidebanner2.jpeg') }});background-repeat: no-repeat;background-position: center; height: 972px;"></div>
       
             </div>
         </div>
       </section>
  
        <!-- Selling Process Area End Here -->
        
        <!-- Service Area Start Here -->
     <!--   <section class="service-layout1  s-space-custom3">
            <div class="container">
                <div class="section-title-dark">
                    <p>Browse Our Top Categories</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        <div class="service-box1 bg-body text-center">
                            <img src="img/service/service1.png" alt="service" class="img-fluid">
                            <h3 class="title-medium-dark mb-none"><a href="category-list-layout1.html">Electronics</a></h3>
                            <div class="view">(19,805)</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        <div class="service-box1 bg-body text-center">
                            <img src="img/service/service2.png" alt="service" class="img-fluid">
                            <h3 class="title-medium-dark mb-none"><a href="category-grid-layout1.html">Cars &amp; Vehicles</a></h3>
                            <div class="view">(12,857)</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        <div class="service-box1 bg-body text-center">
                            <img src="img/service/service3.png" alt="service" class="img-fluid">
                            <h3 class="title-medium-dark mb-none"><a href="category-list-layout2.html">Overseas Jobs</a></h3>
                            <div class="view">(16,267)</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        <div class="service-box1 bg-body text-center">
                            <img src="img/service/service4.png" alt="service" class="img-fluid">
                            <h3 class="title-medium-dark mb-none"><a href="category-grid-layout2.html">Pets &amp; Animals</a></h3>
                            <div class="view">(1,245)</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        <div class="service-box1 bg-body text-center">
                            <img src="img/service/service5.png" alt="service" class="img-fluid">
                            <h3 class="title-medium-dark mb-none"><a href="category-list-layout3.html">Hobby, Sport &amp; Kids</a></h3>
                            <div class="view">(15,897)</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        <div class="service-box1 bg-body text-center">
                            <img src="img/service/service6.png" alt="service" class="img-fluid">
                            <h3 class="title-medium-dark mb-none"><a href="category-grid-layout3.html">House &amp; Appartment</a></h3>
                            <div class="view">(13,657)</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        <div class="service-box1 bg-body text-center">
                            <img src="img/service/service7.png" alt="service" class="img-fluid">
                            <h3 class="title-medium-dark mb-none"><a href="category-list-layout1.html">Education</a></h3>
                            <div class="view">(19,227)</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 item-mb">
                        <div class="service-box1 bg-body text-center">
                            <img src="img/service/service8.png" alt="service" class="img-fluid">
                            <h3 class="title-medium-dark mb-none"><a href="category-grid-layout1.html">Home &amp; Garden</a></h3>
                            <div class="view">(11,607)</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
       
        <!-- Products Area Start Here -->
        <section class="products-layout1 products-first s-space-default best-franchise-opportunity generic" id="best-franchise-opportunity">
            <div class="container">
                <div class="section-title-dark">
                    <h2>Top Business Opportunities</h2>
                </div>
            </div>
            <div class="container menu-list-wrapper">
                <div class="menu-list category-grid-layout2 zoom-gallery">
                   <div class="trending-franchise-wrap">
                    
                        
                                                    
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section">
                                <a href="#" target="_blank"> <img src="https://franchiseindia.s3.ap-south-1.amazonaws.com/tbo/08091823458119.webp" alt="Kathi Junction" loading="lazy" width="205" height="100"></a>
                            </div>
                        </div>
                        <div class="card-body-section">
                            <p>
                                <a href="#" target="_blank">Food and Beverage</a>
                            </p>
                            <h2>
                                <a href="#" target="_blank">Kathi Junction
                                </a>
                            </h2>
                            <div class="d-flex">
                                <div class="card-info">  Investment range</div>
                                <div class="card-info-amt">  ₹5L - 10L</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Area Required</div>
                                <div class="card-info-amt"> 100 - 1500</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Franchise Outlets</div>
                                <div class="card-info-amt"> 100-200</div>
                            </div>
                            <div class="link-section"><a href="#" target="_blank">Know More</a></div>
                        </div>
                    </div>
                                              
                        
                                                    
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section">
                                <a href="#" target="_blank"> <img src="https://franchiseindia.s3.ap-south-1.amazonaws.com/tbo/12191013398348.webp" alt="Sheffield School" loading="lazy" width="205" height="100"></a>
                            </div>
                        </div>
                        <div class="card-body-section">
                            <p>
                                <a href="#" target="_blank">Education</a>
                            </p>
                            <h2>
                                <a href="#" target="_blank">Sheffield School
                                </a>
                            </h2>
                            <div class="d-flex">
                                <div class="card-info">  Investment range</div>
                                <div class="card-info-amt">  ₹5L - 10L</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Area Required</div>
                                <div class="card-info-amt"> 1500 - 2000</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Franchise Outlets</div>
                                <div class="card-info-amt"> 20-50</div>
                            </div>
                            <div class="link-section"><a href="#" target="_blank">Know More</a></div>
                        </div>
                    </div>
                                              
                        
                                                    
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section">
                                <a href="#" target="_blank"> <img src="https://franchiseindia.s3.ap-south-1.amazonaws.com/tbo/01141024073549.webp" alt="Ribbons Ice Cream" loading="lazy" width="205" height="100"></a>
                            </div>
                        </div>
                        <div class="card-body-section">
                            <p>
                                <a href="#" target="_blank">Food and Beverage</a>
                            </p>
                            <h2>
                                <a href="#" target="_blank">Ribbons Ice Cream
                                </a>
                            </h2>
                            <div class="d-flex">
                                <div class="card-info">  Investment range</div>
                                <div class="card-info-amt">  ₹10L - 20L</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Area Required</div>
                                <div class="card-info-amt"> 65 - 1000</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Franchise Outlets</div>
                                <div class="card-info-amt"> Less than 10</div>
                            </div>
                            <div class="link-section"><a href="#" target="_blank">Know More</a></div>
                        </div>
                    </div>
                                              
                        
                                                    
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section">
                                <a href="#" target="_blank"> <img src="https://franchiseindia.s3.ap-south-1.amazonaws.com/tbo/0426239958496.jpg" alt="The British Institutes" loading="lazy" width="205" height="100"></a>
                            </div>
                        </div>
                        <div class="card-body-section">
                            <p>
                                <a href="#" target="_blank">Education</a>
                            </p>
                            <h2>
                                <a href="#" target="_blank">The British Institutes
                                </a>
                            </h2>
                            <div class="d-flex">
                                <div class="card-info">  Investment range</div>
                                <div class="card-info-amt">  ₹5L - 10L</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Area Required</div>
                                <div class="card-info-amt"> 400 - 1500</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Franchise Outlets</div>
                                <div class="card-info-amt"> 20-50</div>
                            </div>
                            <div class="link-section"><a href="#" target="_blank">Know More</a></div>
                        </div>
                    </div>
                                              
                        
                                                    
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section">
                                <a href="#" target="_blank"> <img src="https://franchiseindia.s3.ap-south-1.amazonaws.com/tbo/0109592025522.webp" alt="Fiery Pot Foods" loading="lazy" width="205" height="100"></a>
                            </div>
                        </div>
                        <div class="card-body-section">
                            <p>
                                <a href="#" target="_blank">Food and Beverage</a>
                            </p>
                            <h2>
                                <a href="#" target="_blank">Fiery Pot Foods
                                </a>
                            </h2>
                            <div class="d-flex">
                                <div class="card-info">  Investment range</div>
                                <div class="card-info-amt">  ₹10L - 20L</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Area Required</div>
                                <div class="card-info-amt"> 200 - 600</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Franchise Outlets</div>
                                <div class="card-info-amt"> 10-20</div>
                            </div>
                            <div class="link-section"><a href="#" target="_blank">Know More</a></div>
                        </div>
                    </div>
                                              
                        
                                                    
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section">
                                <a href="#" target="_blank"> <img src="https://franchiseindia.s3.ap-south-1.amazonaws.com/tbo/1201230092100.jpg" alt="Coolbean Studios" loading="lazy" width="205" height="100"></a>
                            </div>
                        </div>
                        <div class="card-body-section">
                            <p>
                                <a href="#" target="_blank">Education</a>
                            </p>
                            <h2>
                                <a href="#" target="_blank">Coolbean Studios
                                </a>
                            </h2>
                            <div class="d-flex">
                                <div class="card-info">  Investment range</div>
                                <div class="card-info-amt">  ₹5L - 10L</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Area Required</div>
                                <div class="card-info-amt"> 1000 - 1500</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Franchise Outlets</div>
                                <div class="card-info-amt"> Less than 10</div>
                            </div>
                            <div class="link-section"><a href="#" target="_blank">Know More</a></div>
                        </div>
                    </div>
                                              
                        
                                                    
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section">
                                <a href="#" target="_blank"> <img src="https://franchiseindia.s3.ap-south-1.amazonaws.com/tbo/0102275526700.webp" alt="Impressions Preschools" loading="lazy" width="205" height="100"></a>
                            </div>
                        </div>
                        <div class="card-body-section">
                            <p>
                                <a href="#" target="_blank">Education</a>
                            </p>
                            <h2>
                                <a href="#" target="_blank">Impressions Preschools
                                </a>
                            </h2>
                            <div class="d-flex">
                                <div class="card-info">  Investment range</div>
                                <div class="card-info-amt">  ₹30L - 50L</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Area Required</div>
                                <div class="card-info-amt"> 3500 - 5000</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Franchise Outlets</div>
                                <div class="card-info-amt"> Less than 10</div>
                            </div>
                            <div class="link-section"><a href="#" target="_blank">Know More</a></div>
                        </div>
                    </div>
                                              
                        
                                                    
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section">
                                <a href="#" target="_blank"> <img src="https://franchiseindia.s3.ap-south-1.amazonaws.com/tbo/11291791003824.webp" alt="ThirsTea" loading="lazy" width="205" height="100"></a>
                            </div>
                        </div>
                        <div class="card-body-section">
                            <p>
                                <a href="#" target="_blank">Food and Beverage</a>
                            </p>
                            <h2>
                                <a href="#" target="_blank">ThirsTea
                                </a>
                            </h2>
                            <div class="d-flex">
                                <div class="card-info">  Investment range</div>
                                <div class="card-info-amt">  ₹10L - 20L</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Area Required</div>
                                <div class="card-info-amt"> 600 - 1200</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Franchise Outlets</div>
                                <div class="card-info-amt"> 10-20</div>
                            </div>
                            <div class="link-section"><a href="#" target="_blank">Know More</a></div>
                        </div>
                    </div>
                                              
                        
                                                    
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section">
                                <a href="#" target="_blank"> <img src="https://franchiseindia.s3.ap-south-1.amazonaws.com/tbo/04191194754007.webp" alt="Dr Smith Orthopedic Mattress" loading="lazy" width="205" height="100"></a>
                            </div>
                        </div>
                        <div class="card-body-section">
                            <p>
                                <a href="#" target="_blank">Retail</a>
                            </p>
                            <h2>
                                <a href="#" target="_blank">Dr Smith Orthopedic Mattress
                                </a>
                            </h2>
                            <div class="d-flex">
                                <div class="card-info">  Investment range</div>
                                <div class="card-info-amt">  ₹20L - 30L</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Area Required</div>
                                <div class="card-info-amt"> 1000 - 2000</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Franchise Outlets</div>
                                <div class="card-info-amt"> Less than 10</div>
                            </div>
                            <div class="link-section"><a href="#" target="_blank">Know More</a></div>
                        </div>
                    </div>
                                              
                        
                                                    
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section">
                                <a href="#" target="_blank"> <img src="https://franchiseindia.s3.ap-south-1.amazonaws.com/tbo/1113812413487.webp" alt="Hyundai Electronics" loading="lazy" width="205" height="100"></a>
                            </div>
                        </div>
                        <div class="card-body-section">
                            <p>
                                <a href="#" target="_blank">Retail</a>
                            </p>
                            <h2>
                                <a href="#" target="_blank">Hyundai Electronics
                                </a>
                            </h2>
                            <div class="d-flex">
                                <div class="card-info">  Investment range</div>
                                <div class="card-info-amt">  ₹10L - 20L</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Area Required</div>
                                <div class="card-info-amt"> 1000 - 2000</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Franchise Outlets</div>
                                <div class="card-info-amt"> 50-100</div>
                            </div>
                            <div class="link-section"><a href="#" target="_blank">Know More</a></div>
                        </div>
                    </div>
                                              
                        
                                                    
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section">
                                <a href="#" target="_blank"> <img src="https://franchiseindia.s3.ap-south-1.amazonaws.com/tbo/1026326140305.webp" alt="Cello World" loading="lazy" width="205" height="100"></a>
                            </div>
                        </div>
                        <div class="card-body-section">
                            <p>
                                <a href="#" target="_blank">Retail</a>
                            </p>
                            <h2>
                                <a href="#" target="_blank">Cello World
                                </a>
                            </h2>
                            <div class="d-flex">
                                <div class="card-info">  Investment range</div>
                                <div class="card-info-amt">  ₹20L - 30L</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Area Required</div>
                                <div class="card-info-amt"> 800 - 1200</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Franchise Outlets</div>
                                <div class="card-info-amt"> Less than 10</div>
                            </div>
                            <div class="link-section"><a href="#" target="_blank">Know More</a></div>
                        </div>
                    </div>
                                              
                        
                                                    
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section">
                                <a href="#" target="_blank"> <img src="https://franchiseindia.s3.ap-south-1.amazonaws.com/tbo/01142144524807.webp" alt="Edify Consultants" loading="lazy" width="205" height="100"></a>
                            </div>
                        </div>
                        <div class="card-body-section">
                            <p>
                                <a href="#" target="_blank">Education</a>
                            </p>
                            <h2>
                                <a href="#" target="_blank">Edify Consultants
                                </a>
                            </h2>
                            <div class="d-flex">
                                <div class="card-info">  Investment range</div>
                                <div class="card-info-amt">  ₹5L - 10L</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Area Required</div>
                                <div class="card-info-amt"> 200 - 600</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Franchise Outlets</div>
                                <div class="card-info-amt"> Less than 10</div>
                            </div>
                            <div class="link-section"><a href="#" target="_blank">Know More</a></div>
                        </div>
                    </div>
                                                              </div>
                </div>
                <div class="loadmore text-center item-mt">
                    <a href="#" class="cp-default-btn-primary">See All Album</a>
                </div>
            </div>
        </section>
        
        <section class="products-layout1 bg-body s-space-default top-dealership-opportunity dealer  generic" id="top-dealership-opportunity">
            <div class="container">
                <div class="section-title-dark">
                    <h2>Top Dealership Opportunity</h2>
                </div>
            </div>
            <div class="container menu-list-wrapper">
                <div class="menu-list category-grid-layout2 zoom-gallery">
                 <div class="trending-franchise-wrap">
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section">
                                <a href="#" target="_blank">
                                    <img src="https://img.franchiseindia.com/brands/logo/647963586.jpg" alt="Mini Metro EV" height="81" width="199" loading="lazy">
                                 </a>
                            </div>
                        </div>
                        <div class="card-body-section">
                            <p>
                                <a href="#" target="_blank">
                                    Electric Vehicles &amp; Parts</a>
                            </p>
                            <h2><a href="#" target="_blank">Mini Metro EV </a></h2>
                            <div class="d-flex">
                                <div class="card-info"> Investment Range</div>
                                <div class="card-info-amt"> ₹ 4 Lac - 15 Lac</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Space Required</div>
                                <div class="card-info-amt">1000 - 2000 Sq. ft</div>
                            </div>
                            
                            <div class="d-flex">
                                <div class="card-info">
                                    Location
                                </div>
                                
                            </div>
                            <div class="plc">
                                Andhra Pradesh, Tamil Nadu +34 More
                            </div>
                            <div class="link-section">
                                <a href="#" target="_blank">Know More</a>
                            </div>
                        </div>
                    </div>


                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section">
                                <a href="#" target="_blank">
                                    <img loading="lazy" src="https://img.franchiseindia.com/brands/logo/36946374.jpg" alt="Eze" height="81" width="199">
                                </a>
                            </div>
                        </div>
                        <div class="card-body-section">
                            <p>
                                <a href="#" target="_blank">Perfumes &amp; Fragrances </a>
                            </p>
                            <h2>
                                <a href="#" target="_blank">Eze </a></h2>
                            <div class="d-flex">
                                <div class="card-info"> Investment Range</div>
                                <div class="card-info-amt">  ₹ 5 Lac - 7 Lac</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info">
                                    Space Required

                                </div>
                                <div class="card-info-amt"> 200 - 250 Sq. ft</div>
                            </div>
                            
                            <div class="d-flex">
                                <div class="card-info">
                                    Location
                                </div>
                                <div class="card-info-amt"></div>
                            </div>
                            <div class="plc">
                                Maharashtra, Karnataka +1 More
                            </div>
                            <div class="link-section"><a href="#" target="_blank">Know More</a></div>
                        </div>
                    </div>



                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://img.franchiseindia.com/brands/logo/257198266.jpg" alt="rocketpay" height="81" width="199"></a></div>
                        </div>
                        <div class="card-body-section">
                            <p>
                                <a href="#" target="_blank"> Computer &amp; Mobile Softwares &amp; Apps</a>
                            </p>
                            <h2><a href="#" target="_blank"> RocketPay</a></h2>

                            <div class="d-flex">
                                <div class="card-info">
                                    Investment Range
                                </div>
                                <div class="card-info-amt">
                                    ₹ 75 K - 2 Lac
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info">
                                    Space Required
                                </div>
                                <div class="card-info-amt">
                                    NIL
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info">
                                    Location
                                </div>
                                <div class="card-info-amt"></div>
                            </div>
                            <div class="plc">
                                Assam, Manipur +35 More
                            </div>
                            <div class="link-section"><a href="#" target="_blank">Know More</a></div>
                        </div>
                    </div>



                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section">
                                <a href="#" target="_blank">
                                    <img loading="lazy" src="https://img.franchiseindia.com/brands/logo/795871608.jpg" alt="Arogyamithra" height="81" width="199">
                                </a>
                            </div>
                        </div>
                        <div class="card-body-section">
                            <p>
                                <a href="#" target="_blank">Healthcare &amp; Medical Products</a>
                            </p>
                            <h2><a href="#" target="_blank">Arogyamithra</a></h2>

                            <div class="d-flex">
                                <div class="card-info">
                                    Investment Range
                                </div>
                                <div class="card-info-amt">
                                    ₹ 15 K - 7.5 Lac
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info">
                                    Space Required
                                </div>
                                <div class="card-info-amt">
                                    100 - 250 Sq. ft
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info">
                                    Location
                                </div>
                                <div class="card-info-amt"></div>
                            </div>
                            <div class="plc">
                                Telangana, Andhra Pradesh
                            </div>
                            <div class="link-section"><a href="#" target="_blank">Know More</a></div>
                        </div>
                    </div>


                    
                </div>
                </div>
                <div class="loadmore text-center item-mt">
                    <a href="#" class="cp-default-btn-primary">See All Album</a>
                </div>
            </div>
        </section>
        <section class="products-layout1 products-first s-space-default covidproof  generic" id="covidproof">
            <div class="container">
                <div class="section-title-dark">
                    <h2>Top Franchise Opportunity</h2>
                </div>
            </div>
            <div class="container menu-list-wrapper">
                <div class="menu-list category-grid-layout2 zoom-gallery">
                <div class="trending-franchise-wrap">
                
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section"><a href="#" target="_blank">
                                <img src="https://franchiseindia.s3.ap-south-1.amazonaws.com/tbo/0419620894438.webp" alt="Vista Furnishing" height="100" width="205" loading="lazy"></a></div>
                        </div>
                        <div class="card-body-section">
                                                        <p>
                                <a href="#" target="_blank">Retail</a>
                            </p>
                            <h2>
                                <a href="#" target="_blank">Vista Furnishing</a>
                            </h2>
                            <div class="d-flex">
                                <div class="card-info"> Investment range</div>
                                <div class="card-info-amt"> ₹30L - 50L</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Area Required</div>
                                <div class="card-info-amt"> 1000 - 1500</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Franchise Outlets</div>
                                <div class="card-info-amt">20-50</div>
                            </div>
                            <div class="link-section"><a href="#" target="_blank">Know More</a></div>
                        </div>
                    </div>

                    
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section"><a href="#" target="_blank">
                                <img src="https://franchiseindia.s3.ap-south-1.amazonaws.com/tbo/0425823563873.webp" alt="Hush Puppies" height="100" width="205" loading="lazy"></a></div>
                        </div>
                        <div class="card-body-section">
                                                        <p>
                                <a href="#" target="_blank">Fashion</a>
                            </p>
                            <h2>
                                <a href="#" target="_blank">Hush Puppies</a>
                            </h2>
                            <div class="d-flex">
                                <div class="card-info"> Investment range</div>
                                <div class="card-info-amt"> ₹20L - 30L</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Area Required</div>
                                <div class="card-info-amt"> 500 - 1200</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Franchise Outlets</div>
                                <div class="card-info-amt">500-1000</div>
                            </div>
                            <div class="link-section"><a href="#" target="_blank">Know More</a></div>
                        </div>
                    </div>

                    
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section"><a href="#" target="_blank">
                                <img src="https://franchiseindia.s3.ap-south-1.amazonaws.com/tbo/0710910378158.webp" alt="The High Joint" height="100" width="205" loading="lazy"></a></div>
                        </div>
                        <div class="card-body-section">
                                                        <p>
                                <a href="#" target="_blank">Food and Beverage</a>
                            </p>
                            <h2>
                                <a href="#" target="_blank">The High Joint</a>
                            </h2>
                            <div class="d-flex">
                                <div class="card-info"> Investment range</div>
                                <div class="card-info-amt"> ₹10L - 20L</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Area Required</div>
                                <div class="card-info-amt"> 800 - 1500</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Franchise Outlets</div>
                                <div class="card-info-amt">10-20</div>
                            </div>
                            <div class="link-section"><a href="#" target="_blank">Know More</a></div>
                        </div>
                    </div>

                    
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section"><a href="#" target="_blank">
                                <img src="https://franchiseindia.s3.ap-south-1.amazonaws.com/tbo/12021534969907.webp" alt="Servall Automotive" height="100" width="205" loading="lazy"></a></div>
                        </div>
                        <div class="card-body-section">
                                                        <p>
                                <a href="#" target="_blank">Automotive</a>
                            </p>
                            <h2>
                                <a href="#" target="_blank">Servall Automotive</a>
                            </h2>
                            <div class="d-flex">
                                <div class="card-info"> Investment range</div>
                                <div class="card-info-amt"> ₹5L - 10L</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Area Required</div>
                                <div class="card-info-amt"> 500 - 700</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Franchise Outlets</div>
                                <div class="card-info-amt">20-50</div>
                            </div>
                            <div class="link-section"><a href="#" target="_blank">Know More</a></div>
                        </div>
                    </div>

                                    </div>
                </div>
                <div class="loadmore text-center item-mt">
                    <a href="#" class="cp-default-btn-primary">See All Album</a>
                </div>
            </div>
        </section>
        
        <section class="products-layout1 products-first s-space-default feature-franchise-companies  generic" id="feature-franchise-companies">
            <div class="container">
                <div class="section-title-dark">
                    <h2>Featured BizzOpp Companies</h2>
                </div>
            </div>
            <div class="container menu-list-wrapper">
                <div class="menu-list category-grid-layout2 zoom-gallery">
             <ul>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/03081335450634.webp" alt="Raymond Limited" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Raymond Limited</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹30lac - 50lac
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/08201666513676.webp" alt="Edumilestones" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Edumilestones</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹50 K - 2lac
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/0430529146303.webp" alt="Brewers Kettle" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Brewers Kettle</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹2L - 5L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/03131891041607.webp" alt="Alliance Recruitment Agency" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Alliance Recruitment A...</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹2L - 5L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/03281139053295.webp" alt="Mia by Tanishq" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Mia by Tanishq</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹50L - 1 Cr.
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/02231225559071.webp" alt="G-Fresh" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">G-Fresh</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹10L - 20L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/0923588418800.webp" alt="Killer" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Killer</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹20L - 30L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/0914623839280.webp" alt="DONNE BIRYANI PALACE" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">DONNE BIRYANI PALACE</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹30L - 50L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/03112095430787.webp" alt="Louis Philippe" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Louis Philippe</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹50L - 1 Cr.
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/02231437120641.webp" alt="Michaels Icecream Burger" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Michaels Icecream Burger</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹5L - 10L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/1114137702394.webp" alt="Goldstar" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Goldstar</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹5L - 10L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/06181059446367.webp" alt="Edujeo" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Edujeo</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹50 K - 2L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/1219697034205.webp" alt="Evolve India Solar" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Evolve India Solar</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹50K - 2L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/040340667897.webp" alt="NESCAFE" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">NESCAFE</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹10L - 20L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/0223967969989.webp" alt="Dale Carnegie" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Dale Carnegie</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹10L - 20L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/02231951271075.webp" alt="Chai Nagri" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Chai Nagri</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹10lac - 20lac
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/06041307131355.webp" alt="Croma" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Croma</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹2 Cr. - 5 Cr
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/1204761855547.webp" alt="South Indian Cafe" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">South Indian Cafe</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹20L - 30L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/11231292413604.webp" alt="Homes Under Budget" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Homes Under Budget</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹30L - 50L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/0323857108333.webp" alt="ILEM JAPAN" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">ILEM JAPAN</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹5L - 10L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/0311440455506.webp" alt="Van Heusen" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Van Heusen</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹30L - 50L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/06271893924227.webp" alt="BiryaniQueen" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">BiryaniQueen</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹30L - 50L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/03121942701526.webp" alt="Peter England" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Peter England</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹20L - 30L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/07221851162148.jpg" alt="Inxpress" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Inxpress</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹10L - 20L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/04031930772438.webp" alt="Maggi Hotspot" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Maggi Hotspot</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹5L - 10L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/01311690812316.png" alt="US Pizza &amp; Fried Chicken" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">US Pizza &amp; Fried Chicken</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹5L - 10L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/03121681474686.webp" alt="Allen Solly" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Allen Solly</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹30lac - 50lac
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/1125509854602.webp" alt="Pepperfry" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Pepperfry</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹20L - 30L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/12041591987070.webp" alt="DAMS STUDY SPACE" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">DAMS STUDY SPACE</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹5lac - 10lac
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/02181149379153.jpg" alt="JobJabs" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">JobJabs</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹50 K - 2lac
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/010234076636.webp" alt="Drivex Mobility" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Drivex Mobility</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹10L - 20L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/02231372337247.webp" alt="Chawla Chicken" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Chawla Chicken</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹20lac - 30lac
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/10171956066922.webp" alt="365 Tours" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">365 Tours</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹50 K - 2L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/04121889440108.webp" alt="Geetanjali" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Geetanjali</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹50lac - 1 Cr.
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/04121660121054.webp" alt="Zudio" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Zudio</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹2 Cr. - 5 Cr
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/07171497101324.webp" alt="Vip Bags" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Vip Bags</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹20L - 30L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/1213184924931.webp" alt="BuyBuyCart" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">BuyBuyCart</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹10lac - 20lac
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/04272094054102.webp" alt="The Elefant" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">The Elefant</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹5lac - 10lac
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/02231049076854.webp" alt="Cafe Frespresso" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Cafe Frespresso</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹10L - 20L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/01081544992376.webp" alt="MONA Dryfruits" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">MONA Dryfruits</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹5L - 10L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/05131282808751.webp" alt="Ganesh Bhel" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Ganesh Bhel</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹20L - 30L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/102556857972.webp" alt="TWIN" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">TWIN</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹2lac - 5lac
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/0810519491143.webp" alt="Detailing Xperts" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Detailing Xperts</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹20L - 30L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/0412946414041.webp" alt="BERGER PAINTS" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">BERGER PAINTS</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹10L - 20L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/11111461818638.webp" alt="TASVA" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">TASVA</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹2 Cr. - 5 Cr
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/11131100891379.webp" alt="PN Rao" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">PN Rao</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹1 Cr. - 2 Cr
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/0927415495253.webp" alt="CARLTONLONDON" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">CARLTONLONDON</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹20L - 30L
                        </div>
                    </div>
                </div>
            </li>
                        
            <li>
                <div class="overlay-card"></div>
                <div class="card-fihl card-m card-p-10">
                    <div class="brand-ffc-image-section">
                        <div class="brand-main-section"><a href="#" target="_blank"><img loading="lazy" src="https://franchiseindia.s3.ap-south-1.amazonaws.com/ffc/1129582372865.webp" alt="Numeros Motors" class="img-b img-border" width="110" height="50"></a></div>
                    </div>
                    <div class="card-body-section">
                        <div class="ffchead"><a href="#" target="_blank">Numeros Motors</a></div>
                        <p>
                                Investment range
                        </p>
                        <div class="card-info-amount">
                            ₹20L - 30L
                        </div>
                    </div>
                </div>
            </li>
            
        </ul>
                </div>
                <div class="loadmore text-center item-mt">
                    <a href="#" class="cp-default-btn-primary">See All Album</a>
                </div>
            </div>
        </section>
        <!-- Products Area End Here -->
           <section class="products-layout1 bg-body s-space-default best-franchise-opportunity generic" id="best-franchise-opportunity">
            <div class="container">
                <div class="section-title-dark">
                    <h2>Industrial Plants and Machinery</h2>
                </div>
            </div>
            <div class="container menu-list-wrapper">
                <div class="menu-list category-grid-layout2 zoom-gallery">
                   <div class="trending-franchise-wrap">
                    
                        
                                                    
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section">
                                <a href="#" target="_blank"> <img src="https://5.imimg.com/data5/SELLER/Default/2024/4/410126877/DJ/SV/JE/3651682/customised-machines-custom-made-equipment-500x500.jpg" alt="Kathi Junction" loading="lazy" width="205" height="100"></a>
                            </div>
                        </div>
                        <div class="card-body-section">
                            <!--<p>-->
                            <!--    <a href="#" target="_blank">Food and Beverage</a>-->
                            <!--</p>-->
                            <h2>
                                <a href="#" target="_blank">Customised Machines Equipment
                                </a>
                            </h2>
                            <div class="d-flex">
                                <div class="card-info">  Price</div>
                                <div class="card-info-amt">  ₹ 1500000 / Piece</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Application</div>
                                <div class="card-info-amt"> Industrial</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Function</div>
                                <div class="card-info-amt"> To serve special purpose of customer</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Sold By</div>
                                <div class="card-info-amt"> Labh Projects Private Limited ( Labh Group of Companies )</div>
                            </div>
                            <div class="link-section"><a href="#" target="_blank">Get Latest Price</a></div>
                        </div>
                    </div>
                                              
                        
                                                    
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section">
                                <a href="#" target="_blank"> <img src="https://5.imimg.com/data5/SELLER/Default/2022/9/FE/IJ/AE/1935774/octagonal-blender-machine-500x500.jpg" alt="Sheffield School" loading="lazy" width="205" height="100"></a>
                            </div>
                        </div>
                        <div class="card-body-section">
                            <!--<p>-->
                            <!--    <a href="#" target="_blank">Education</a>-->
                            <!--</p>-->
                            <h2>
                                <a href="#" target="_blank">Octagonal Blender Machine
                                </a>
                            </h2>
                            <div class="d-flex">
                                <div class="card-info"> Price</div>
                                <div class="card-info-amt"> ₹ 120000 / Piece</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> STAINLESS STEEL: </div>
                                <div class="card-info-amt">SS 316/304</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> USED FOR: </div>
                                <div class="card-info-amt"> PHARMACEUTICAL</div>
                            </div>  
                            <div class="d-flex">
                                <div class="card-info"> Sold By</div>
                                <div class="card-info-amt"> The Global Pharma Equipments</div>
                            </div>
                            
                            <div class="link-section"><a href="#" target="_blank">Get Latest Price</a></div>
                        </div>
                    </div>
                                              
                        
                                                    
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section">
                                <a href="#" target="_blank"> <img src="https://5.imimg.com/data5/WN/UT/MY-8211884/industrial-hammer-mills-500x500.png" alt="Ribbons Ice Cream" loading="lazy" width="205" height="100"></a>
                            </div>
                        </div>
                        <div class="card-body-section">
                          
                            <h2>
                                <a href="#" target="_blank">Electric Mild Steel Industrial
                                </a>
                            </h2>
                            <div class="d-flex">
                                <div class="card-info"> Price</div>
                                <div class="card-info-amt"> ₹ 90001 / Piece</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Material </div>
                                <div class="card-info-amt">Mild Steel</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info">Automation Grade: </div>
                                <div class="card-info-amt"> Automatic</div>
                            </div>
                              <div class="d-flex">
                                <div class="card-info"> Sold By</div>
                                <div class="card-info-amt"> Imperial World Trade Private Limited</div>
                            </div>
                            
                            <div class="link-section"><a href="#" target="_blank">Get Latest Price</a></div>
                        </div>
                    </div>
                                              
                        
                                                    
                    <div class="card card-m card-p-10">
                        <div class="brand-image-section">
                            <div class="brand-main-section">
                                <a href="#" target="_blank"> <img src="https://5.imimg.com/data5/SELLER/Default/2024/3/399715357/IT/WF/WG/3175352/power-plant-machines-special-purpose-machines-500x500.png" alt="The British Institutes" loading="lazy" width="205" height="100"></a>
                            </div>
                        </div>
                        <div class="card-body-section">
                            
                            <h2>
                                <a href="#" target="_blank">Power Plant Machines / Special Purpose Machines
                                </a>
                            </h2>
                            <div class="d-flex">
                                <div class="card-info">  Price</div>
                                <div class="card-info-amt"> ₹ 10000</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info">CNC or Not </div>
                                <div class="card-info-amt">CNC</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info">Power Source </div>
                                <div class="card-info-amt">Hydraulic, Mechanical</div>
                            </div>
                            <div class="d-flex">
                                <div class="card-info"> Sold By</div>
                                <div class="card-info-amt"> N. S. Thermal Energy Private Limited ,Uttar Pradesh, India</div>
                            </div>
                            <div class="link-section"><a href="#" target="_blank">Get Latest Price</a></div>
                        </div>
                    </div>
                               
                                
                                                              </div>
                </div>
                <div class="loadmore text-center item-mt">
                    <a href="#" class="cp-default-btn-primary">See All Album</a>
                </div>
            </div>
        </section>


@endsection