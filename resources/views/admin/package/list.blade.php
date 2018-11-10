@extends('layouts.admin')
@section('content')
    @include('admin.partial.success')
    <div class="my-3 p-3 bg-white rounded shadow-sm" >
        <h6 class="border-bottom border-gray pb-2 mb-0">packages</h6>
        <div class="media text-muted pt-3">
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                @if($packages && count($packages) > 0)
                    @foreach($packages as $package)
                        <strong class="d-block text-gray-dark"><a href=" {{ route('admin.packages.delete' , $package->package_id) }}"> delete</a> | <a href=" {{ route('admin.packages.syncFile' , $package->package_id) }}"> Files</a> |{{ $package->package_title }} | {{ $package->package_price }} </strong>
                    @endforeach
                @endif
            </p>
        </div>

        <small class="d-block text-right mt-3">
            <a href="#">All updates</a>
        </small>
    </div>
@stop