<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\JudgeCategory;
use App\Models\Category;
use App\Models\User;

class JudgeCategoryController extends Controller
{
    public function __construct()
    {
      $this->middleware('restrict_user');
      $this->middleware('auth');
    }
    //index
    public function judge_info()
    {
        // $all_judge_category = User::where('role_id', 2)->get();
        $all_judge = User::where('role_id', 2)->get();
        $all_category = Category::all();
        return view('admin.judge.index',compact('all_judge', 'all_category'));
    }

    //Set Judge Category
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
          'category_id' => $request->category_id,
          'name' => $request->judge_name,
          'email' => $request->email,
          'password' => Hash::make($request->password),
        ]);
        toastr()->success('Added new judge!');
        return back();
    }

    //Judge Delete
    function judge_delete($id)
    {
        User::findOrFail($id)->delete();
        toastr()->error('Judge has been deleted!');
        return back();
    }



//END
}
