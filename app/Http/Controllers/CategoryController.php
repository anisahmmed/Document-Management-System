<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
      $this->middleware('restrict_user');
    }
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
        toastr()->success('Added Successfully!','NEW CATEGORY');
        return redirect(route('category_info'));
    }

    //Edit Category
    public function edit_category($id)
    {
      // echo $id;
      $single_category = Category::find($id);
      return view('category.edit',compact('single_category'));
    }

    //Update Category
    public function category_update(Request $request)
    {
      Category::findOrFail($request->id)->update([
        'category' => $request->category,
      ]);
      toastr()->success('Updated!','CATEGORY');
      return redirect(route('category_info'));
    }

    //Category Delete
    public function category_delete($id)
    {
      Category::findOrFail($id)->delete();
      toastr()->error('Deleted!','CATEGORY');
      return back();
    }


}
