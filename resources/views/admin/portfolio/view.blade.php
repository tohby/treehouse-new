@extends('layouts/master')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-md-8">
            <h3> <b>{{$portfolio->title}}</b></h3>
        </div>
        <div class="col-md-4 d-flex justify-content-end">
            <a href="/portfolio/{{$portfolio->id}}/edit" class="btn btn-link text-dark text-muted"><i class="fas fa-pencil-alt"></i></a>
            <button type="button" class="btn btn-link text-dark text-muted" data-toggle="modal"
                data-target=".DeleteModal{{$portfolio->id}}"><i class="far fa-trash-alt"></i></button>
        </div>
    </div>
<div class="row">
    <div class="col-md-7">
        @if (count($portfolio->images) > 1)
            <div id="postImages{{$portfolio->id}}" class="carousel slide" data-ride="carousel" data-interval="false">
                <ol class="carousel-indicators">
                    @foreach( $portfolio->images as $image )
                    <li data-target="#postImages{{$portfolio->id}}" data-slide-to="{{ $loop->index }}"
                        class="{{ $loop->first ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach ($portfolio->images as $image)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img src="/storage/post_images/{{$image->image}}" class="d-block w-100 img-fluid card-img-top" alt="...">
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#postImages{{$portfolio->id}}" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#postImages{{$portfolio->id}}" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            @else
            <img src="/storage/post_images/{{$portfolio->images->first()->image}}" class="d-block w-100 img-fluid card-img-top"
                alt="...">
            @endif
    </div>
    <div class="col-md-5">
        <div class="row">
            <dd class="col-sm-12">{{$portfolio->description}}</dd>
        </div>
    </div>
</div>
<div class="modal fade bd-delete-modal-lg DeleteModal{{$portfolio->id}}" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content p-5 mt-2">
            @include('admin/portfolio/delete')
        </div>
    </div>
</div>
</div>
@endsection