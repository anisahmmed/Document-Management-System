<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\JudgeCategory;
use App\Models\Category;
use App\Models\User;

class JudgeCategoryController extends Controller
{
    //index
    public function register_judge_info()
    {
        // $all_judge_category = User::where('role_id', 2)->get();
        $all_judge = User::where('role_id', 2)->get();
        $all_category = Category::all();
        return view('admin.judge.index',compact('all_judge', 'all_category'));
    }

    //Set Judge Category
    public function set_judge_category(Request $request)
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
          'category_id' => $request->category_id,
          'name' => $request->judge_name,
          'email' => $request->email,
          'password' => Hash::make($request->password),
        ]);
        toastr()->success('Added new judge!');
        return back();
    }
}
