@extends('layouts.dashboard')
@section('title')
  Document Detail
@endsection
@section('content')
  <div class="container-fluid">
    <a href="{{ route('judge_review_document') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left"> Back</i></a>
    <hr>
      <div class="row">
        <div class="col-12">
            <div class="t-header">
              <div class="card shadow">
                <div class="card-header bg-success text-white">
                  <h6 class="m-0 font-weight-bold ">Document Detail</h6>
                </div>
                <div class="card-body">
                  <div class="float-right">
                    <i class="fas fa-file-alt fa-10x"></i><br><br>
                    <a href="#" class="btn btn text-primary" data-toggle="modal" data-target="#modal1"><i class="fas fa-file-alt"></i> View file</a>
                    <a href="{{ url('/document/download', $single_document->file) }}" class="btn btng text-success"><i class="fas fa-file-download"></i> Download File</a><br><br>
                    <div class="modal fade bd-example-modal-lg" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">

                        <!--Content-->
                        <div class="modal-content">

                          <!--Body-->
                          <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                              <iframe class="embed-responsive-item" src="{{ url('documents/'.$single_document->file) }}"
                                allowfullscreen></iframe>
                            </div>
                          </div>

                          <!--Footer-->
                          <div class="modal-footer justify-content-center">

                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                          </div>

                        </div>
                        <!--/.Content-->

                      </div>
                    </div>
                  </div>
                  <div class="text-justify">
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> --}}


                    <span style="color:#000; font-size:18px;">Document Category:</span> {{ $single_document->RelationBetweenCategory->category }} <br><br>
                    <span style="color:#000; font-size:18px;">Document Title:</span> {{ $single_document->title }} <br><br>
                    @php
                      $file_size = filesize('documents/' . $single_document->file);
                      // $final_size = $file_size / 1000000;
                      $final_size = number_format($file_size / 1048576,2);
                    @endphp
                    <span style="color:#000; font-size:18px;">Document Size:</span> {{ $final_size }} MB <br><br>
                    <span style="color:#000; font-size:18px;">Document Description:</span> {{ $single_document->description }} <br><br>
                  </div>

                </div>
              </div>
            </div>
        </div>
      </div>
    </div>







  <!--Modal: Name-->

  <!--Modal: Name-->
@endsection
