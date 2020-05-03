<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khanh Arts</title>

    <link rel="icon" href="{{asset('images/icon.png')}}">
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
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5e9e9e3f69e9320caac5be1f/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    <section class="gf_section-5  " data-name="menu">
        <div class="menu_body gt_sticky-header">
            <div class="">
                <div class="gf_flex menu_content">
                    <div class="logo">
                        <a href="/" class="logo_text">
                            <p class="text_large">Khan</p>
                            <p class="text_small"> Tree House, Hanoi </p>
                        </a>
                    </div>
                    <div class="gf_flex nav_menu">
                        <ul class="gf_flex menu_left">
                            <li class="">
                                <a href="/products">Store</a>
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
                    <div class="icon_menu">
                        <div class="line_icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
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
                            <div class="item gt_product-carousel--item">
                                <img src="{{asset('images/aboutmepage/WANG2194.jpg')}}">
                            </div>
                            <div class="item gt_product-carousel--item">
                                <img src="{{asset('images/aboutmepage/WANG2252.jpg')}}">
                            </div>
                            <div class="item gt_product-carousel--item">
                                <img src="{{asset('images/aboutmepage/WANG2322.jpg')}}">
                            </div>
                            <div class="item gt_product-carousel--item">
                                <img src="{{asset('images/aboutmepage/WANG2331.jpg')}}">
                            </div>

                        </div>
                        <div class="image_mobile">
                            <img src="./images/aboutmepage/WANG2252.jpg">
                        </div>
                    </div>
                </div>
                <div class="content_right">
                    <div class="content_text">
                        <div class="title_content">
                            <span>As the painter
                            </span>
                        </div>
                        <div class="detail_content">
                            <p>
                                Painting has been my first love and my favourite form of self-expression since age 5.
                                I’d like
                                to think of it as my superpower. No matter what happens in life- happy or sad- I find
                                comfort in my paints, brushes and canvas. I’m not sure I would have made it alive
                                through the Police phase of my life, if not for painting.

                                When I first started painting, my paintings were based on realism. I would observe
                                nature and replicate it. But after my time with the Censor Police, my paintings shifted
                                from realism to surrealism. As a Censor Police, I found myself locked in a box and my
                                mind naturally conjured up dreams and surreal visuals of a world I wish to escape to.
                                Since then, my paintings only express what I love and not what I don’t love about this
                                world. My paintings are otherworldly. I might be in a devastating place in life, but
                                when I paint, I paint happy thoughts. These are the thoughts that give me the energy to
                                survive. That’s the feeling I’d like my buyers to feel when they pick up my artwork. My
                                message is- Keep dreaming. It’s not that I don’t see the negative energies in life-
                                loss, heartbreak, cheating, death, sadness, flakiness. I see it, but that’s not what I
                                choose to paint. I choose love over hate. In terms of themes, there are 4 main themes in
                                all my paintings- nature, music, love and
                                sex.

                                When it comes to nature, I swing between extremes. Either I paint extreme close-ups of a
                                leaf or flower or I go extremely wide with large mountains and landscapes. It’s never
                                in- between. The nature is very much a breathing character in my paintings. The mountain
                                could be the human body, the tree could be performing a dance. Nature is human and
                                humans are nature.

                                Then, there’s sex. From the time I was a kid, I’ve always had a very strong drive for
                                sex and love. When I quit the Police at age 34, the doors of the world opened to me and
                                I could freely express my sexual desires. My love of love and sex is very fresh. It’s
                                not about porn or lust. It’s the most beautiful feeling of being alive and interacting
                                with others. In Vietnam, sex is hidden, but the reality is, the Universe exists because
                                of sex. Not just humans, but flowers, animals, birds, trees. It’s the same with music.
                                Music drives the world. When I listen to music, I don’t just listen to the beats or the
                                lyrics, I visualise my paintings. If music had visuals, they would look like my
                                paintings.

                                These 4 elements are very inter-connected. We’re all in harmony with the Universe. So, I
                                mainly work on Abstract paintings, Impressionist paintings. Sometimes, I paint on the
                                lines of realism, but that’s because I get bored as an artist and I need to keep
                                changing and trying new things. In terms of materials, I used to create my paintings
                                with oil, acrylic paint, water colour, lacquer. But now, I try to use new techniques to
                                create my work. I have used stone and metal. Materials are an important tool in your
                                painting, but it can’t be more important than your concept. Your concept comes first and
                                then you pick a material that will help you
                                convey your message in the best possible way.

                                I don’t know about my future as a painter, but I do know that even after 60 years of
                                existence, it still feels like I’m only beginning my journey as a painter. The feeling
                                is fresh. I remember this incident when I was in New York at a friends’ apartment and
                                she had a cat. It was late at night and I was asleep. All of a sudden, I felt out of
                                breath. I was gasping for air and was pretty certain it was the cat fur. It was too late
                                to get to the hospital and I didn’t know what to do, so I got out of bed, brought my
                                paints out and started painting. I was so submerged in my painting; I forgot my life was
                                in danger. I went to the hospital the next day and the doctor thought I was very lucky
                                to have made it. So, I can say for sure, painting has
                                saved my life. Not just superficially, but for real.

                                Memorable event:
                                Exhibition in Fine Arts Museum of Vietnam. The theme was love and sex.



                            </p>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@include('sections/portfolio-section')

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

        // $(window).scroll(function () {
        //     if ($(document).scrollTop() > 1) {
        //         $('.menu_body').addClass("gt_sticky-header");
        //         $('.menu_body').delay(10).fadeIn(400);
        //     } else {
        //         $('.menu_body').removeClass("gt_sticky-header");
        //     }
        // });

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



        //window on dom ready
            // window.addEvent('domready', function() {
            //     //for every switch-view link
            //     $$('.cd-slider-nav li').each(function(el) {
            //         //add click event
            //         el.addEvent('click', function(e) {
            //             //nowhere
            //             e.stop();
            //             //morph baby!
            //             myFx = new Fx.Morph('cd-hero-slider', {duration: 500, transition: Fx.Transitions.Sine.easeOut}).start('.' + el.get('rel'));
            //         });
            //     });
            // });
                
            
        
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