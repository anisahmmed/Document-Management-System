@extends('layouts.dashboard')
@section('title')
    User Edit
@endsection
@section('content')
<div class="container-fluid">
  <a href="{{ route('user_info') }}" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left"> Back</i></a>
    <div class="row">
      <div class="col-8 offset-2">
          <div class="t-header">
            <div class="card shadow">
            <div class="card-header bg-success text-white">
              <h6 class="m-0 font-weight-bold ">Edit User Informations</h6>
            </div>
            <div class="card-body">
              <form  action="{{ route('user_update') }}" method="post">
                @csrf
                  <div class="form-group">
                    <label for="">User Name</label>
                    <input type="text" class="form-control" value="{{ $single_user_info->name }}" readonly>
                    <input type="text" name="id" class="form-control" value="{{ $single_user_info->id }}" hidden>
                  </div>
                  <div class="form-group">
                    <label for="">User Role</label>
                    <select name="user_role" class="form-control">
                      @if ($single_user_info->role_id == 1)
                        <option class="bg-success text-white" value="1">Admin</option>
                      @else
                        <option class="bg-danger text-white" value="2">User</option>
                      @endif
                      <option value="1">Admin</option>
                      <option value="2">User</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">User Status</label>
                    <select name="user_status" class="form-control">
                      @if ($single_user_info->status_id == 1)
                        <option class="bg-success text-white" value="1">Active</option>
                      @else
                        <option class="bg-danger text-white" value="2">Blocked</option>
                      @endif
                      <option value="1">Active</option>
                      <option value="2">Block</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-success" name="submit" value="Update">
                  </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
</div>
@endsection
