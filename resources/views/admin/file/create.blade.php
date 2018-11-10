@extends('layouts.admin')
@section('content')
<form action="" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group" dir="ltr">
      <label for="file_title">File Title</label>
      <input type="text" class="form-control" id="file_title" placeholder="File title" name="file_title" >
    </div>
    <div class="form-group">
      <label for="file_description">File description</label>
      <textarea class="form-control" name="file_description" id="file_description" cols="30" rows="10" ></textarea>
    </div>
    <div class="form-group">
        <label for="file">File</label>
        <input type="file" class="form-control-file" id="file" name="fileItem">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection
