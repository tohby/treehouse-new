<!-- Modal -->
<div class="modal fade" id="image-{{$image->id}}-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><small>Edit</small> <b>{{$portfolio->title}}</b> <small>Images</small></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{action("ImagesController@update", $image->id)}}" enctype="multipart/form-data">
                    @csrf
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" accept="image/*">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    @method('PUT')

                    <div class="mt-3 float-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>