@extends('layouts.inner')
@section('content')
<section class="gf_section-3 div_top" data-name="Portfolio">
    <div class="gf_container">
        <div class="portfolio_body">
            <div class="brearcumb_content">
                <ul class="breadcrumb">
                    <li>Art</li>
                    <li>Sculpting</li>
                    <li>Architecture</li>
                </ul>
            </div>
            <div class="portfolio_content portfolio_mobile">
                <div class="gf_flex box_item">
                    @foreach ($portfolios as $item)
                        <div class="item_content">
                            <div class="item ">
                                <div class="bacground_image" style="background-image: url('/storage/post_images/{{$item->images->first()->image}}');"></div>
                                <a href="product/{{$item->id}}" class="button_order">
                                    Order Paint
                                </a>
                            </div>
                            <div class="info_product">
                                <h3>{{$item->title}}</h3>
                                <p>Nguyen Lam</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>

    </div>
</section>
@endsection