<div class="container-fluid justify-content-center">
    <form action="{{action("EventController@update", $event->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Event Name:</label>
            <input type="text" class="form-control" name="name" aria-describedby="emailHelp"
                placeholder="Enter event name here" value="{{$event->name}}" required>
        </div>
        <div class="form-group">
            <label for="address">Event Address:</label>
            <input type="text" class="form-control" name="address" placeholder="Enter event address here" value="{{$event->address}}" required>
        </div>
        <div class="form-group">
            <label for="description">Event Date:</label>
            <div class="form-row">
                <div class="col">
                    <input type="date" name="start_at" class="form-control" placeholder="From"
                        min="{{Carbon\Carbon::now()->toDateString()}}" required value="{{$event->start_at}}">
                </div>
                <div class="col">
                    <input type="date" name="end_at" class="form-control" placeholder="To"
                        min="{{Carbon\Carbon::now()->toDateString()}}" value="{{$event->end_at}}">
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        Leave empty for same day events.
                    </small>
                </div>
            </div>
        </div>
        {{-- <div class="form-group">
                        <label for="description">Time:</label>
                        <div class="form-row">
                            <div class="col">
                                <input type="time" class="form-control" placeholder="Start">
                            </div>
                            <div class="col">
                                <input type="time" class="form-control" placeholder="End">
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    This field could be empty.
                                </small>
                            </div>
                        </div>
                    </div> --}}
        <div class="form-group">
            <label for="description">Ticket Fee:</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">VND</span>
                </div>
                <input type="text" name="fee" class="form-control" aria-label="Amount (to the nearest VND)" value="{{$event->ticket_fee}}">
                <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                </div>
            </div>
            <small id="helpblock" class="form-text text-muted">
                Leaving this field empty implies that the entry fee is FREE!!!.
            </small>
        </div>
        <div class="form-group">
            <label for="description">Event Details</label>
            <textarea class="form-control" name="description" rows="3" placeholder="Event details" required>{{$event->description}}</textarea>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="image" id="customFile">
            <label class="custom-file-label" for="customFile">Choose image file</label>
            <small id="helpblock" class="form-text text-muted">
                Please note that selecting a new image here overrides the existing image. Leave this field empty to use the existing image.
            </small>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
        @method('PUT')
    </form>
</div>    