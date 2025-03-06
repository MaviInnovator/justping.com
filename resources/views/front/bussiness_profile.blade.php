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
							<li class="breadcrumb-item active" aria-current="page">Post Requirement @if($globalUser)
    Welcome, {{ $globalUser->name }}
@endif</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
 <section id="hidebrandForm" >
     <style>
         
        .error { color: red; font-size: 14px; display: none; }
     </style>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-4 col-12  text-center">
                    <img src="{{ asset('justping-front/img/phone.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <section class="signup-step-container">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-12">
                                    <div class="wizard">
                                        <div class="wizard-inner">
                                            <div class="connecting-line"></div>
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active" id="stepone">
                                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab"
                                                        aria-expanded="true"><span class="round-tab">1 </span> <i>Step
                                                            1</i></a>
                                                </li>
                                                <li role="presentation" class="" id="steptwo">
                                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab"
                                                        aria-expanded="false"><span class="round-tab">2</span> <i>Step
                                                            2</i></a>
                                                </li>
                                                <li role="presentation" class="" id="stepthree">
                                                    <a href="#step3" data-toggle="tab" aria-controls="step3"
                                                        role="tab"><span class="round-tab">3</span> <i>Step 3</i></a>
                                                </li>
                                                <li role="presentation" class="" id="stepfour">
                                                    <a href="#step4" data-toggle="tab" aria-controls="step4"
                                                        role="tab"><span class="round-tab">4</span> <i>Step 4</i></a>
                                                </li>
                                                <li role="presentation" class="" id="stepfive">
                                                    <a href="#step5" data-toggle="tab" aria-controls="step5"
                                                        role="tab"><span class="round-tab">5</span> <i>Step 5</i></a>
                                                </li>
                                                <li role="presentation" class="" id="stepsix">
                                                    <a href="#step6" data-toggle="tab" aria-controls="step6"
                                                        role="tab"><span class="round-tab">6</span> <i>Step 6</i></a>
                                                </li>
                                            </ul>
                                        </div>

                                       <form id="fileUploadForm" method="POST">
    @csrf
                                            <div class="tab-content" id="main_form">
                                                <div class="tab-pane active" role="tabpanel" id="step1">
                                                    <h2 class="text-center" style="margin: 0;">Enter Your Business Details</h2>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Business name *</label>
                                                                <input class="form-control" type="text" name="name" id="name"
                                                                    placeholder="">
                                                                  <span class="error" id="errorName">Business Name is required.</span><br>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label> Pincode *</label>
                                                                <input class="form-control" type="text" name="pincode" id="pincode"
                                                                    placeholder="">
                                                                  <span class="error" id="errorPincode">Pincode is required.</span><br>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Building Number *</label>
                                                                <input class="form-control" type="text" name="building_number" id="building_number"
                                                                    placeholder="">
                                                                  <span class="error" id="errorBuilding">Building Number is required.</span><br>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label> Street Number *</label>
                                                                <input class="form-control" type="text" name="street_number" id="street_number"
                                                                    placeholder="">
                                                                  <span class="error" id="errorStreet">Street Number is required.</span><br>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label> Area Name *</label>
                                                                <input class="form-control" type="text" name="area_name" id="area_name"
                                                                    placeholder="">
                                                                  <span class="error" id="errorArea">Area Name is required.</span><br>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label> Landmark *</label>
                                                                <input class="form-control" type="text" name="landmark" id="landmark"
                                                                    placeholder="">
                                                                  <span class="error" id="errorLandmark">Landmark is required.</span><br>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label> City *</label>
                                                                <input class="form-control" type="text" name="city" id="city"
                                                                    placeholder="">
                                                                  <span class="error" id="errorCity">City is required.</span><br>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label> State *</label>
                                                                <input class="form-control" type="text" name="state" id="state"
                                                                    placeholder="">
                                                                  <span class="error" id="errorState">State is required.</span><br>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Add Location</label>
                                                                <input class="form-control" type="text" name="location"
                                                                    placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label> Presence In other countries</label>
                                                                <input class="form-control" type="text" name="presence_other_country"
                                                                    placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label> GST Number</label>
                                                                <input class="form-control" type="text" name="gst"
                                                                    placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label> PAN</label>
                                                                <input class="form-control" type="text" name="pan_no"
                                                                    placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label> Year Of Incorporation</label>
                                                                <input class="form-control" type="text" name="year_of_coperation"
                                                                    placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label> TAN</label>
                                                                <input class="form-control" type="text" name="tan_no"
                                                                    placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Turnover</label>
                                                                <input class="form-control" type="text" name="turn_over"
                                                                    placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Number of Employee</label>
                                                                <input class="form-control" type="text" name="no_of_emp" id="no_of_emp"
                                                                    placeholder="">
                                                                  <span class="error" id="errorEmployee">Number of Employee is required.</span><br>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <ul class="list-inline pull-right">
                                                        <li><button type="button" class="default-btn next-step" id="next1">Save &
                                                                Continue </button></li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane" role="tabpanel" id="step2">
                                                    <h2 class="text-center" style="margin: 0;">Add contact Details</h2>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Title</label>
                                                                <input class="form-control" type="text" name="title" id="title"
                                                                    placeholder="">
                                                                  <span class="error" id="errorTitle">Title is required.</span><br>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Contact Person</label>
                                                                <input class="form-control" type="text" name="contact_person" id="contact_person"
                                                                    placeholder="">
                                                                  <span class="error" id="errorContactPerson">Contact Person is required.</span><br>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Official Number*</label>
                                                                <input class="form-control" type="text" name="official_number" id="official_number"
                                                                    placeholder="+91 Official Number">
                                                                  <span class="error" id="errorOfficialNumber">Official Number is required.</span><br>
                                                                    <p style="margin: 5px 0;">+ Add  Another Mobile Or Landline  Number</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Whatsapp Number*</label>
                                                                <input class="form-control" type="text" name="whatsapp_number" id="whatsapp_number"
                                                                    placeholder="+91 Whatsapp Number">
                                                                  <span class="error" id="errorWhatsapp">Official Number is required.</span><br>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Official Email*</label>
                                                                <input class="form-control" type="text" name="email" id="email"
                                                                    placeholder="">
                                                                  <span class="error" id="errorEmail">Official Email is required.</span><br>
                                                            </div>
                                                            <p style="margin: 5px 0;">+ Add  Another Email</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label> Add Social Media Link</label>
                                                                <input class="form-control" type="text" name="facebook" id="facebook"
                                                                    placeholder="facebook">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label> Add Social Media Link</label>
                                                                <input class="form-control" type="text" name="twitter" id="twitter"
                                                                    placeholder="twitter">
                                                            </div>
                                                            <p style="margin: 5px 0;">+ Add  Another Social Media Link</p>
                                                            <span>ex., Linkedin , Instagram , facebook , Twitter etc</span>
                                                        </div>
                                                    </div>


                                                    <ul class="list-inline pull-right">
                                                        <li><button type="button"
                                                                class="default-btn prev-step">Back</button></li>
                                                        <!--<li><button type="button"-->
                                                        <!--        class="default-btn next-step skip-btn">Skip</button>-->
                                                        <!--</li>-->
                                                        <li><button type="button"
                                                                class="default-btn next-step" id="next2">Continue</button></li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane" role="tabpanel" id="step3">
                                                    <h2 class="text-center">Add Business Timings</h2>
                                                    <h6 class="text-center">Let your Customer Know when you are open for business</h6>
                                                    <h6 class="text-center">Select Days of the week</h6>
                                                    <div class="row">

                                                        <div class="col-md-12 text-center">
                                                            <div class="days">
                                                                
                                                                <label><input type="checkbox" name="days[]" value="Monday" class="day-btn" > Mon</label>
                                                                <label><input type="checkbox" name="days[]" value="Tuesday" class="day-btn" > Tue</label>
                                                                <label><input type="checkbox" name="days[]" value="Wednesday" class="day-btn" > Wed</label>
                                                                <label><input type="checkbox" name="days[]" value="Thursday" class="day-btn" > Thu</label>
                                                                <label><input type="checkbox" name="days[]" value="Friday" class="day-btn" > Fri</label>
                                                                <label><input type="checkbox" name="days[]" value="Saturday" class="day-btn" > Sat</label>
                                                                <label><input type="checkbox" name="days[]" value="Sunday" class="day-btn" > Sun</label>
                                                                <!--<button class="day-btn" data-day="Mon">Mon</button>-->
                                                                <!--<button class="day-btn" data-day="Tue">Tue</button>-->
                                                                <!--<button class="day-btn" data-day="Wed">Wed</button>-->
                                                                <!--<button class="day-btn" data-day="Thu">Thu</button>-->
                                                                <!--<button class="day-btn" data-day="Fri">Fri</button>-->
                                                                <!--<button class="day-btn" data-day="Sat">Sat</button>-->
                                                                <!--<button class="day-btn" data-day="Sun">Sun</button>-->
                                                            </div>
                                    
                                                            <div class="select-all">
                                                                <input type="checkbox" id="selectAllDays">
                                                                <label for="selectAllDays">Select All Days</label>
                                                            </div>
                                        
                                                            <div class="time-slot">
                                                                <select class="time-dropdown open-time" name="open_at" id="open_at">
                                                                    <option disabled selected>Open At</option>
                                                                    <option>08:00 AM</option>
                                                                    <option>09:00 AM</option>
                                                                    <option>10:00 AM</option>
                                                                </select>
                                        
                                                                <select class="time-dropdown close-time" name="close_at" id="close_at">
                                                                    <option disabled selected>Close At</option>
                                                                    <option>05:00 PM</option>
                                                                    <option>06:00 PM</option>
                                                                    <option>07:00 PM</option>
                                                                </select>
                                                            </div>
                                        
                                                            <button id="addTimeSlot" class="add-time-slot">+ Add Another Time Slot</button>
                                                        </div>

                                                    </div>
                                                    <ul class="list-inline pull-right">
                                                        <li><button type="button"
                                                                class="default-btn prev-step">Back</button></li>
                                                        <!--<li><button type="button"-->
                                                        <!--        class="default-btn next-step skip-btn">Skip</button>-->
                                                        <!--</li>-->
                                                        <li><button type="button"
                                                                class="default-btn next-step" id="next3">Continue</button></li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane" role="tabpanel" id="step4">
                                                    <div class="row">
                                                        <div class="col-12 text-center">
                                                            <h2>Add Business Category</h2>
                                                            <h4> Choose the right business categories so your customer can easily find you</h4>
                                                            <div class="search-container text-center">
                                                                <div class="search-box">
                                                                    <span class="search-icon">🔍</span>
                                                                    <input type="text" id="categoryInput" placeholder="Type Business Category" name="category">
                                                                    
                                                                  <span class="error" id="errorCategory">Category is required.</span><br>
                                                                </div>
                                                                <!--<div class="suggestions"></div>-->
                                                                <p class="suggestions suggested-title">Suggested Categories</p>
                                                            </div>
                                        
                                                        </div>
                                                    </div>

                                                    <ul class="list-inline pull-right">
                                                        <li><button type="button"
                                                                class="default-btn prev-step">Back</button></li>
                                                       <li><button type="button"
                                                                class="default-btn next-step" id="next4">Continue</button></li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane" role="tabpanel" id="step5">
                                                    <div class="row">
                                                        <div class="col-12 text-center">
                                                            <h2>Add Photos</h2>
                                                            <h4> Showcase photos of your Business upto 10 And 2 Videos</h4>
                                                            <div class="photo-grid">
                                                                <!-- Upload Box -->
                                                                <div class="upload-box">
                                                                    <input type="file" id="fileInput" accept="image/*" hidden name="photo" >
                                                                    <label for="fileInput">
                                                                        <img src="{{ asset('justping-front/img/upload-icon.png') }}" alt="Upload" class="upload-icon">
                                                                    </label>
                                                                </div>
                                        
                                                                <!-- Example Images -->
                                                                <div class="photo">
                                                                    <img src="{{ asset('justping-front/img/product/01.jpg') }}" alt="Example">
                                                                    <span class="label">Example</span>
                                                                </div>
                                                                <div class="photo">
                                                                    <img src="{{ asset('justping-front/img/product/02.jpg') }}" alt="Example">
                                                                    <span class="label">Example</span>
                                                                </div>
                                                                <div class="photo">
                                                                    <img src="{{ asset('justping-front/img/product/03.jpg') }}" alt="Example">
                                                                    <span class="label">Example</span>
                                                                </div>
                                        
                                                                  <span class="error" id="fileError">Photo is required.</span><br>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <ul class="list-inline pull-right">
                                                        <li><button type="button"
                                                                class="default-btn prev-step">Back</button></li>
                                                      <li><button type="button"
                                                                class="default-btn next-step" id="next5">Continue</button></li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane" role="tabpanel" id="step6">
                                                    <div class="container">
                                                        <h1 class="text-center my-4">What are you looking for?</h1>
                                                        <div class="row" id="jobContainer">
                                                            <!-- Jobs will be loaded dynamically here -->
                                                        </div>
                                                     <!--<div class="text-center mt-3">-->
                                                     <!--       <button class="btn btn-primary more-button" onclick="loadMoreJobs()">More ></button>-->
                                                     <!--   </div>-->
                                                    </div>

                                                    <ul class="list-inline pull-right">
                                                        <li><button type="button"
                                                                class="default-btn prev-step">Back</button></li>
                                                        <li><button type="submit"
                                                                class="default-btn next-step">Finish</button></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <section style="display:none;" id="responseMessage">
        <div class="container my-5">
            <!-- Logo -->
            <img src="{{ asset('justping-front/img/logo-1.png') }}" alt="JustPing Logo" class="logo">

            <!-- Success Message -->
            <div class="success-box">
                <img src="{{ asset('justping-front/img/logo-2.png') }}" alt="Success" class="icon">
                <p class="success-text mb-0">Congratulations - Your business is now registered in JustPing</p>
            </div>

            <!-- Premium Plan Section -->
            <div class="premium-box">
                <div class="row">
                    <div class="col-md-5 col-12 text-center">
                        <img src="{{ asset('justping-front/img/logo-3.png') }}" alt="Premium">
                    </div>
                    <div class="col-md-7 col-12 text-start">
                        <h2>Upgrade to Premium Plan</h2>
                        <p>Rank higher on search results and get more customers to contact you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script>
        $(document).ready(function() {
            $("#selectAllDays").change(function() {
            $("input[name='days[]']").prop('checked', $(this).prop("checked"));
        });
            let suggestionsList = @json($categories);

            $("#categoryInput").on("keyup", function() {
                let inputVal = $(this).val().toLowerCase();
                let filteredSuggestions = suggestionsList.filter(item => 
                    item.toLowerCase().includes(inputVal)
                );

                let suggestionsDiv = $(".suggestions");
                suggestionsDiv.empty();

                if (inputVal && filteredSuggestions.length > 0) {
                    filteredSuggestions.forEach(item => {
                        suggestionsDiv.append(`<div>${item}</div>`);
                    });
                    suggestionsDiv.show();
                } else {
                    suggestionsDiv.hide();
                }
            });

            $(document).on("click", ".suggestions div", function() {
                $("#categoryInput").val($(this).text());
                $(".suggestions").hide();
            });

            $(document).click(function(e) {
                if (!$(e.target).closest(".search-container").length) {
                    $(".suggestions").hide();
                }
            });
            
let jobs = @json($subcategories);
const jobContainer = document.getElementById("jobContainer");
let loadedJobs = 30; // Load first 30 jobs

function loadJobs(start, end) {
    const fragment = document.createDocumentFragment();

    for (let i = start; i < end && i < jobs.length; i++) {
        const colDiv = document.createElement("div");
        colDiv.classList.add("col-lg-3", "col-md-4", "col-sm-6", "mb-3");

        colDiv.innerHTML = `
            <div class="job-option">
                <input type="checkbox" id="${jobs[i]}" name="subcategory[]" value="${jobs[i]}">
                <label for="job${i}">${jobs[i]}</label>
            </div>
        `;

        fragment.appendChild(colDiv);
    }
    jobContainer.appendChild(fragment);
}

function loadMoreJobs() {
    loadJobs(loadedJobs, loadedJobs + 12); // Load in batches of 12
    loadedJobs += 12;
    if (loadedJobs >= jobs.length) {
        document.querySelector(".more-button").style.display = "none";
    }
}

// Load initial jobs
loadJobs(0, loadedJobs);
        });
        $(document).ready(function () {
            $("#fileUploadForm").submit(function (e) {
                e.preventDefault(); // Prevent default form submission

                let formData = new FormData(this);
                  // AJAX Request
                $.ajax({
                    url: "{{ route('wizard.store') }}",// Change to your server-side upload script
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        alert(response.message);
                        $("#responseMessage").show();
                        $("#hidebrandForm").hide();
                    },
                    error: function () {
                        $("#responseMessage").hie();
                        $("#hidebrandForm").show();
                    }
                });
            });


});


    </script>

@endsection