<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use App\Model\Admin\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return view('admin.dashboard.index')->with(['users' => $users]);

    }

    public function create()
    {
        return view('admin.user.create');

    }

    public function store(UserRequest $userRequest)

    {

        $new_user = new Users();
        $new_user->wallet = request()->input('wallet');
        $new_user->name = request()->input('name');
        $new_user->email = request()->input('email');
        $new_user->password = request()->input('password');
        $new_user->role = request()->input('role');
        $new_user->save();
        return redirect()->route('admin.users.list')->with(['success'=>true]);
    }

    public function delete($user_id)
    {
        if ($user_id && ctype_digit($user_id)){
            $userItem = Users::find($user_id);
            if ($userItem instanceof  Users){
                $userItem->delete();
                return redirect()->route('admin.users.list')->with(['delete'=>true]);
            }
        }

    }

    public function edit($user_id)
    {
        if ($user_id && ctype_digit($user_id)){
            $userItem = Users::find($user_id);
            if ($userItem instanceof  Users){
                return view('admin.user.edit')->with(['userItem'=>$userItem]);
            }
        }
    }

    public function update(UserRequest $userRequest,$user_id)
    {

        $inputs = request()->except('_token');
        if (empty(request()->input('password'))){
            unset($inputs['password']);
        }

        $userItem = Users::find($user_id);
        $userItem->update($inputs);
        return redirect()->route('admin.users.list')->with(['status' => true]);
    }

}
