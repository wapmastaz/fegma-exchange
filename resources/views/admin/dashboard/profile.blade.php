@extends('admin.layouts.app')

@section('contents')
  <!-- Row -->
  <div class="row">
    <div class="col-xl-4 col-lg-4">
      <div class="card box-widget widget-user">
        <div class="widget-user-image mx-auto mt-5"><img alt="User Avatar" class="rounded-circle"
            src="{{ $user->getAvatar() }}"></div>
        <div class="card-body text-center pt-2">
          <div class="pro-user">
            <h3 class="pro-user-username  mb-1 fs-22">{{ $user->name }}</h3>
            <h6 class="pro-user-desc text-muted">Femag Exchange Admin</h6>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header ">
          <div class="card-title">Edit Password</div>
        </div>
        <div class="card-body">
          <form action="{{ route('change-password', $user->id) }}" method="post">
            @csrf
            <div class="form-group">
              <label class="form-label">Old Password</label>
              <input type="password" class="form-control" name="old_password" value="">
            </div>
            <div class="form-group">
              <label class="form-label">New Password</label>
              <input type="password" class="form-control" name="password" value="">
            </div>
            <div class="form-group">
              <label class="form-label">Confirm Password</label>
              <input type="password" class="form-control" name="password_confirmation" value="">
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-success">Update Password</button>
            </div>
          </form>
        </div>

      </div>
    </div>
    <div class="col-xl-8 col-lg-8">
      <div class="card">
        <div class="card-header ">
          <div class="card-title">Edit Profile</div>
        </div>
        <div class="card-body">
          <div class="card-title font-weight-bold">Basic info:</div>
          <form action="{{ route('update-profile', $user->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">

              <div class="col-sm-6 col-md-6">


                <div class="form-group">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $user->name }}">
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-group">
                  <label class="form-label">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="Username"
                    value="{{ $user->username }}">
                </div>
              </div>
              <div class="col-sm-12 col-md-12">
                <div class="form-group">
                  <label class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" placeholder="Email"
                    value="{{ $user->email }}">
                </div>
              </div>
              <div class="col-sm-12 col-md-12">
                <div class="form-group">
                  <label class="form-label">Avatar</label>
                  <input type="file" name="image" class="form-control">
                </div>
              </div>
            </div>
            <div class="card-footer text-end">
              <button type="submit" class="btn  btn-success">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- End Row-->
  @endsection
