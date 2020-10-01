@extends('layouts.dashboard')
@section('title')
  Review Documents
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
                <h6 class="m-0 font-weight-bold ">Documents For Review</h6>
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
                      @forelse ($all_review_doc as $document)
                        @if ($document->category_id == Auth::user()->category_id)
                          <tr>
                            <td>{{ $sl++ }}</td>
                            <td>{{ $document->RelationBetweenCategory->category }}</td>
                            <td>{{ $document->title }}</td>
                            {{-- <td>{{ $document->description }}</td> --}}
                            @if ($document->approval_status == 1)
                              <td class="text-success font-weight-bold">Approved</td>
                              @else
                                <td class="text-dasrk font-weight-bold">This paper is in under review.</td>
                            @endif
                            <td>
                              <a href="{{ url('/document-detail') }}/{{ $document->id }}" class="btn btn-info btn-circle" >
                                <i class="fas fa-eye"></i>
                              </a>
                              @if ($document->approval_status != 1)
                                <a href="{{ url('/comment', $document->id) }}" class="btn btn-success btn-circle">
                                  <i class="far fa-comment-alt"></i>
                                </a>
                              @endif
                              <div class="float-right">
                                @if ($document->approval_status != 1)
                                  <form class="" action="{{ route('document_approve') }}" method="post">
                                    @csrf
                                    <input type="checkbox" name="approve" >
                                    <input type="text" name="id" value="{{ $document->id }}" hidden>
                                    <input type="submit" class="btn btn-success" name="" value="Approve">
                                  </form>
                                @endif
                              </div>
                            </td>
                          </tr>
                        @endif
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
