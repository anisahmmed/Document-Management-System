<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JudgeCategory;

class JudgeCategoryController extends Controller
{
    //index
    public function register_judge_info()
    {
        $all_judge_category = JudgeCategory::all();
        return view('admin.judge.index',compact('all_judge_category'));
    }
}
