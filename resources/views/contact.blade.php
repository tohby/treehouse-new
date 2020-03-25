@extends('layouts.inner')
@section('content')
<section class="gf_section-12 div_top" data-name="Contact">
    <div class="gf_container">
        <div class="contact_background">
            <div class="overlay"></div>
            <div class="gf_flex contact_content">
                <div class="content_left">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita
                    </p>
                </div>
                <div class="content_right">
                    <div class="contact_form">
                        <div class="contact_form_group">
                            <p class="contact_label" style="padding-top: 0">Name</p>
                            <input type="text" placeholder="Stephen">
                        </div>
                        <div class="contact_form_group">
                            <p class="contact_label">Email:</p>
                            <input type="email" placeholder="Stephenatere9@gmail.com">
                        </div>
                        <div class="contact_form_group">
                            <p class="contact_label">Message</p>
                            <textarea placeholder="Drop a message"></textarea>
                        </div>
                        <div class="button_submit">
                            <button type="submit">
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
@endsection