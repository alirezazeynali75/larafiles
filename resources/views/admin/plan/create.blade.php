@extends('layouts.admin')
@section('content')
    <form action="" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group" dir="ltr">
            <label for="plan_title">Plan Title</label>
            <input type="text" class="form-control" id="plan_title" placeholder="plan title" name="plan_title" >
        </div>
        <div class="form-group">
            <label for="plan_limit_download_countn">Plan Limit</label>
            <input type="text" class="form-control" name="plan_limit_download_count" id="plan_limit_download_count">
        </div>
        <div class="form-group">
            <label for="plan_price">Plan Price</label>
            <input type="text" class="form-control-file" id="plan_price" name="plan_price">
        </div>
        <div class="form-group">
            <label for='plan_days_count'>Plan Days</label>
            <input type="text" class="form-control-file" id="plan_days_count" name="plan_days_count">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

@endsection
