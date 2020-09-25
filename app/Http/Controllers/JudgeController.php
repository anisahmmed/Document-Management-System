<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class JudgeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //judges documents view for review
    public function judge_review()
    {
      $all_review_doc = Document::all();
      return view('judge_utilities.review_document', compact('all_review_doc'));
    }

    //Document Approve
    public function document_approve(Request $request)
    {
      $socument = Document::findOrFail($request->id);
      $approveVal = $request->approve;
      if ($approveVal == 'on') {
        $approveVal = 1;
      }
      else {
        $approveVal = 0;
      }
      Document::findOrFail($request->id)->update([
        'approval_status' =>$approveVal,
      ]);
      toastr()->success('The document has been approved!');
      return back();
    }

    //Document Detail
    public function document_detail($id)
    {
      $single_document = Document::findOrFail($id);
      return view('judge_utilities.document_detail', compact('single_document'));
    }
}
