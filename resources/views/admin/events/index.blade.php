@extends('layouts.master')

@section('content')
<div class="container-fluid px-3">
    <div class="heading">
        <div class="row">
            <div class="col-10">
                <h2>Events</h2>
            </div>
            <div class="col-2">
                <button type="button" class="btn px-4 btn-primary" data-toggle="modal"
                    data-target=".bd-event-modal-xl">Add new Event</button></div>
        </div>
    </div>
    <div class="row">
        @foreach ($events as $event)
        <div class="bg-white rounded-lg p-3 px-3 col-sm-12 my-3">
            <div class="row">
                <div class="col-sm-1">
                    <img src="/storage/event_images/{{$event->image}}" class="thumbnail rounded-lg" alt="">
                </div>
                <div class="col-sm-10">
                    <h5 class="font-weight-bold">{{$event->name}}</h5>
                    <p>{{ Str::words($event->description, 50, '...')}}</p>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@include('admin/events/create')
@endsection