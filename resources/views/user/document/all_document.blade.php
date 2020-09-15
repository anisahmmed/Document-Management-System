@extends('layouts.dashboard')
@section('title')
    Documents
@endsection
@section('content')
<div class="container-fluid">
    <a href="{{ route('insert_form') }}" class="btn btn-primary"><i class="fas fa-plus">Add New</i></a>
    <hr>
    <div class="row">
      <div class="col-12">
          <div class="t-header">
            <div class="card shadow">
            <div class="card-header bg-success text-white">
              <h6 class="m-0 font-weight-bold ">Documents</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>SL. No</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>File</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @forelse ($all_document as $document)
                      <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $document->title }}</td>
                        <td>{{ $document->description }}</td>
                        <td>{{ $document->file }}</td>
                        <td>
                          <a href="#" class="btn btn-info btn-circle">
                            <i class="fas fa-file-alt"></i>
                          </a>
                          <a href="#" class="btn btn-info btn-circle">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="#" class="btn btn-danger btn-circle ">
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
