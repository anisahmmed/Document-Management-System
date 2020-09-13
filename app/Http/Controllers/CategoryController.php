<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    function category_form()
    {
        return view('category.category_form');
    }
    //Category Informations
    function category_info()
    {
        $all_categories = Category::all();
        return view('category.categories',['all_categories'=>$all_categories]);
    }
    
    //Category insert
    function category_insert(Request $request)
    {
        Category::create([
            'category' => $request->category,
        ]);
        return redirect(route('category_info'));
        // return back();
    }
}
