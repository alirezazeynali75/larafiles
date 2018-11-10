<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Files;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilesController extends Controller
{
    public function index()
    {
        $files_list = Files::all();
        return view('admin.file.list')->with(['files_list' => $files_list]);
    }

    public function create()
    {
        return view('admin.file.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'file_title' => 'required',
            'fileItem' => 'required',
        ], [
            'file_title.required' => 'You should enter the file title',
            'file.required' => 'You should enter the file'
        ]);


        $new_file_data = [
            'file_title' => $request->input('file_title'),
            'file_description' => $request->input('file_description'),
            'file_type' => $request->file('fileItem')->getMimeType(),
            'file_size' => $request->file('fileItem')->getClientSize(),
        ];
        $new_file_name = str_random(45) . '.' . $request->file('fileItem')->getClientOriginalExtension();
        $result = $request->file('fileItem')->move(public_path('images'), $new_file_name);
        $new_file_data['file_name'] = $new_file_name;
        Files::create($new_file_data);
        return redirect()->route('admin.files.list')->with(['success_file' => true]);

    }

    public function delete($file_id)
    {
        if ($file_id && ctype_digit($file_id)){
            $fileItem = Files::find($file_id);
            if ($fileItem instanceof  Files){
                $fileItem->delete();
                return redirect()->route('admin.files.list')->with(['delete_file'=>true]);
            }
        }
    }
    //
}
