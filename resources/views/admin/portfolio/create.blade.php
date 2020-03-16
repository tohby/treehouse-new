@extends('layouts/master')

@section('content')
<div class="row mb-4">
    <div class="col-md-6">
        <h4>New Portfolio item</h4>
    </div>
</div>
<div class="bg-white rounded-lg p-3">

    <form method="POST" action="{{action("PortfolioController@store")}}" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    value="{{ old('title') }}" required autocomplete="text">
                @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="text">Description</label>
                <textarea class="form-control" name="description" rows="5"></textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4 mt-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image[]"
                        accept="image/*" required multiple>
                    <label class="custom-file-label" for="image">Choose image files</label>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary px-5">Submit</button>
        </div>
    </form>
</div>
@endsection