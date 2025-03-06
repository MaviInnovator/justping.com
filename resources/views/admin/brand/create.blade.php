@extends('admin.layouts.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ __('Create Brand') }}</h1>
    <a href="{{ route('admin_service_index') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-bars"></i> {{ __('All Items') }}
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('admin_brand_store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Business Name') }} *</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Slug') }}*</label>
                        <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
                    </div>
                </div>
                    <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Pincode') }} *</label>
                        <input type="text" name="pincode" class="form-control" value="{{ old('pincode') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Building Number *</label>
                        <input type="text" name="building_number" class="form-control" value="{{ old('building_number') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Street Number *</label>
                        <input type="text" name="street_number" class="form-control" value="{{ old('street_number') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Area Name*</label>
                        <input type="text" name="area_name" class="form-control" value="{{ old('area_name') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Landmark') }} *</label>
                        <input type="text" name="landmark" class="form-control" value="{{ old('landmark') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('City') }} *</label>
                        <input type="text" name="city" class="form-control" value="{{ old('city') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('State') }} *</label>
                        <input type="text" name="state" class="form-control"value="{{ old('state') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Add Location *</label>
                        <input type="text" name="location" class="form-control" value="{{ old('location') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Presence In other countries *</label>
                        <input type="text" name="presence_other_country" class="form-control" value="{{ old('presence_other_country') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">GST Number </label>
                        <input type="text" name="gst" class="form-control" value="{{ old('gst') }}">
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">PAN </label>
                        <input type="text" name="pan_no" class="form-control" value="{{ old('pan_no') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Year Of Incorporation </label>
                        <input type="text" name="year_of_coperation" class="form-control" value="{{ old('year_of_coperation') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">TAN</label>
                        <input type="text" name="tan_no" class="form-control" value="{{ old('tan_no') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Turnover </label>
                        <input type="text" name="turn_over" class="form-control" value="{{ old('turn_over') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label"> Number of Employee </label>
                        <input type="text" name="no_of_emp" class="form-control" value="{{ old('no_of_emp') }}">
                    </div>
                </div>
               
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label"> Title </label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Contact Person ') }} *</label>
                        <input type="text" name="contact_person" class="form-control" value="{{ old('contact_person') }}">
                    </div>
                </div>
                
                <div class="col-md-4">
                   <div class="mb-3">
                        <label for="" class="form-label">Official Number*</label>
                        <input type="text" name="official_number" class="form-control" value="{{ old('official_number') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Whatsapp Number') }}</label>
                        <input type="text" name="whatsapp_number" class="form-control" value="{{ old('whatsapp_number') }}">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Email') }}</label>
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Facebook') }}</label>
                        <input type="text" name="facebook" class="form-control" value="{{ old('facebook') }}">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Twitter') }}</label>
                        <input type="text" name="twitter" class="form-control" value="{{ old('twitter') }}">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Instagram') }}</label>
                        <input type="text" name="instagram" class="form-control" value="{{ old('instagram') }}">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Linkedin') }}</label>
                        <input type="text" name="linkedin" class="form-control" value="{{ old('linkedin') }}">
                    </div>
                </div> 
                <div class="col-md-4">
                <div class="mb-3">
                <div class="days">
                
                <label><input type="checkbox" name="days[]" value="Monday" class="day-btn" > Mon</label>
                <label><input type="checkbox" name="days[]" value="Tuesday" class="day-btn" > Tue</label>
                <label><input type="checkbox" name="days[]" value="Wednesday" class="day-btn" > Wed</label>
                <label><input type="checkbox" name="days[]" value="Thursday" class="day-btn" > Thu</label>
                <label><input type="checkbox" name="days[]" value="Friday" class="day-btn" > Fri</label>
                <label><input type="checkbox" name="days[]" value="Saturday" class="day-btn"  > Sat</label>
                <label><input type="checkbox" name="days[]" value="Sunday" class="day-btn" > Sun</label>
                </div>
                </div>
                </div>
                    <div class="col-md-4">
                      <div class="mb-3">
                        <label for="" class="form-label">Open At</label>
                        <select id="iconSelect" name="open_at" class="form-select">
                            <option value="">Open At</option>
                             <option value="08:00 AM">08:00 AM</option>
                            <option value="09:00 AM">09:00 AM</option>
                            <option value="10:00 AM">10:00 AM</option>
                            <option value="11:00 AM">11:00 AM</option>
                            
                        </select>
                    </div>
                </div>
                   <div class="col-md-4">
                      <div class="mb-3">
                        <label for="" class="form-label">Close At</label>
                        <select id="iconSelect" name="close_at" class="form-select">
                            <option value="">Close At</option>
                             <option value="05:00 PM">05:00 PM</option>
                             <option value="06:00 PM">06:00 PM</option>
                             <option value="07:00 PM">07:00 PM</option>
                             <option value="08:00 PM">08:00 PM</option>
                             <option value="09:00 PM">09:00 PM</option>
                            
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                      <div class="mb-3">
                        <label for="" class="form-label">{{ __('Category') }}*</label>
                        <select id="iconSelect" name="category" class="form-select">
                            <option value="">{{ __('Select Category') }}</option>
                            @foreach($icons as $icon)
                            <option value="{{ $icon->name }}">{{ $icon->name }}</option>
                            @endforeach
                        </select>
                        <div id="iconPreview"></i></div>
                    </div>
                </div>
                 <div class="col-md-4">
                      <div class="mb-3">
                        <label for="" class="form-label">{{ __('Subcategory') }}*</label>
                        <select id="iconSelect" name="subcategory[]" class="form-select" multiple>
                            <option value="">{{ __('Select Subcategory') }}</option>
                            @foreach($subcat as $subcategory)
                            <option value="{{ $subcategory->name }}" >{{ $subcategory->name }}</option>
                            @endforeach
                        </select>
                        <div id="iconPreview"></i></div>
                    </div>
                </div>
            </div>
          <!--<div class="mb-3">-->
          <!--      <label for="" class="form-label">{{ __('Keywords') }} *</label>-->
          <!--      <textarea name="keywords" class="form-control h_100" cols="30" rows="10">{{ old('short_description') }}</textarea>-->
          <!--  </div>-->
            <!--  <div class="mb-3">
                <label for="" class="form-label">{{ __('Description') }} *</label>
                <textarea name="description" class="form-control editor" cols="30" rows="10">{{ old('description') }}</textarea>
            </div>-->
            <div class="row">
                    <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Photo') }} *</label>
                        <div><input type="file" name="photo"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Banner') }}</label>
                        <div><input type="file" name="banner"></div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">{{ __('SEO Title') }}</label>
                <input type="text" name="seo_title" class="form-control" value="{{ old('seo_title') }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">{{ __('SEO Meta Description') }}</label>
                <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ old('seo_meta_description') }}</textarea>
            </div>
            <div class="row">
            
                <!--<div class="col-md-4">-->
                <!--    <div class="mb-3">-->
                <!--        <label for="" class="form-label">{{ __('PDF') }}</label>-->
                <!--        <div><input type="file" name="pdf"></div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
            <button type="submit" class="btn btn-success mb-50 btn-common">{{ __('Submit') }}</button>
        </form>
    </div>
</div>
<script>
    window.onload = function () {
        document.getElementById('iconSelect').addEventListener('change', function () {
            var selectedValue = this.value;
            var previewElement = document.getElementById('iconPreview');
            previewElement.innerHTML = '<i class="icon ' + selectedValue + '"></i>';
        });
    };
</script>
@endsection