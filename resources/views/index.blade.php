@extends('home.app')
@section('title')
  EDMS
@endsection
@section('content')

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">SUBMIT YOUR PAPER & GET APPROVAL TO PUBLISH</h1>
          <a href="{{ route('login_form') }}" class="btn btn-lg btn-success">Getting started</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fas fa-file-alt fa-10x m-auto text-primary"></i>
            </div>
            <h3>Research Paper</h3>
            <p class="lead mb-0">Published!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fas fa-file-alt fa-10x m-auto text-primary"></i>
            </div>
            <h3>Research Paper</h3>
            <p class="lead mb-0">Published!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fas fa-file-alt fa-10x m-auto text-primary"></i>
            </div>
            <h3>Research Paper</h3>
            <p class="lead mb-0">Published!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
