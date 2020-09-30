@extends('layouts.dashboard')
@section('title')
    Comment
@endsection
@section('content')
<div class="container-fluid">
    <a href="{{ route('judge_review_document') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left"> Back</i></a>
    <div class="row">
      <div class="col-8 offset-2">
          <div class="t-header">
            <div class="card shadow">
            <div class="card-header bg-success text-white">
              <h6 class="m-0 font-weight-bold ">Give feedback</h6>
            </div>
            <div class="card-body">
              <form class="" action="{{ route('comment_send') }}" method="post">
                @csrf
                <div class="form-group">
                  <textarea name="comment" rows="6" class="form-control">{{ $single_reply->feedback_message }}</textarea>
                  <input type="text" name="id" class="form-control" value="{{ $single_reply->id }}" hidden>
                </div>

                <div class="form-group">
                  <input type="submit" class="btn btn-success" name="submit" value="Send">
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
</div>

@endsection
