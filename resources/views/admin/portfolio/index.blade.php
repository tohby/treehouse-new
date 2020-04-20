@extends('layouts/master')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-md-6">
            <h4>Portfolios</h4>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <a href="/portfolio/create" type="button" class="btn btn-dark">Add New</a>
        </div>
    </div>
    <div class="bg-white rounded-lg p-4">
        <div class="row">
            @foreach ($portfolios as $item)
            <div class="col-md-3 mb-3">
                <div class="card border-0 border-bottom bg-white">
                    <img src="/storage/post_images/{{$item->images->first()->image}}"
                        class="card-img-top news-img rounded-lg" alt="{{$item->title}}">
                    <div class="card-body px-0 px-2">
                        <a href="/portfolio/{{$item->id}}">
                            <h3 class="card-title font-weight-bold">{{$item->title}}</h3>
                        </a>
                        <div class="d-flex justify-content-end">
                            <small class="z-index-2">
                                <a href="/portfolio/{{$item->id}}/edit" class="btn btn-link text-dark text-muted"><i
                                        class="fas fa-pencil-alt"></i></a>
                                <button type="button" class="btn btn-link text-dark text-muted" data-toggle="modal"
                                    data-target=".bd-delete-modal-lg"><i class="far fa-trash-alt"></i></button>
                            </small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade bd-delete-modal-lg {{$item->id}}DeleteModal" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="dialog">
                    <div class="modal-content p-5 mt-2">
                        @include('admin/portfolio/delete')
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection