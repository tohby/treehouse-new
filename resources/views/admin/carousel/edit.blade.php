<div class="bg-white rounded-lg p-3">

    <form method="POST" action="{{action("CarouselController@update", "$carousel->id")}}" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" required autocomplete="text" value="{{$carousel->title}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="text">Text</label>
                <input type="text" class="form-control" name="text" required autocomplete="text" value="{{$carousel->text}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="url">Link to project</label>
                <input type="text" class="form-control" name="url" required autocomplete="text" value="{{$carousel->link}}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12 mt-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image"
                        accept="image/*">
                    <label class="custom-file-label" for="image">Choose image file</label>
                </div>
                <small id="emailHelp" class="form-text text-muted">Leave empty to keep old image.</small>
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>&nbsp;
            <button type="submit" class="btn btn-primary px-5">Submit</button>
        </div>
        @method('PUT')
    </form>
</div>