@extends('front.layouts.master')


@section('content')

	<style>
.inner-box {
    position: relative;
    -webkit-transition: all 300msease;
    transition: all 300msease;
	
    margin-bottom: 20px;
}
		.image-box {
    position: relative;
}
		.image-box .image {
    position: relative;
    overflow: hidden;
    margin-bottom: 0;
}
		.image-box .image img {
    display: block;
			
    height: 250px;
    width: 100%;
    -webkit-transition: all 400msease;
    transition: all 400msease;
}
		.image-box .image a:after {
    background: rgba(255, 255, 255, 0.3);
    bottom: 0;
    content: "";
    left: 50%;
    position: absolute;
    right: 51%;
    top: 0;
    opacity: 1;
    pointer-events: none;
    -webkit-transition: all 400mslinear;
    transition: all 400mslinear;
}
		.content-box {
    position: relative;
    padding: 30px 30px 50px;
    -webkit-box-shadow: 0 10px 60px rgba(0, 0, 0, 0.05);
    box-shadow: 0 10px 60px rgba(0, 0, 0, 0.05);
    border: 1px solid #e1e2e7;
    background-color: #fff;
}
		.content-box .date {
    position: absolute;
    top: -20px;
    left: 30px;
    background: #075192;
    color: #ffffff;
    font-size: 13px;
    padding: 5px 18px;
    height: 30px;
    line-height: 20px;
    font-weight: 600;
}
		 .content-box .post-info {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex
;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}
		 .content-box .title {
    margin-bottom: 25px;
}
		.content-box .read-more {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #075192;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex
;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 7px 30px;
    font-size: 13px;
    color: #ffffff;
    line-height: 30px;
}
		.content-box .read-more i {
    color: var(--theme-color2);
    height: 30px;
    width: 30px;
    background-color: #fec63f;
    font-size: 14px;
    line-height: 30px;
    text-align: center;
    border-radius: 50%;
}
		.content-box .post-info li {
    font-size: 14px;
    line-height: 20px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex
;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-weight: 400;
    color: #6f7174;
    margin-bottom: 10px;
    margin-right: 15px;
}
		.content-box .title a {
    margin-bottom: 25px;
    font-size: 20px;
    color: #000000;
}
	</style>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons' async='async'></script>


        <section class="about-section"  style="background-image: url({{ asset('uploads/'.$global_setting->banner) }});"> 
		<div class="container">
			<div class="row about-breadcrumbs">
				<div class="col-md-6">
					<div class="about-head">
						<h2>Our Blog</h2>
					</div>
				</div>
				<div class="col-md-6">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumbs">
							<li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
							<li class="breadcrumb-item active" aria-current="page">Our Blog</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	
        <div class="section-white">
		<div class="container">
			<div class="contact-title text-center">
				<h3>Our Blogs</h3>
            	</div>
			<div class="row">
               <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="https://bsetdubai.com/uploads/post_1732621278.jpg" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <span class="date">
                            26 Nov, 2024
                        </span>
                        <ul class="post-info">
                            <li><i class="fa fa-user-circle"></i> by Admin</li>
                        </ul>
                        <h4 class="title"><a href="#">Tips for Creating Engaging Video Content</a></h4>
                        <a href="#" class="read-more">Read More </a>
                    </div>
                </div>
            </div>
                        <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="https://bsetdubai.com/uploads/post_1732620367.jpg" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <span class="date">
                            26 Nov, 2024
                        </span>
                        <ul class="post-info">
                            <li><i class="fa fa-user-circle"></i> by Admin</li>
                        </ul>
                        <h4 class="title"><a href="#">The Power of Social Media Advertising for Your Business</a></h4>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
                        <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="https://bsetdubai.com/uploads/post_1732187445.jpg" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <span class="date">
                            21 Nov, 2024
                        </span>
                        <ul class="post-info">
                            <li><i class="fa fa-user-circle"></i> by Admin</li>
                        </ul>
                        <h4 class="title"><a href="#">How to Create an Effective Email Marketing Strategy</a></h4>
                        <a href="#" class="read-more">Read More </a>
                    </div>
                </div>
            </div>
                        <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="https://bsetdubai.com/uploads/post_1732185322.jpg" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <span class="date">
                            21 Nov, 2024
                        </span>
                        <ul class="post-info">
                            <li><i class="fa fa-user-circle"></i> by Admin</li>
                        </ul>
                        <h4 class="title"><a href="#">The Importance of Content Marketing in the Digital Age</a></h4>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
                        <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="https://bsetdubai.com/uploads/post_1704688156.jpg" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <span class="date">
                            07 Jan, 2024
                        </span>
                        <ul class="post-info">
                            <li><i class="fa fa-user-circle"></i> by Admin</li>
                        </ul>
                        <h4 class="title"><a href="#">Why Dubai is the Best Place for Your Business Setup</a></h4>
                        <a href="#" class="read-more">Read More </a>
                    </div>
                </div>
            </div>
                        <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img src="https://bsetdubai.com/uploads/post_1704688078.jpg" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <span class="date">
                            07 Jan, 2024
                        </span>
                        <ul class="post-info">
                            <li><i class="fa fa-user-circle"></i> by Admin</li>
                        </ul>
                        <h4 class="title"><a href="#">Social Media Success and Pro Strategies for You</a></h4>
                        <a href="#" class="read-more">Read More </a>
                    </div>
                </div>
            </div>
                        
        </div>
		</div>
	</div>

@endsection