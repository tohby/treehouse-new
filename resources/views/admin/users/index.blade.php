@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-md-6">
            <h4>Users</h4>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <a href="/users/create" type="button" class="btn btn-dark">Add New</a>
        </div>
    </div>

    <div class="bg-white rounded-lg p-3 table-responsive">
        <table class="table">
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->full_name}}</td>
                    <td>
                        <h5><span class="badge badge-primary">{{$user->user_role}}</span></h5>
                    </td>
                    <td>{{$user->email}}</td>
                    <td class="d-flex justify-content-end">
                        <a href="#" type="button" class="btn btn-link text-dark text-muted"><i
                                class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection