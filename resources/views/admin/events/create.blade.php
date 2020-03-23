<!-- New Event modal -->

<div class="modal fade bd-event-modal-xl rounded-lg" tabindex="-1" role="dialog" aria-labelledby="newEventModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content p-5">
            <form action="{{action("EventController@store")}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Event Name:</label>
                    <input type="text" class="form-control" name="title" aria-describedby="emailHelp"
                        placeholder="Enter event name here" required>
                </div>
                <div class="form-group">
                    <label for="description">Event Address:</label>
                    <input type="text" class="form-control" name="description" placeholder="Enter event address here"
                        required>
                </div>
                <div class="form-group">
                    <label for="description">Event Date:</label>
                    <div class="form-row">
                        <div class="col">
                            <input type="date" class="form-control" placeholder="From" required>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" placeholder="To">
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                Leave empty for same day events.
                            </small>
                        </div>
                    </div>
                </div>
                <div class="form-group">
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
                </div>
                <div class="form-group">
                    <label for="description">Gate Fee:</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">VND</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest VND)">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        Leaving this field empty implies that the entry fee is FREE!!!.
                    </small>
                </div>
                <div class="form-group">
                    <label for="description">Event Details</label>
                    <textarea class="form-control" name="description" rows="3" placeholder="Event details"
                        required></textarea>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose image file</label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>