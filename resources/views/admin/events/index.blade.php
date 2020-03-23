@extends('layouts.master')

@section('content')
<div class="container-fluid px-3">
    <div class="heading">
        <div class="row">
            <div class="col-10">
                <h2>Events</h2>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-lg btn-primary" data-toggle="modal"
                    data-target=".bd-event-modal-xl">Add new Event</button></div>
        </div>
    </div>
    <div class="row">

    </div>
</div>
@include('admin/events/create')
@endsection