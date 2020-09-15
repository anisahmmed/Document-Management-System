@extends('layouts.dashboard')
@section('title')
    Document Insert Form
@endsection
@section('content')
<div class="container-fluid">
    <a href="{{ route('all_document') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left"> Back</i></a>
    <hr>
    <div class="row">
      <div class="col-8 offset-2">
          <div class="t-header">
            <div class="card shadow">
            <div class="card-header bg-success text-white">
              <h6 class="m-0 font-weight-bold ">Upload Document</h6>
            </div>
            <div class="card-body">
              <form class="" action="{{ route('document_insert') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="">Title</label>
                  <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="">Description</label>
                  <textarea name="description" rows="4" class="form-control" placeholder="Description here..."></textarea>
                </div>
                <div class="form-group">
                  <label for="">Upload File</label>
                  <input type="file" name="document" class="form-control" >
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-success" name="submit" value="Create">
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
</div>
@endsection
