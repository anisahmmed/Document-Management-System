@extends('layouts.dashboard')
@section('title')
    Document Insert Form
@endsection
@section('content')
<div class="container-fluid">
    <a href="{{ route('all_document') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left"> Back</i></a>
    <div class="row">
      <div class="col-8 offset-2">
          <div class="t-header">
            <div class="card shadow">
            <div class="card-header bg-success text-white">
              <h6 class="m-0 font-weight-bold ">Upload Document</h6>
            </div>
            <div class="card-body">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <form class="" id="document_insert_form" action="{{ route('document_insert') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="">Title</label>
                  <input type="text" name="title" class="form-control" placeholder="Title" value="{{ old('title') }}">
                  <input type="text" name="user_id" class="form-control" value="{{ Auth::user()->user_id }}" hidden>
                </div>
                <div class="form-group">
                  <label for="">Description</label>
                  <textarea name="description" rows="4" class="form-control" placeholder="Description here...">{{ old('description') }}</textarea>
                </div>
                  <label for="">Athor Name</label>
                  <table class="table table-bordered" id="dynamic_field">
                    <thead>
                      <tr>
                        {{-- <th>Add Author</th> --}}
                      </tr>
                    </thead>
                    <tbody id="new_fields">

                    </tbody>
                    {{-- <tr>
                      <td> <input type="text" name="name[]" class="form-control name_list"> </td>
                      <td> <button name="add" id="add" class="btn btn-info">Add More</button> </td>
                    </tr> --}}
                  </table>
                <div class="form-group">
                  <label for="">Select Category</label>
                  <select class="form-control" name="category">
                    <option value="" class="bg-info text-white">Select</option>
                    @foreach ($all_category as $category)
                      <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Upload File</label>
                  <input type="file" name="document" class="form-control" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-danger">Please upload only pdf files.</small>
                </div>
                <div class="form-group">
                  <input type="submit" id="save" class="btn btn-success" name="submit" id="submit" value="Upload">
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
</div>

@endsection
