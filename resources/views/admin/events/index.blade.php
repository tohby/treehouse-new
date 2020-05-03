@extends('layouts.master')

@section('content')
<div class="container-fluid px-3">
    <div class="heading">
        <div class="row">
            <div class="col-10">
                <h2>Events</h2>
            </div>
            <div class="col-2">
                <button type="button" class="btn px-4 btn-secondary" data-toggle="modal"
                    data-target=".bd-event-modal-xl">Add new Event</button></div>
        </div>
    </div>
    <div class="row">
        @foreach ($events as $event)
        <div class="bg-white rounded-lg p-3 px-3 col-sm-12 my-3">
            <div class="row">
                <div class="col-sm-1 my-auto">
                    <img src="/storage/event_images/{{$event->image}}" class="thumbnail rounded-lg" alt="">
                </div>
                <div class="col-sm-9 my-auto">
                    <h5 class="font-weight-bold">{{$event->name}}</h5>
                    <p>{{ Str::words($event->description, 40, '...')}}</p>
                </div>
                <div class="col-sm-1 text-center my-auto">
                    <h5 class="dd">{{Carbon\Carbon::parse($event->start_at)->format('d')}}</h5>
                    <P class="font-weight-bold">
                        {{Carbon\Carbon::parse($event->start_at)->format('m').' / '.Carbon\Carbon::parse($event->start_at)->format('Y') }}
                    </P>
                </div>
                <div class="col-sm-1 text-center align-items-center my-auto">
                    <div class="dropdown show dropleft">
                        <a class="btn btn-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span style="font-size: 20px;" class="text-secondary">
                                <i class="fas fa-ellipsis-v"></i>
                            </span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <button type="button" class="dropdown-item" data-toggle="modal"
                                data-target=".event-{{$event->id}}"><i class="far fa-eye"></i>&nbsp; View</button>
                            <button type="button" class="dropdown-item" data-toggle="modal"
                                data-target=".Edit-{{$event->id}}-Modal"><i class="fas fa-pencil-alt"></i>&nbsp;
                                Edit</button>
                            <button type="button" class="dropdown-item" data-toggle="modal"
                                data-target=".DeleteModal{{$event->id}}"><i class="fas fa-trash-alt"></i>&nbsp;
                                Delete</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{-- View Modal --}}

        <div class="modal fade show-event-modal-xl event-{{$event->id}} rounded-lg" tabindex="-1" role="dialog"
            aria-labelledby="newEventModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0 px-5">
                        <h3 class="modal-title font-weight-bold">{{$event->name}}</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-3">
                        @include('admin/events/view')
                    </div>
                </div>
            </div>
        </div>

        {{-- Delete Modal --}}
        <div class="modal fade bd-delete-modal-lg DeleteModal{{$event->id}}" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="dialog">
                <div class="modal-content p-5 mt-2">
                    @include('admin/events/delete')
                </div>
            </div>
        </div>

        {{-- Edit Modal --}}
        <div class="modal fade bd-delete-modal-lg Edit-{{$event->id}}-Modal" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="dialog">
                <div class="modal-content p-5 mt-2">
                    @include('admin/events/edit')
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="float-right mt-5">
        {{$events->links()}}
    </div>
</div>
@include('admin/events/create')
@endsection