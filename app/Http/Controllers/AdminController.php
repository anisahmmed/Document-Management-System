<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Document;

class AdminController extends Controller
{
    public function __construct()
    {
      $this->middleware('restrict_user');
      $this->middleware('auth');
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

    //View All documents
    function all_documents()
    {
        $all_documents = Document::all();
        return view('admin.documents.all_document',compact('all_documents'));
    }

    //Single Document Details
    function single_document_detail($id)
    {
        $single_document_detail = Document::findOrFail($id);
        return view('admin.documents.single_document_view',compact('single_document_detail'));
    }
}
