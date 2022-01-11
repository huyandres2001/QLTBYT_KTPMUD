@extends('user.user_master')

@section('user')

    <div class="row" style="padding: 20px;">
        <div class="col-md-6">
            <h3>Change Password</h3>
            <form method="post" action="{{ route('user.password.update') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                    <input type="text" name="name" class="form-control" placeholder="{{ $user->HoVaTen }}" disabled
                        readonly>
                    <!---->
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="{{ $user->Email }}" disabled
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Current Password</label>
                    <input type="password" name="current_password" id="current_password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">New Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Update Password</button>
            </form>
        </div>
    </div>
@endsection
