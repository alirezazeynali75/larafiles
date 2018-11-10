@extends('layouts.admin')
@section('content')
    <form action="" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group" dir="ltr">
            <label for="package_title">Package Title</label>
            <input type="text" class="form-control" id="package_title" placeholder="package title" name="package_title" >
        </div>
        <div class="form-group">
            <label for="package_price">Package Price</label>
            <input class="form-control" name="package_price" id="package_price">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

@endsection
