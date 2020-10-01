@extends('layouts.dashboard')
@section('title')
    All Categories
@endsection
@section('content')
<div class="container-fluid">
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalRegisterForm"><i class="fas fa-plus"> Add New Category</i></a>
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-success text-white text-center">
            <h4 class="modal-title w-100 font-weight-bold">Create Category</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">

            <form class="" action="{{ route('category_insert') }}" method="post">
              @csrf
              <div class="md-form mb-5">
                <i class="fas fa-drumstick-bite prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="orangeForm-name">Category</label>
                <input type="text" id="orangeForm-name" name="category" class="form-control validate" value="{{ old('judge_name') }}">
              </div>

            </div>
            <div class="modal-footer d-flex justify-content-right">
              <input type="submit" class="btn btn-success" name="submit" value="Create">
            </div>
            </form>
        </div>
      </div>
    </div>
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
