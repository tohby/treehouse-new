<!-- Modal -->
<div class="modal fade" id="image-{{$image->id}}-delete-Modal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid justify-content-center">
                    <h4 class="text-center mb-3 font-weight-bold">Are you sure?</h4>
                    <div class="text-center"><i class="fas fa-trash-alt trash"></i></div>
                    <p class="mt-3">Please note that this cannot be retreived once deleted.</p>
                    <div class="d-flex justify-content-center">
                        <form action="{{action("ImagesController@destroy", "$image->id")}}" method="POST"> @csrf
                            <input type="hidden" name="_method" value="delete" />
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>