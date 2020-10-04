@extends('layouts.dashboard')
@section('title')
    Comment
@endsection
@section('content')
<div class="container-fluid">
    <a href="{{ route('judge_review_document') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left"> Back</i></a>
    <div class="row">
      <div class="col-8 offset-2">
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
          <div class="t-header">
            <div class="card shadow">
            <div class="card-header bg-success text-white">
              <h6 class="m-0 font-weight-bold ">Give feedback</h6>
            </div><br>
            <div class="card-body text-dark">
              <form class="" action="{{ route('comment_send') }}" method="post">
                @csrf
                <div class="form-group">
                  <h5>1. Technical quality of the paper (Proposed method, results, comparison of results)</h5>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="technical_quality" id="exampleRadios1" value="Below Average" >
                    <input class="form-check-input" type="text" name="id" id="exampleRadios1" value="{{ $single_reply->id }}" hidden >
                    <label class="form-check-label" for="exampleRadios1">
                      Below Average
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="technical_quality" id="exampleRadios2" value="Average">
                    <label class="form-check-label" for="exampleRadios2">
                      Average
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="technical_quality" id="exampleRadios3" value="Good">
                    <label class="form-check-label" for="exampleRadios3">
                      Good
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="technical_quality" id="exampleRadios3" value="Excellent">
                    <label class="form-check-label" for="exampleRadios3">
                      Excellent
                    </label>
                  </div>
                </div><br>

                <div class="form-group">
                  <h5>2. Presentation quality of the paper (IEEE format, figures, tables)</h5>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="presentation_quality" id="exampleRadios1" value="Below Average" >
                    <label class="form-check-label" for="exampleRadios1">
                      Below Average
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="presentation_quality" id="exampleRadios2" value="Average">
                    <label class="form-check-label" for="exampleRadios2">
                      Average
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="presentation_quality" id="exampleRadios3" value="Good">
                    <label class="form-check-label" for="exampleRadios3">
                      Good
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="presentation_quality" id="exampleRadios3" value="Excellent">
                    <label class="form-check-label" for="exampleRadios3">
                      Excellent
                    </label>
                  </div>
                </div><br>

                <div class="form-group">
                  <h5>3. Clarity (Quality of English, background, description of methodology, results and analysis)</h5>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="clarity" id="exampleRadios1" value="Below Average" >
                    <label class="form-check-label" for="exampleRadios1">
                      Below Average
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="clarity" id="exampleRadios2" value="Average">
                    <label class="form-check-label" for="exampleRadios2">
                      Average
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="clarity" id="exampleRadios3" value="Good">
                    <label class="form-check-label" for="exampleRadios3">
                      Good
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="clarity" id="exampleRadios3" value="Excellent">
                    <label class="form-check-label" for="exampleRadios3">
                      Excellent
                    </label>
                  </div>
                </div><br>

                <div class="form-group">
                  <h5>4. Reference and literature survey (Reference, quality, publication year etc.)</h5>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="reference_survey" id="exampleRadios1" value="Below Average" >
                    <label class="form-check-label" for="exampleRadios1">
                      Below Average
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="reference_survey" id="exampleRadios2" value="Average">
                    <label class="form-check-label" for="exampleRadios2">
                      Average
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="reference_survey" id="exampleRadios3" value="Good">
                    <label class="form-check-label" for="exampleRadios3">
                      Good
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="reference_survey" id="exampleRadios3" value="Excellent">
                    <label class="form-check-label" for="exampleRadios3">
                      Excellent
                    </label>
                  </div>
                </div><br>

                <div class="form-group">
                  <h5>5. Relevance of the paper with the publication track(s) [Title, Abstraction, Conclusion]</h5>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="relevance" id="exampleRadios1" value="Below Average" >
                    <label class="form-check-label" for="exampleRadios1">
                      Below Average
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="relevance" id="exampleRadios2" value="Average">
                    <label class="form-check-label" for="exampleRadios2">
                      Average
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="relevance" id="exampleRadios3" value="Good">
                    <label class="form-check-label" for="exampleRadios3">
                      Good
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="relevance" id="exampleRadios3" value="Excellent">
                    <label class="form-check-label" for="exampleRadios3">
                      Excellent
                    </label>
                  </div>
                </div><br>

                <div class="form-group text-dark">
                  <label for="">Comment to authors</label>
                  <textarea name="author_message" rows="4" class="form-control"></textarea>
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
