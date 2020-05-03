<section class="gf_section-13" data-name="Events">
    <div class="gf_container">
        <div class="portfolio_body">
            <div class="gf_flex title_portfolio" style="justify-content: center">
                <h2>Events</h2>
            </div>
            <div class="popup">
                <div class="portfolio_content">
                    <div class="gf_flex box_item">
                        @foreach ($events as $event)
                        <div class="item_content">
                            <div class="item ">
                                <div class="bacground_image item1">
                                    <img src="/storage/event_images/{{$event->image}}">
                                </div>
                            </div>
                            <div class="info_product">
                                <h3>{{$event->name}}</h3>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="show">
                <div class="overlay"></div>
                <div class="img-show">
                    <span>X</span>
                    <img src="">
                </div>
            </div>
        </div>

    </div>
</section>