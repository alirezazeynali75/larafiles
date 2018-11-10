<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Files;
use App\Model\Admin\Packages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackagesController extends Controller
{
    public function index()
    {
        $packages = Packages::all();
        return view('admin.package.list')->with(['packages' => $packages]);
    }

    public function create()
    {
        return view('admin.package.create');
    }

    public function store(Request $request)
    {

        $new_package = new Packages();

        $new_package->package_title = request()->input('package_title');
        $new_package->package_price = request()->input('package_price');
        $new_package->save();
        return redirect()->route('admin.packages.list')->with(['package_success' => true]);
    }

    public function delete($package_id)
    {
        $package=Packages::find($package_id);
        $package->delete();
        return redirect()->route('admin.packages.list')->with(['delete_package'=>true]);
    }

    public function syncFile(Request $request,$package_id)
    {
        $files = Files::all();
        $packages_item = Packages::find($package_id);
        $package_files = $packages_item->files()->get()->pluck('file_id')->toArray();
        return view('admin.package.file' , compact('files' , 'package_files'));

    }

    public function updateSyncFile(Request $request,$package_id)
    {
        $package_item=Packages::find($package_id);
        $files = $request->input('files');
        if ($package_item && is_array($files)){
            $package_item->files()->sync($files);
            return redirect()->route('admin.packages.list')->with(['success_sync'=>true]);
        }
    }
}
