@extends('layouts.master')

@section('content')
<div class="container-fluid px-3">
    <div class="row">
        <div class="col-lg-10">
            <h2>Message</h2>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title"><small class="text-muted">from </small> {{$message->name}}</h5>
            <hr>
            <p>{{$message->message}}</p>
            <h6><small class="text-muted">Email </small> {{$message->email}}</h6>
        </div>
    </div>

</div>
@endsection