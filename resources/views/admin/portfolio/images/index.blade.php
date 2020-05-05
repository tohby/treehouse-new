@extends('layouts/master')

@section('content')
    <div class="row mb-4">
        <div class="col-md-6">
            <h3><small>Edit</small> <b>{{$portfolio->title}}</b> <small>Images</small> </h3>
        </div>
    </div>

    @foreach ($portfolio->images as $image)
    <div class="container col-sm-7">
        <div class="row">
            <div class="col mb-3">
                <img src="/storage/post_images/{{$image->image}}" class="img-thumbnail thumbnail rounded-lg">
            </div>
            <div class="col">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#image-{{$image->id}}-Modal">
                    Edit
                </button>
            </div>
            <div class="col">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#image-{{$image->id}}-delete-Modal">
                    Delete
                </button>
            </div>
        </div>
    </div>

    @include('admin/portfolio/images/edit')
    @include('admin/portfolio/images/delete')
    @endforeach
@endsection