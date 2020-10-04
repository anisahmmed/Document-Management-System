@extends('layouts.dashboard')
@section('title')
  View Comment
@endsection

@section('content')
  <div class="container-fluid">
    <a href="{{ route('all_document') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left"> Back</i></a>
    <hr>
      <div class="row">
        <div class="col-12">
            <div class="t-header">
              <div class="card shadow">
                <div class="card-header bg-success text-white">
                  <h6 class="m-0 font-weight-bold ">Feedback Detail</h6>
                </div>
                <div class="card-body text-dark">
                  <div class="form-group">
                    <label for="">1. Technical quality of the paper (Proposed method, results, comparison of results)</label><br>
                    {{-- <h5>1. Technical quality of the paper (Proposed method, results, comparison of results)</h5> --}}
                    <div class="form-check-inline">
                      <label class="" for="">
                        &nbsp=> {{ $single_message->technical_quality }}
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">2. Presentation quality of the paper (IEEE format, figures, tables)</label><br>
                    {{-- <h5></h5> --}}
                    <div class="form-check-inline">
                      <label class="" for="">
                        &nbsp=> {{ $single_message->presentaion_quality }}
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">3. Clarity (Quality of English, background, description of methodology, results and analysis)</label><br>
                    {{-- <h5>3. Clarity (Quality of English, background, description of methodology, results and analysis)</h5> --}}
                    <div class="form-check-inline">
                      <label class="" for="">
                        &nbsp=> {{ $single_message->clarity }}
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">4. Reference and literature survey (Reference, quality, publication year etc.)</label><br>
                    {{-- <h5>4. Reference and literature survey (Reference, quality, publication year etc.)</h5> --}}
                    <div class="form-check-inline">
                      <label class="" for="">
                        &nbsp=> {{ $single_message->reference_survey }}
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">5. Relevance of the paper with the publication track(s) [Title, Abstraction, Conclusion]</label><br>
                    {{-- <h5>5. Relevance of the paper with the publication track(s) [Title, Abstraction, Conclusion]</h5> --}}
                    <div class="form-check-inline">
                      <label class="" for="">
                        &nbsp=> {{ $single_message->relevance }}
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Comment to authors</label><br>
                    {{-- <h5>5. Relevance of the paper with the publication track(s) [Title, Abstraction, Conclusion]</h5> --}}
                    <div class="form-check-inline">
                      <label class="" for="">
                        &nbsp=> {{ $single_message->author_message }}
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
