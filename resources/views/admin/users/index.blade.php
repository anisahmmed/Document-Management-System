@extends('layouts.dashboard')
@section('title')
    User Information
@endsection
@section('content')
<div class="container-fluid">
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalRegisterForm"><i class="fas fa-plus"> Create Judge</i></a>
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-success text-white text-center">
            <h4 class="modal-title w-100 font-weight-bold">Create Judge</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">

            <form class="" action="{{ route('create_judge') }}" method="post">
              @csrf
              <div class="md-form mb-5">
                <i class="fas fa-user prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="orangeForm-name">Name</label>
                <input type="text" id="orangeForm-name" name="judge_name" class="form-control validate" value="{{ old('judge_name') }}">
              </div>
              <div class="md-form mb-5">
                <i class="fas fa-envelope prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="orangeForm-email">Email</label>
                <input type="email" id="orangeForm-email" name="email" class="form-control validate" value="{{ old('email') }}">
              </div>

              <div class="md-form mb-4">
                <i class="fas fa-lock prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="orangeForm-pass">Password</label>
                <input type="password" id="orangeForm-pass" name="password" class="form-control validate">
                <small>*Password lenght is at least 8 digit.</small>
              </div>

            </div>
            <div class="modal-footer d-flex justify-content-right">
              <input type="submit" class="btn btn-success" name="submit" value="Create">
            </div>
            </form>
        </div>
      </div>
    </div>

    <hr>
    <div class="row">
      <div class="col-12">
          <div class="t-header">
            <div class="card shadow">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
            <div class="card-header bg-success text-white">
              <h6 class="m-0 font-weight-bold ">User Informations</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>SL. No</th>
                      <th>User Name</th>
                      <th>User Role</th>
                      <th>User Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @forelse ($all_user as $users)
                      <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $users->name }}</td>
                        @if ($users->role_id == 1)
                            <td>Admin</td>
                          @elseif($users->role_id == 2)
                            <td>Judge</td>
                            @else
                              <td>User</td>
                        @endif
                        @if ($users->status_id == 1)
                            <td>Active</td>
                            @else
                            <td>Blocked</td>
                        @endif
                        <td>
                        <a href="{{ url('/user/edit') }}/{{ $users->id }}" class="btn btn-info btn-circle">
                            <i class="fas fa-edit"></i>
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
