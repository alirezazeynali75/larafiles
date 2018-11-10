@extends('layouts.admin')
@section('content')
    @include('admin.partial.success')
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">files</h6>
        <div class="media text-muted pt-3">
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                @if($files_list && count($files_list) > 0)
                    @foreach($files_list as $file)
                        <strong class="d-block text-gray-dark"><a
                                    href="{{ route('admin.files.delete' , $file->file_id)}}"> delete</a>
                            | {{ $file->file_id }}| {{ $file->file_type }} |{{ $file->file_title }}
                            | {{ $file->file_size }}   </strong>
                    @endforeach
                @endif
            </p>
        </div>

        <small class="d-block text-right mt-3">
            <a href="#">All updates</a>
        </small>
    </div>
@stop
