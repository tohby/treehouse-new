@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-md-6">
            <h4>New User</h4>
        </div>
    </div>
    <div class="bg-white rounded-lg p-3">
        
        <form method="POST" action="{{action("UsersController@store")}}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstname">Firstname</label>
                    <input type="text" class="form-control" name="firstname">
                </div>
                <div class="form-group col-md-6">
                    <label for="lastname">Lastname</label>
                    <input type="text" class="form-control" name="lastname">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-10">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="role">Role</label>
                    <select name="role" class="form-control">
                        <option selected value="3">Admin</option>
                        <option value="2">Manager</option>
                        <option value="1">Super Admin</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="password">{{ __('Password') }}</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                    <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary px-5">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection