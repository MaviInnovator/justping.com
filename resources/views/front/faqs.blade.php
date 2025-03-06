@extends('front.layouts.master')

@section('seo_title', $global_other_page_items->page_faq_seo_title)
@section('seo_meta_description', $global_other_page_items->page_faq_seo_meta_description)

@section('content')
        <section class="about-section"  style="background-image: url({{ asset('uploads/'.$global_setting->banner) }});"> 
		<div class="container">
			<div class="row about-breadcrumbs">
				<div class="col-md-6">
					<div class="about-head">
						<h2>Faqs</h2>
					</div>
				</div>
				<div class="col-md-6">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumbs">
							<li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
							<li class="breadcrumb-item active" aria-current="page">Faqs</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	  <div class="section-white">
		<div class="container">
			<div class="contact-title text-center">
				<h3>Frequently Asked Questions ?</h3>
            	</div>
			<div class="row">
				
            <div class="faq-page gradient-padding">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading active">
                                            <div class="panel-title">
                                                <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1.What benefits will I get from a paid listing on Justping ?</a>
                                            </div>
                                        </div>
                                        <div aria-expanded="false" id="collapseOne" role="tabpanel" class="panel-collapse collapse  show">
                                            <div class="panel-body">
                                                <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurbut also survived but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releas survived not raseth leap into electronic typesetting, remaining essentially unchanged. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. What is the minimum tenure for plans available on Justping?</a>
                                            </div>
                                        </div>
                                        <div aria-expanded="false" id="collapseTwo" role="tabpanel" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurbut also survived but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releas survived not raseth leap into electronic typesetting, remaining essentially unchanged. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3. Can I receive leads only from specific areas?
</a>
                                            </div>
                                        </div>
                                        <div aria-expanded="false" id="collapseThree" role="tabpanel" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurbut also survived but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releas survived not raseth leap into electronic typesetting, remaining essentially unchanged. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">4. What are the advantages of upgrading, and how do the different packages differ?</a>
                                            </div>
                                        </div>
                                        <div aria-expanded="false" id="collapseFour" role="tabpanel" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurbut also survived but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releas survived not raseth leap into electronic typesetting, remaining essentially unchanged. </p>
                                            </div>
                                        </div>
                                    </div>
									 <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">5. What payment methods are available?</a>
                                            </div>
                                        </div>
                                        <div aria-expanded="false" id="collapseFour" role="tabpanel" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurbut also survived but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releas survived not raseth leap into electronic typesetting, remaining essentially unchanged. </p>
                                            </div>
                                        </div>
                                    </div>
									<div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">6. Can I change my package later?</a>
                                            </div>
                                        </div>
                                        <div aria-expanded="false" id="collapseFour" role="tabpanel" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurbut also survived but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the releas survived not raseth leap into electronic typesetting, remaining essentially unchanged. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

			</div>
		</div>
	</div>
<!--<section class="">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="accordion-box wow fadeInRight">
                    @foreach($faqs as $faq)
                    <li class="accordion block @if($loop->iteration == 1) active-block @endif">
                        <div class="acc-btn @if($loop->iteration == 1) active @endif">{{ $faq->question }}
                            <div class="icon fa fa-plus"></div>
                        </div>
                        <div class="acc-content @if($loop->iteration == 1) current @endif">
                            <div class="content">
                                <div class="text">
                                    {!! clean($faq->answer) !!}
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>-->
@endsection