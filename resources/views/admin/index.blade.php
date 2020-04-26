@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="mb-5">
        <h4 class="text-muted hello">Hello {{Auth::user()->firstname}}</h4>
        {{-- <br> --}}
        <h2 class="greeting">Have a good day <span>&#128077;</span></h2>
    </div>
    <div class="row mb-3">
        <div class="col-12 col-lg-6 col-xl mb-3">
            <div class="card rounded-lg">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-muted mb-2 h6">
                                Orders
                            </h6>
                            <span class="h2 mb-0">
                                24,500
                            </span>
                        </div>
                        <div class="col-auto">
                            <span class="h2 text-muted mb-0">
                                <i class="fas fa-shopping-cart"></i>
                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl mb-3">
            <div class="card rounded-lg">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-muted mb-2 h6">
                                Events
                            </h6>
                            <span class="h2 mb-0">
                                {{count($events)}}
                            </span>
                        </div>
                        <div class="col-auto">
                            <span class="h2 text-muted mb-0">
                                <i class="fas fa-calendar"></i>
                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl mb-3">
            <div class="card rounded-lg">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-muted mb-2 h6">
                                Portfolio
                            </h6>
                            <span class="h2 mb-0">
                                {{count($portfolio)}}
                            </span>
                        </div>
                        <div class="col-auto">
                            <span class="h2 text-muted mb-0">
                                <i class="fas fa-folder"></i>
                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl mb-3">
            <div class="card rounded-lg">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-muted mb-2 h6">
                                Unread Messages
                            </h6>
                            <span class="h2 mb-0">
                                {{count($messages)}}
                            </span>
                        </div>
                        <div class="col-auto">
                            <span class="h2 text-muted mb-0">
                                <i class="fas fa-envelope"></i>
                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        {{-- Messages --}}
        @include('admin/messages')
        {{-- Orders --}}
        @include('admin/orders')
    </div>
</div>
@endsection