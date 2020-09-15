<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class UserController extends Controller
{
    //Document Insert form view
    public function insert_form()
    {
      return view('user.document.create_form');
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
      $last_inserted_id = Document::insertGetId([
        'title' => $request->title,
        'description' => $request->description,
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
}
