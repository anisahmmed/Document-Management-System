<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class HomeController extends Controller
{
    function announcements()
    {
        $all_documents = Document::all();
        return view('announcements', compact('all_documents'));
    }

    //Guest single document view
  function guest_document_view($id)
    {
        $single_document = Document::findOrFail($id);
        return view('view_document', compact('single_document'));
    }
}
