@extends('layouts.dashboard')
@section('title')
    User Information
@endsection
@section('content')
<div class="container-fluid">
    {{-- <a href="#" class="btn btn-primary"><i class="fas fa-plus">Add New</i></a>--}}
    <hr>
    <div class="row">
      <div class="col-12">
          <div class="t-header">
            <div class="card shadow">
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
