@extends('layouts.dashboard')
@section('title')
    All Categories
@endsection
@section('content')
<div class="container-fluid">
    <a href="{{ route('category_form') }}" class="btn btn-primary"><i class="fas fa-plus">Add New</i></a>
    <hr>
    <div class="row">
      <div class="col-12">
          <div class="t-header">
            <div class="card shadow">
            <div class="card-header bg-success text-white">
              <h6 class="m-0 font-weight-bold ">Categories</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>SL. No</th>
                      <th>Category</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @forelse ($all_categories as $category)
                      <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $category->category }}</td>
                        <td>
                          <a href="{{ url('/category/edit', $category->id) }}" class="btn btn-info btn-circle">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="{{ url('/category/delete',$category->id) }}" class="btn btn-danger btn-circle ">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                    @empty
                      <tr class="text-center">
                        <td colspan="6">No Data Availabe</td>
                      </tr>
                    @endforelse

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
</div>
@endsection
