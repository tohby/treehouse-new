@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-md-6">
            <h4>Change Password</h4>
        </div>
    </div>
    <div class="bg-white rounded-lg p-3">

        <form method="POST" action="{{action("ChangePasswordController@change")}}">
            @csrf
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="password">Current Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required
                        autocomplete="new-password">
                
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="password">New {{ __('Password') }}</label>
                    <input type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password"
                        required autocomplete="new-password">

                    @error('new_password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                    <input type="password" class="form-control" name="new_password_confirmation" required
                        autocomplete="new-password">
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary px-5">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection