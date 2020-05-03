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
        <table class="table table-borderless">
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->full_name}}</td>
                    <td>
                        <h5><span class="badge badge-primary">{{$user->user_role}}</span></h5>
                    </td>
                    <td>{{$user->email}}</td>
                    @unless ($user->id == Auth::user()->id )
                        <td class="d-flex justify-content-end">
                            <button type="button" class="btn btn-link text-dark text-muted" data-toggle="modal"
                                data-target=".DeleteModal{{$user->id}}"><i class="fas fa-trash-alt"></i>&nbsp;
                                Delete</button>
                        </td>
                    @endunless
                    
                </tr>

                {{-- Delete Modal --}}
                <div class="modal fade bd-delete-modal-lg DeleteModal{{$user->id}}" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="dialog">
                        <div class="modal-content p-5 mt-2">
                            @include('admin/users/delete')
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection