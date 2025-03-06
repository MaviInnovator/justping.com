@extends('admin.layouts.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ __('Create Category') }}</h1>
    <a href="{{ route('admin_client_index') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-bars"></i> {{ __('All Items') }}
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('admin_subcategory_store') }}" method="post" enctype="multipart/form-data">
            @csrf
             <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Select Category') }}</label>
                       <select id="iconSelect" name="category" class="form-select">
                            <option value="">{{ __('Select Category') }}</option>
                            @foreach($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Name') }}</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>
                </div>
            </div>
                  <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Slug') }}</label>
                        <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Icon') }} *</label>
                        <div><input type="file" name="icon"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">{{ __('Banner') }} *</label>
                        <div><input type="file" name="banner"></div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success mb-50 btn-common">{{ __('Submit') }}</button>
        </form>
    </div>
</div>
@endsection