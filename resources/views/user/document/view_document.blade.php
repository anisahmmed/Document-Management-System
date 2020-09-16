@extends('layouts.dashboard')
@section('title')

@endsection
@section('content')
  <div class="text-center">
    <iframe src="{{ url('documents/'.$single_doccument->file) }}" width="1000" height="600"></iframe>
  </div>
@endsection
