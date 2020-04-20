@extends('layouts.master')

@section('content')
<div class="container-fluid px-3">
    <div class="row">
        <div class="col-lg-10">
            <h2>Messages</h2>
        </div>
    </div>

    <div class="row align-items-center">
        <div class="col">

            <!-- Nav -->
            <ul class="nav nav-tabs nav-overflow header-tabs">
                <li class="nav-item">
                    <a href="#!" class="nav-link active">
                        All <span class="badge badge-pill badge-soft-secondary">{{count($messages)}}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#!" class="nav-link">
                        Read <span class="badge badge-pill badge-soft-secondary">{{$read->count()}}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#!" class="nav-link">
                        Unread <span class="badge badge-pill badge-soft-secondary">{{$unread->count()}}</span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="#!" class="nav-link">
                        Trashed <span class="badge badge-pill badge-soft-secondary">71</span>
                    </a>
                </li> --}}
            </ul>

        </div>
    </div>

    <div class="card mt-5">
        <div class="card-body">
            <div class="list-group list-group-flush my-n3">
                @foreach ($messages as $message)
                <a href="#" class="list-group-item list-group-item-action p-3">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            @if ($message->is_read)
                            <i class="fas fa-envelope-open"></i>
                            @else
                            <i class="fas fa-envelope"></i>
                            @endif
                        </div>
                        <div class="col-auto ml-1">
                            <!-- Title -->
                            <h5 class="mb-1">
                                {{$message->name}}
                            </h5>
                        </div>
                        <div class="col">
                            <p class="small text-gray-700 mb-0">
                                {{ Str::words($message->message, 25, ' ...') }}.
                            </p>
                        </div>
                        <div class="col-auto">
                            <!-- Time -->
                            <small class="text-muted">
                                <i class="fas fa-clock"></i>&nbsp; {{$message->created_at->diffForHumans()}}
                            </small>
                        </div>
                    </div> <!-- / .row -->
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection