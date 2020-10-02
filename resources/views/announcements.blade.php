@extends('home.app')
@section('title')
  Announcements
@endsection
@section('content')
  <hr>
  <div class="card-header bg-success">
    <h1 class="h4 mb-0 text-white">&nbsp&nbsp&nbsp Announcements</h1>
  </div>
  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        @foreach ($all_documents as $documents)
          @if ($documents->approval_status = 1)
            <div class="col-lg-3">
              <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                <div class="features-icons-icon d-flex">
                  <i class="fas fa-file-alt fa-10x m-auto text-primary"></i>
                </div>
                <a href="{{ url('/document/detail', $documents->id) }}" class="btn btn"><i class="fas fa-eye text-primary"></i> Open</a>
                <h6 class="text-success">{{ $documents->title }}</h6>
                <p >Published Date: {{ date('d-M-Y', strtotime($documents->published_date)) }} </p>
              </div>
            </div>
          @endif
        @endforeach

      </div>
    </div>
  </section>
@endsection
