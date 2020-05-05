@extends('layouts/master')

@section('content')
<div class="row mb-4">
    <div class="col-md-6">
        <h3><small>Edit</small> <b>{{$portfolio->title}}</b></h3>
    </div>
</div>
<div class="bg-white rounded-lg p-3">

    <form method="POST" action="{{action("PortfolioController@update", $portfolio->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title"
                    value="{{ $portfolio->title }}" required autocomplete="text">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="text">Description</label>
                <textarea class="form-control" name="description" rows="5">{{ $portfolio->description }}</textarea>
            </div>
        </div>
        <div class="row">
            @foreach ($portfolio->images as $image)
            <div class="col p-2">
                <img src="/storage/post_images/{{$image->image}}" class="img-thumbnail thumbnail rounded-lg" alt="">
            </div>
            @endforeach
            <div class="col justify-content-end"><a href="/portfolio/{{$portfolio->id}}/images" class="align-middle">Edit/Delete Images</a></div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4 mt-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image[]"
                        accept="image/*" multiple>
                    <label class="custom-file-label" for="image">Choose image files</label>
                </div>
            </div>
        </div>
        
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary px-5">Submit</button>
        </div>
        @method('PUT')
    </form>
</div>
@endsection