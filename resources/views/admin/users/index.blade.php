@extends('layouts.dashboard')
@section('title')
    User Information
@endsection
@section('content')
<div class="container-fluid">
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
                  <tbody class="text-dark">

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
