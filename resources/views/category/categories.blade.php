@extends('layouts.dashboard')
@section('title')
    All Categories
@endsection
@section('content')
<div class="container-fluid">
    <a href="{{ route('category_form') }}" class="btn btn-primary"><i class="fas fa-plus">Add New Category</i></a>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Category</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>SL</th>
                <th>Category</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php
                $sl =1;
              @endphp
              @foreach ($all_categories as $category)
                <tr>
                  <td>{{ $sl++ }}</td>
                  <td>{{ $category->category }}</td>
                  <td>
                    <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i>Edit</a>
                  </td>
                </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
@endsection