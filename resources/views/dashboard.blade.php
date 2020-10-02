@extends('layouts.dashboard')
@section('title')
  Dashboard
@endsection
@section('content')

  <!-- Begin Page Content -->
  <div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
    <div class="row">
    <!-- Page Heading -->
    @foreach ($all_documents as $documents)
      @if ($documents->approval_status = 1)
        <div class="col-lg-3">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fas fa-file-alt fa-5x m-auto text-primary"></i>
            </div><br>
            {{-- <a href="{{ url('/document/detail', $documents->id) }}"><i class="fas fa-eye fa-2x text-primary"></i></a> --}}
            <h6 class="text-success text-center">{{ $documents->title }}</h6>
            <p class="text-center">Published Date: {{ date('d-M-Y', strtotime($documents->published_date)) }} </p>
          </div>
        </div>
      @endif
    @endforeach

    </div>
  </div>
  <!-- /.container-fluid -->
@endsection
