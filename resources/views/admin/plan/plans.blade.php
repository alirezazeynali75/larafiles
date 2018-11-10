@extends('layouts.admin')
@section('content')
    <div class="my-3 p-3 bg-white rounded shadow-sm" >
        <h6 class="border-bottom border-gray pb-2 mb-0">plans</h6>
        <div class="media text-muted pt-3">
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                @if($plans && count($plans) > 0)
                    @foreach($plans as $plan)
                        <strong class="d-block text-gray-dark"><a href=" {{ route('admin.plans.delete' , $plan->plan_id) }}"> delete</a>  | title : {{  $plan->plan_title }} | limit : {{ $plan->plan_limit_download_count }} | price : {{ $plan->plan_price }}   </strong>
                    @endforeach
                @endif
            </p>
        </div>

        <small class="d-block text-right mt-3">
            <a href="#">All updates</a>
        </small>
@stop