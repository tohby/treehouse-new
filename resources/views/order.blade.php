<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khanh | Product</title>



    <link rel="stylesheet" type="text/css" href="https://d1um8515vdn9kb.cloudfront.net/libs/css/owl.carousel.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />


    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/global.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <script src="https://d1um8515vdn9kb.cloudfront.net/libs/js/owl.carousel.min.js"></script>


    <style>
        /*Carousel Gallery*/
        .carousel-gallery {
            margin: 50px 0;
            padding: 0 30px;
        }

        .carousel-gallery .swiper-slide a {
            display: block;
            width: 100%;
            height: 213px;
            overflow: hidden;
            position: relative;
            -webkit-box-shadow: 3px 2px 20px 0px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 3px 2px 20px 0px rgba(0, 0, 0, 0.2);
            box-shadow: 3px 2px 20px 0px rgba(0, 0, 0, 0.2);
        }

        .carousel-gallery .swiper-slide a:hover .image .overlay {
            opacity: 1;
        }

        .carousel-gallery .swiper-slide a .image {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center center;
            border-radius: 5px;
        }

        .carousel-gallery .swiper-slide a .image .overlay {
            width: 100%;
            height: 100%;
            background-color: rgba(20, 20, 20, 0.8);
            text-align: center;
            opacity: 0;
            -webkit-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }

        .carousel-gallery .swiper-slide a .image .overlay em {
            color: #fff;
            font-size: 26px;
            position: relative;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            display: inline-block;
        }

        .carousel-gallery .swiper-pagination {
            position: relative;
            bottom: auto;
            text-align: center;
            margin-top: 25px;
        }

        .carousel-gallery .swiper-pagination .swiper-pagination-bullet {
            -webkit-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }

        .carousel-gallery .swiper-pagination .swiper-pagination-bullet:hover {
            opacity: 0.7;
        }

        .carousel-gallery .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
            background-color: #d63031;
            transform: scale(1.1, 1.1);
        }
    </style>
</head>

<body>
    @include('sweetalert::alert')
    <section class="gf_section-5  " data-name="menu">
        <div class="menu_body gt_sticky-header">
            <div class="">
                <div class="gf_flex menu_content">
                    <div class="logo">
                        <h1 class="logo_text">
                            <p class="text_large">Kanh</p>
                            <p class="text_small"> Hanoi, Vietnam</p>
                        </h1>
                    </div>
                    <div class="gf_flex nav_menu">
                        <ul class="gf_flex menu_left">
                            <li class="">
                                <a href="/store">Store</a>
                            </li>
                            {{-- <li>
                                <a href="#">News</a>
                                <ul class="sub_menu">
                                    <li>
                                        <a href="#">news1</a>
                                    </li>
                                    <li>
                                        <a href="#">news1</a>
                                    </li>
                                    <li>
                                        <a href="#">news1</a>
                                    </li>
                                </ul>
                            </li> --}}
                            <li>
                                <a href="/events">Events</a>
                            </li>
                        </ul>
                        <ul class="gf_flex menu_right">
                            <li class="active">
                                <a href="/about">About Me</a>
                            </li>
                            <li>
                                <a href="/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="gf_section-11 div_top" data-name="AboutmeDetail">
        <div class="gf_container">
            <div class="gf_flex about_me_content">

                <div class="content_left">
                    <div class="image_about_me">
                        <div class="owl-carousel gt_slide_partner">
                            @foreach ($portfolio->images as $image)
                            <div class="item gt_product-carousel--item">
                                <img src="/storage/post_images/{{$image->image}}">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="form_content_right">
                    <form method="POST" action="{{ action("MakeOrderController@order") }}">
                        @csrf
                        <div class="contact_form">
                            <div class="contact_form_group">
                                <p class="contact_label" style="padding-top: 0">Name</p>
                                <input type="text" name="name" placeholder="Your name" required>
                            </div>
                            <div class="contact_form_group">
                                <p class="contact_label" style="padding-top: 0">Address</p>
                                <input type="text" name="address" placeholder="Your Address" required>
                            </div>
                            <div class="contact_form_group">
                                <p class="contact_label">Email:</p>
                                <input type="email" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="contact_form_group">
                                <p class="contact_label" style="padding-top: 0">Quantity</p>
                                <input type="number" name="quantity" value="1" min="1" placeholder="Number of products you want">
                            </div>
                            <div class="contact_form_group">
                                <p class="contact_label">Note</p>
                                <textarea name="note" rows="5" placeholder="Notes"></textarea>
                            </div>
                            <input type="hidden" name="product_id" value="{{$portfolio->id}}">
                            <div class="button_submit">
                                <button type="submit">
                                    Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    @include('sections/similar')

    @include('sections/event-section')

    <section class="gf_section-10" data-name="Footer">
        <div class="footer_content">
            <div class="gf_container">
                <div class="newletter">
                    <div class="message_newletter">
                        Sign up for the latest updates in contemporary art & design!
                    </div>
                    <div class="gf_flex form_newletter">
                        <input type="email" placeholder="Enter your Email">
                        <button type="submit">
                            Send
                        </button>
                    </div>
                </div>
                <div class="gf_flex menu_footer">
                    <div class="nav_content">
                        <p class="title_nav">The Artling</p>
                        <ul class="detail_menu">
                            <li>
                                <a href="#">Art</a>
                            </li>
                            <li>
                                <a href="#">Design</a>
                            </li>
                            <li>
                                <a href="#">Prints</a>
                            </li>
                            <li>
                                <a href="#">Books</a>
                            </li>
                            <li>
                                <a href="#">Artzine</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav_content">
                        <p class="title_nav">The Artling</p>
                        <ul class="detail_menu">
                            <li>
                                <a href="#">Art</a>
                            </li>
                            <li>
                                <a href="#">Design</a>
                            </li>
                            <li>
                                <a href="#">Prints</a>
                            </li>
                            <li>
                                <a href="#">Books</a>
                            </li>
                            <li>
                                <a href="#">Artzine</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav_content">
                        <p class="title_nav">The Artling</p>
                        <ul class="detail_menu">
                            <li>
                                <a href="#">Art</a>
                            </li>
                            <li>
                                <a href="#">Design</a>
                            </li>
                            <li>
                                <a href="#">Prints</a>
                            </li>
                            <li>
                                <a href="#">Books</a>
                            </li>
                            <li>
                                <a href="#">Artzine</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav_content">
                        <p class="title_nav">The Artling</p>
                        <ul class="detail_menu">
                            <li>
                                <a href="#">Art</a>
                            </li>
                            <li>
                                <a href="#">Design</a>
                            </li>
                            <li>
                                <a href="#">Prints</a>
                            </li>
                            <li>
                                <a href="#">Books</a>
                            </li>
                            <li>
                                <a href="#">Artzine</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        $(document).ready(function(){
            $('ul li').click(function(){
                $('li').removeClass("active");
                $(this).addClass("active");
            });
            $('.slide_carousel').owlCarousel({
                items: 1,
                loop: false,
                dots: true   
            });

        });

        $(".popup img").click(function () {
            var $src = $(this).attr("src");
            $(".show").fadeIn();
            $(".img-show img").attr("src", $src);
        });
        
        $("span, .overlay").click(function () {
            $(".show").fadeOut();
        });

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navText: [
                "<i class='fa fa-caret-left'></i>",
                "<i class='fa fa-caret-right'></i>"
            ],
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                items: 1
                },
                600: {
                items: 1
                },
                1000: {
                items: 1
                }
            }
            })

        jQuery(document).ready(function($){
            //on mobile - open/close primary navigation clicking/tapping the menu icon
            $('.cd-primary-nav').on('click', function(event){
                if($(event.target).is('.cd-primary-nav')) $(this).children('ul').toggleClass('is-visible');
            });

            var $sectionAfter =  $(".cd-hero").next();
            if ($sectionAfter && $sectionAfter.length) {
            $('.scroll_link').click(function(){
                $("body,html").animate({
                    scrollTop: $sectionAfter.offset().top
                },1000);
            });
        }


            $('.cd-slider-nav li').on('click', function(event){
                event.preventDefault();
                var selectedItem = $(this);
                if(!selectedItem.hasClass('selected')) {
                    // if it's not already selected
                    var selectedPosition = selectedItem.index(),
                        activePosition = $('.cd-hero-slider .selected').index();
                        
                    if( activePosition < selectedPosition) {
                        nextSlide($('.cd-hero-slider'), $('.cd-slider-nav'), selectedPosition);
                        nextSlide($('.dots'), $('.cd-slider-nav'), selectedPosition);
                    } else {
                        prevSlide($('.cd-hero-slider'), $('.cd-slider-nav'), selectedPosition);
                        prevSlide($('.dots'), $('.cd-slider-nav'), selectedPosition);
                    }

                    updateNavigationMarker(selectedPosition+1);
                }
            });

            $('.dots li').on('click', function(event){
                console.log()
                event.preventDefault();
                var selectedItem = $(this);
                if(!selectedItem.hasClass('selected')) {
                    // if it's not already selected
                    var selectedPosition = selectedItem.index(),
                        activePosition = $('.cd-hero-slider .selected').index();
                        
                    if( activePosition < selectedPosition) {
                        console.log
                        nextSlide($('.cd-hero-slider'), $('.dots'), selectedPosition);
                        nextSlide($('.dots'), $('.cd-slider-nav'), selectedPosition);
                    } else {
                        prevSlide($('.cd-hero-slider'), $('.dots'), selectedPosition);
                        prevSlide($('.dots'), $('.cd-slider-nav'), selectedPosition);
                    }

                    updateNavigationMarker(selectedPosition+1);
                }
            });

            
            function nextSlide(container, pagination, n){
                var visibleSlide = container.find('.selected'),
                    navigationDot = pagination.find('.selected');
                
                visibleSlide.removeClass('selected from-left from-right').addClass('is-moving').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                    visibleSlide.removeClass('is-moving');
                });
                
                container.children('li').eq(n).addClass('selected from-right').prevAll().addClass('move-left');
                navigationDot.removeClass('selected')
                pagination.find('li').eq(n).addClass('selected');

                checkVideo(visibleSlide, container, n);
            }


            function prevSlide(container, pagination, n){
                var visibleSlide = container.find('.selected'),
                    navigationDot = pagination.find('.selected');
                
                visibleSlide.removeClass('selected from-left from-right').addClass('is-moving').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                    visibleSlide.removeClass('is-moving');
                });

                container.children('li').eq(n).addClass('selected from-left').removeClass('move-left').nextAll().removeClass('move-left');
                navigationDot.removeClass('selected');
                pagination.find('li').eq(n).addClass('selected');

                checkVideo(visibleSlide, container, n);
            }

            var swiper = new Swiper('.carousel-gallery .swiper-container', {
                effect: 'slide',
                speed: 900,
                slidesPerView: 5,
                spaceBetween: 20,
                simulateTouch: true,
                autoplay: {
                    delay: 5000,
                    stopOnLastSlide: false,
                    disableOnInteraction: false
                },
                pagination: {
                    el: '.carousel-gallery .swiper-pagination',
                    clickable: true
                },
                breakpoints: {
                    // when window width is <= 320px
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 5
                    },
                    // when window width is <= 480px
                    425: {
                        slidesPerView: 2,
                        spaceBetween: 10
                    },
                    // when window width is <= 640px
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    }
                }
            }); /*http://idangero.us/swiper/api/*/
        
            function checkVideo(hiddenSlide, container, n) {
                //check if a video outside the viewport is playing - if yes, pause it
                if( hiddenSlide.find('video').length > 0 ) hiddenSlide.find('video').get(0).pause();

                //check if the select slide contains a video element - if yes, play the video
                if( container.children('li').eq(n).find('video').length > 0 ) container.children('li').eq(n).find('video').get(0).play();
            }

            function updateNavigationMarker(n) {
                $('.cd-marker').removeClassPrefix('item').addClass('item-'+n);
            }

            $.fn.removeClassPrefix = function(prefix) {
                //remove all classes starting with 'prefix'
                this.each(function(i, el) {
                    var classes = el.className.split(" ").filter(function(c) {
                        return c.lastIndexOf(prefix, 0) !== 0;
                    });
                    el.className = $.trim(classes.join(" "));
                });
                return this;
            };
        });
         
    </script>
</body>

</html>