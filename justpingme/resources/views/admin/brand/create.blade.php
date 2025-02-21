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
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Business Name') }} *</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Slug') }}*</label>
                        <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
                    </div>
                </div>
                    <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Pincode') }} *</label>
                        <input type="text" name="pincode" class="form-control" value="{{ old('pincode') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Address') }} *</label>
                        <input type="text" name="address" class="form-control" value="{{ old('address') }}">
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
                        <input type="text" name="state" class="form-control" value="{{ old('state') }}">
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
                        <label for="" class="form-label">{{ __('Mobile Number') }}</label>
                        <input type="text" name="mobile_number" class="form-control" value="{{ old('mobile_number') }}">
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
                        <label for="" class="form-label">{{ __('Category') }}*</label>
                        <select id="iconSelect" name="category" class="form-select">
                            <option value="">{{ __('Select Category') }}</option>
                            @foreach($icons as $icon)
                            <option value="{{ $icon->id }}">{{ $icon->name }}</option>
                            @endforeach
                        </select>
                        <div id="iconPreview"></i></div>
                    </div>
                </div>
                
            </div>
          <div class="mb-3">
                <label for="" class="form-label">{{ __('Keywords') }} *</label>
                <textarea name="keywords" class="form-control h_100" cols="30" rows="10">{{ old('short_description') }}</textarea>
            </div>
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