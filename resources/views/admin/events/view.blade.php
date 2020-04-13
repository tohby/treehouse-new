<div class="container-fluid row">
    <div class="col-sm-6">
        <img src="/storage/event_images/{{$event->image}}" class="img-fluid rounded-lg" alt="">
    </div>
    <div class="col-sm-6">
        <dl class="row">
            <dt class="col-sm-3">Description</dt>
            <dd class="col-sm-9"><p>{{$event->description}}</p></dd>
        
            <dt class="col-sm-3">Date</dt>
            <dd class="col-sm-9">
                <p>{{Carbon\Carbon::parse($event->start_at)->format('l jS \\of F Y')}}</p>
                @unless (is_null($event->end_at))
                    <p>to {{Carbon\Carbon::parse($event->end_at)->format('l jS \\of F Y')}}.</p>
                @endunless
            </dd>
        
            <dt class="col-sm-3">Address</dt>
            <dd class="col-sm-9"><p>{{$event->address}}</p></dd>
        
            <dt class="col-sm-3">Ticket Price</dt>
            <dd class="col-sm-9 "><strong>{{$event->ticket_fee}} VND</strong></dd>
        </dl>
        {{-- <p>For more enquireies contact us at <strong>090ourphone</strong></p> --}}
    </div>
</div>