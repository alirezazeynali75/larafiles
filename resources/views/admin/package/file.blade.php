@extends('layouts.admin')
@section('content')
    <div class="alert alert-primary" role="alert">
       files
    </div>
    @if($files)
        <form action="" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @foreach($files as $file)
            <div class="form-group" dir="ltr" style="font-size: 10px;">
                <input type="checkbox" class="form-control" name="files[]" value="{{ $file->file_id }} {{ isset($package_file) && in_array($file->file_id,$package_file) ? 'checked':'' }}"><strong>{{ $file->file_title }}</strong><br><br>

            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    @endif
@stop