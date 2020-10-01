@extends('layouts.dashboard')
@section('title')
    Category
@endsection
@section('content')
<div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
        <div class="col-lg-7 offset-lg-2">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Add Category</h1>
            </div>
          <form class="user" method="post" action="{{ route('category_insert') }}" >

              @csrf

              <div class="form-group">
                <input type="text" name="category" class="form-control" placeholder="Category">
              </div>
              <div class="form-group">
                <input class="btn btn-success" type="submit" value="Add">
              </div>
              {{-- <a href="#" class="btn btn-info">Cancel</a> --}}
              <hr>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection