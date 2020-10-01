@extends('layouts.dashboard')
@section('title')
  All Documents
@endsection
@section('content')
  <div class="container-fluid">
      {{-- <a href="{{ route('insert_form') }}" class="btn btn-info "><i class="fas fa-upload"> Upload</i></a><br> --}}
      <hr>
      <div class="row">
        <div class="col-12">
            <div class="t-header">
              <div class="card shadow">
              <div class="card-header bg-success text-white">
                <h6 class="m-0 font-weight-bold ">All Documents</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>SL. No</th>
                        <th>Category</th>
                        <th>Title</th>
                        {{-- <th>Description</th> --}}
                        <th>Approval Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="text-dark">
                      @php
                        $sl= 1;
                      @endphp
                      @forelse ($all_documents as $document)
                          <tr>
                            <td>{{ $sl++ }}</td>
                            <td>{{ $document->RelationBetweenCategory->category }}</td>
                            <td>{{ $document->title }}</td>
                            {{-- <td>{{ $document->description }}</td> --}}
                            @if ($document->approval_status == 1)
                              <td class="text-success font-weight-bold">Published</td>
                              @else
                                <td class="text-dasrk font-weight-bold">This paper is in under review.</td>
                            @endif
                            <td>
                              <a href="{{ url('/document/details') }}/{{ $document->id }}" class="btn btn-info btn-circle" >
                                <i class="fas fa-eye"></i>
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
