@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-md-6">
            <h4>Carousel images</h4>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            @unless (count($carousels) >= 6)
            <a href="/carousel/create" type="button" class="btn btn-dark">Add New</a>
            @endunless
        </div>
    </div>
    <div class="bg-white rounded-lg p-3">
        <div class="row">
            @foreach ($carousels as $carousel)
            <div class="col-sm-3">
                <div class="card border-0 bg-white">
                    <img src="/storage/carousel_images/{{$carousel->image}}" class="card-img-top news-img rounded-lg"
                        alt="...">
                    <div class="card-body">
                        <a href="/news/{{$carousel->id}}">
                            <h3 class="card-title font-weight-bold">{{$carousel->title}}</h3>
                        </a>
                        <div class="d-flex justify-content-end">
                            <small>
                                <button type="button" class="btn btn-link text-dark text-muted" data-toggle="modal" data-target=".bd-edit-modal-lg"><i class="fas fa-pencil-alt"></i></button>
                                <button type="button" class="btn btn-link text-dark text-muted" data-toggle="modal" data-target=".bd-delete-modal-lg"><i class="far fa-trash-alt"></i></button>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade bd-edit-modal-lg {{$carousel->id}}EditModal" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content p-3">
                        <h4 class="mb-2">Update Carousel</h4>
                        @include('admin/carousel/edit')
                    </div>
                </div>
            </div>
            <div class="modal fade bd-delete-modal-lg {{$carousel->id}}DeleteModal" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="dialog">
                    <div class="modal-content p-5 mt-2">
                        @include('admin/carousel/delete')
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection