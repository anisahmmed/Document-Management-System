@extends('layouts.dashboard')
@section('title')
    Category
@endsection
@section('content')
<div class="container-fluid">
  <a href="{{ route('category_info') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left"> Back</i></a>
    <div class="row">
      <div class="col-8 offset-2">
          <div class="t-header">
            <div class="card shadow">
            <div class="card-header bg-success text-white">
              <h6 class="m-0 font-weight-bold ">Edit Category</h6>
            </div>
            <div class="card-body">
              <form class="user" method="post" action="{{ route('category_update') }}" >

                  @csrf

                  <div class="form-group">
                    <input type="text" name="category" class="form-control" value="{{ $single_category->category }}">
                    <input type="text" name="id" class="form-control" value="{{ $single_category->id }}" hidden>
                  </div>
                  <div class="form-group">
                    <input class="btn btn-success" type="submit" value="Add">
                  </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
</div>
@endsection
