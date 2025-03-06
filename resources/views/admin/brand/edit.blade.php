@extends('admin.layouts.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ __('Edit Client') }}</h1>
    <a href="{{ route('admin_client_index') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-bars"></i> {{ __('All Items') }}
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('admin_brand_update',$brands->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Business Name') }} *</label>
                        <input type="text" name="name" class="form-control" value="{{ $brands->name }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Slug') }}*</label>
                        <input type="text" name="slug" class="form-control" value="{{ $brands->slug }}">
                    </div>
                </div>
                    <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Pincode') }} *</label>
                        <input type="text" name="pincode" class="form-control" value="{{ $brands->pincode }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Building Number *</label>
                        <input type="text" name="building_number" class="form-control" value="{{ $brands->building_number }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Street Number *</label>
                        <input type="text" name="street_number" class="form-control" value="{{ $brands->street_number }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Area Name*</label>
                        <input type="text" name="area_name" class="form-control" value="{{ $brands->area_name }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Landmark') }} *</label>
                        <input type="text" name="landmark" class="form-control" value="{{ $brands->landmark }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('City') }} *</label>
                        <input type="text" name="city" class="form-control" value="{{ $brands->city }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('State') }} *</label>
                        <input type="text" name="state" class="form-control" value="{{ $brands->state }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Add Location *</label>
                        <input type="text" name="location" class="form-control" value="{{ $brands->location }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Presence In other countries *</label>
                        <input type="text" name="presence_other_country" class="form-control" value="{{ $brands->presence_other_country }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">GST Number </label>
                        <input type="text" name="gst" class="form-control" value="{{ $brands->gst }}">
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">PAN </label>
                        <input type="text" name="pan_no" class="form-control" value="{{ $brands->pan_no }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Year Of Incorporation </label>
                        <input type="text" name="year_of_coperation" class="form-control" value="{{ $brands->year_of_coperation }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">TAN</label>
                        <input type="text" name="tan_no" class="form-control" value="{{ $brands->tan_no }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Turnover </label>
                        <input type="text" name="turn_over" class="form-control" value="{{ $brands->turn_over }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label"> Number of Employee </label>
                        <input type="text" name="no_of_emp" class="form-control" value="{{ $brands->no_of_emp }}">
                    </div>
                </div>
               
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label"> Title </label>
                        <input type="text" name="title" class="form-control" value="{{ $brands->title }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Contact Person ') }} *</label>
                        <input type="text" name="contact_person" class="form-control" value="{{ $brands->contact_person }}">
                    </div>
                </div>
                
                <div class="col-md-4">
                   <div class="mb-3">
                        <label for="" class="form-label">Official Number*</label>
                        <input type="text" name="official_number" class="form-control" value="{{ $brands->official_number }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Whatsapp Number') }}</label>
                        <input type="text" name="whatsapp_number" class="form-control" value="{{ $brands->whatsapp_number }}">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Email') }}</label>
                        <input type="text" name="email" class="form-control" value="{{ $brands->email }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Facebook') }}</label>
                        <input type="text" name="facebook" class="form-control" value="{{ $brands->facebook }}">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Twitter') }}</label>
                        <input type="text" name="twitter" class="form-control" value="{{ $brands->twitter }}">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Instagram') }}</label>
                        <input type="text" name="instagram" class="form-control" value="{{ $brands->instagram }}">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Linkedin') }}</label>
                        <input type="text" name="linkedin" class="form-control" value="{{ $brands->linkedin }}">
                    </div>
                </div> 
                <div class="col-md-4">
                <div class="mb-3">
                <div class="days">
                
                <label><input type="checkbox" name="days[]" value="Monday" class="day-btn" {{ in_array('Monday', $selectedDays) ? 'checked' : '' }}> Mon</label>
                <label><input type="checkbox" name="days[]" value="Tuesday" class="day-btn" {{ in_array('Tuesday', $selectedDays) ? 'checked' : '' }}> Tue</label>
                <label><input type="checkbox" name="days[]" value="Wednesday" class="day-btn" {{ in_array('Wednesday', $selectedDays) ? 'checked' : '' }}> Wed</label>
                <label><input type="checkbox" name="days[]" value="Thursday" class="day-btn" {{ in_array('Thursday', $selectedDays) ? 'checked' : '' }}> Thu</label>
                <label><input type="checkbox" name="days[]" value="Friday" class="day-btn" {{ in_array('Friday', $selectedDays) ? 'checked' : '' }}> Fri</label>
                <label><input type="checkbox" name="days[]" value="Saturday" class="day-btn"  {{ in_array('Saturday', $selectedDays) ? 'checked' : '' }}> Sat</label>
                <label><input type="checkbox" name="days[]" value="Sunday" class="day-btn" {{ in_array('Sunday', $selectedDays) ? 'checked' : '' }}> Sun</label>
                </div>
                </div>
                </div>
                    <div class="col-md-4">
                      <div class="mb-3">
                        <label for="" class="form-label">Open At</label>
                        <select id="iconSelect" name="open_at" class="form-select">
                            <option value="">Open At</option>
                             <option value="08:00 AM" @if($brands->open_at=='08:00 AM') selected @endif>08:00 AM</option>
                            <option value="09:00 AM" @if($brands->open_at=='09:00 AM') selected @endif>09:00 AM</option>
                            <option value="10:00 AM" @if($brands->open_at=='10:00 AM') selected @endif>10:00 AM</option>
                            <option value="11:00 AM"@if($brands->open_at=='11:00 AM') selected @endif>11:00 AM</option>
                            
                        </select>
                    </div>
                </div>
                   <div class="col-md-4">
                      <div class="mb-3">
                        <label for="" class="form-label">Close At</label>
                        <select id="iconSelect" name="close_at" class="form-select">
                            <option value="">Close At</option>
                             <option value="05:00 PM" @if($brands->close_at=='05:00 PM') selected @endif>05:00 PM</option>
                             <option value="06:00 PM" @if($brands->close_at=='06:00 PM') selected @endif>06:00 PM</option>
                             <option value="07:00 PM" @if($brands->close_at=='07:00 PM') selected @endif>07:00 PM</option>
                             <option value="08:00 PM" @if($brands->close_at=='08:00 PM') selected @endif>08:00 PM</option>
                             <option value="09:00 PM" @if($brands->close_at=='09:00 PM') selected @endif>09:00 PM</option>
                            
                        </select>
                    </div>
                </div>
                    <div class="col-md-4">
                      <div class="mb-3">
                        <label for="" class="form-label">{{ __('Category') }}*</label>
                        <select id="iconSelect" name="category" class="form-select">
                            <option value="">{{ __('Select Category') }}</option>
                            @foreach($icons as $icon)
                            <option value="{{ $icon->name }}" @if($icon->name==$brands->category) selected @endif>{{ $icon->name }}</option>
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
                            <option value="{{ $subcategory->name }}" {{ in_array($subcategory->name, $selectedSubcategories) ? 'selected' : '' }}>{{ $subcategory->name }}</option>
                            @endforeach
                        </select>
                        <div id="iconPreview"></i></div>
                    </div>
                </div>
                
            </div>
          <div class="mb-3">
                <label for="" class="form-label">{{ __('Keywords') }} *</label>
                <textarea name="keywords" class="form-control h_100" cols="30" rows="10">{{ $brands->keywords }}</textarea>
            </div>
            <!--  <div class="mb-3">
                <label for="" class="form-label">{{ __('Description') }} *</label>
                <textarea name="description" class="form-control editor" cols="30" rows="10">{{ old('description') }}</textarea>
            </div>-->
            <div class="row">
                    <div class="col-md-4">
                          <div class="mb-3">
                        <label for="" class="form-label">{{ __('Existing Photo') }}</label>
                        <div class="photo-container">
                            <a href="{{ asset('uploads/'.$brands->photo) }}" class="magnific"><img src="{{ asset('uploads/'.$brands->photo) }}" alt=""></a>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Change Photo') }} *</label>
                        <div><input type="file" name="photo"></div>
                    </div>
                </div>
                <div class="col-md-4">
                       <div class="mb-3">
                        <label for="" class="form-label">{{ __('Existing Banner') }}</label>
                        <div class="photo-container">
                            @if($brands->banner==null)
                                <img src="{{ asset('uploads/no_photo.png') }}" alt="">
                            @else
                                <a href="{{ asset('uploads/'.$brands->banner) }}" class="magnific"><img src="{{ asset('uploads/'.$brands->banner) }}" alt=""></a>
                                <div><a href="{{ route('admin_brand_destroy_banner',$brands->id) }}" class="text-danger" onClick="return confirm('{{ __('Are you sure?') }}')">{{ __('Delete Banner') }}</a></div>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Banner') }}</label>
                        <div><input type="file" name="banner"></div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">{{ __('SEO Title') }}</label>
                <input type="text" name="seo_title" class="form-control" value="{{ $brands->seo_title }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">{{ __('SEO Meta Description') }}</label>
                <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ $brands->seo_meta_description }}</textarea>
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
@endsection