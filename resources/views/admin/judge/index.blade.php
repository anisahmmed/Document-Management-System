@extends('layouts.dashboard')
@section('title')
  Judge Category
@endsection
@section('content')
<div class="container-fluid">
  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalRegisterForm"><i class="fas fa-plus"> Register New</i></a>
  <hr>
  <div class="row">
    <div class="col-12">
        <div class="t-header">
          <div class="card shadow">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          <div class="card-header bg-success text-white">
            <h6 class="m-0 font-weight-bold ">Judge Categories</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>SL. No</th>
                    <th>Judge Name</th>
                    <th>Category</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  @forelse ($all_judge_category as $judge_category)
                    <tr>
                      <td>{{ $loop->index + 1 }}</td>
                      <td>{{ $judge_category->judge_id }}</td>
                      <td>{{ $judge_category->category_id }}</td>
                      <td>
                        <a href="#" class="btn btn-info btn-circle">
                          <i class="fas fa-edit"></i>
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
