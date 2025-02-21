@extends('admin.layouts.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ __('Edit Client') }}</h1>
    <a href="{{ route('admin_client_index') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-bars"></i> {{ __('All Items') }}
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('admin_category_update',$categories->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Name') }}</label>
                        <input type="text" name="name" class="form-control" value="{{ $categories->name }}">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Slug') }}</label>
                        <input type="text" name="slug" class="form-control" value="{{ $categories->slug }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Existing Icon') }}</label>
                        <div><img src="{{ asset('uploads/'.$categories->icon) }}" alt="" class="w_100"></div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Change Icon') }}</label>
                        <div><input type="file" name="icon"></div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Existing Banner') }}</label>
                        <div><img src="{{ asset('uploads/'.$categories->banner) }}" alt="" class="w_100"></div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Change Banner') }}</label>
                        <div><input type="file" name="banner"></div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success mb-50 btn-common">{{ __('Update') }}</button>
        </form>
    </div>
</div>
@endsection