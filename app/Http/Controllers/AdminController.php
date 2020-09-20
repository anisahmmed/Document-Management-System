<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
    public function __construct()
    {
      $this->middleware('restrict_user');
    }
    //User informations
    public function user_info()
    {
        $all_user = User::all();
        return view('admin.users.index',compact('all_user'));
    }

    //Edit User Information
    public function user_edit($id)
    {
        $single_user_info = User::find($id);
        return view('admin.users.edit',compact('single_user_info'));
    }

    //User Update
    public function user_update(Request $request)
    {
      User::findOrFail($request->id)->update([
        'role_id' => $request->user_role,
        'status_id' => $request->user_status,
      ]);
      toastr()->success('Updated!','USER INFORMATION');
      return redirect(route('user_info'));
    }

    //Create Judge
    public function create_judge(Request $request)
    {
        $request->validate([
          'judge_name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:8',
        ]);

        User::create([
          'role_id' => 2,
          'status_id' => 1,
          'user_id' => rand(),
          'name' => $request->judge_name,
          'email' => $request->email,
          'password' => Hash::make($request->password),
        ]);
        toastr()->success('New Judge Added');
        return back();
    }
}
