<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Category;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    //Document Insert form view
    public function insert_form()
    {
      $all_category = Category::all();
      return view('user.document.create_form',compact('all_category'));
    }

    //All Document VIew
    public function all_document()
    {
      $all_document = Document::all();
      return view('user.document.all_document',compact('all_document'));
    }

    //Insert Document
    public function document_insert(Request $request)
    {
      // $request->validate([
      //   'title' => 'required|string',
      //   'description' => 'required|string',
      //   'document' => 'required|max:3000|mimes:pdf',
      // ]);
      $authors = implode(','.' ', $request->name);
      $last_inserted_id = Document::insertGetId([
        'title' => $request->title,
        'user_id' => $request->user_id,
        'description' => $request->description,
        'author_name' => $authors,
        'category_id' => $request->category,
        'approval_status' => 0,
        'file' => $request->document,
      ]);

      if ($request->hasFile('document')) {

        $file_upload = $request->document;
        $file_extension = $file_upload->getClientOriginalExtension();
        $file_name = $last_inserted_id . "." . $file_extension;
        $request->document->move('documents/', $file_name);
        Document::findOrFail($last_inserted_id)->update([
          'file' => $file_name,
        ]);
      }
      toastr()->success('New Document Added!','DOCUMENT');
      return redirect(route('all_document'));
    }

    //individual document view
    public function document_view($id)
    {
      $single_doccument = Document::findOrFail($id);
      return view('user.document.single_show',compact('single_doccument'));
    }

    //Document Download
    public function document_download($file)
    {
      return response()->download('documents/'.$file);
    }

    //Update document details
    public function update_document_detail(Request $request)
    {
      Document::findOrFail($request->id)->update([
        'title' => $request->title,
        'description' => $request->description,
      ]);
      toastr()->success('Updated Successfully!', 'DOCUMENT DETAILS');
      return back();
    }

  }
