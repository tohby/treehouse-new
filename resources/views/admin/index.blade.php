@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <b>
            {{ Auth::user()->role->role }}
            </b>
        </div>
    </div>
</div>
@endsection