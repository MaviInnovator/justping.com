@extends('admin.layouts.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ __('Team Members') }}</h1>
    <a href="{{ route('admin_team_member_create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-plus"></i> {{ __('Add Item') }}
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-sm" id="dtable">
                <thead>
                    <tr>
                        <th>{{ __('SL') }}</th>
                        <th>{{ __('Photo') }}</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Designation') }}</th>
                        <th>{{ __('Manage Experience') }}</th>
                        <th>{{ __('Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($team_members as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <div class="photo-container-small">
                                <a href="{{ asset('uploads/'.$item->photo) }}" class="magnific"><img src="{{ asset('uploads/'.$item->photo) }}" alt=""></a>
                            </div>
                        </td>
                        <td>
                            {{ $item->name }}
                        </td>
                        <td>
                            {{ $item->designation }}
                        </td>
                        <td>
                            <a href="{{ route('admin_team_member_experience',$item->id) }}" class="btn btn-success btn-sm rounded-pill pl_20 pr_20">{{ __('Manage Experience') }}</a>
                        </td>
                        <td>
                            <a href="{{ route('admin_team_member_edit',$item->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('admin_team_member_destroy',$item->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('{{ __('Are you sure?') }}')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection