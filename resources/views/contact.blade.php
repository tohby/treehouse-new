@extends('layouts.inner')
@section('content')
@include('sweetalert::alert')
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
                    <form method="POST" action="{{ action("ContactMessageController@send") }}">
                        @csrf
                        <div class="contact_form">
                            <div class="contact_form_group">
                                <p class="contact_label" style="padding-top: 0">Name</p>
                                <input type="text" name="name" placeholder="Your name">
                            </div>
                            <div class="contact_form_group">
                                <p class="contact_label">Email:</p>
                                <input type="email" name="email" placeholder="Your Email">
                            </div>
                            <div class="contact_form_group">
                                <p class="contact_label">Message</p>
                                <textarea name="message" placeholder="Drop a message"></textarea>
                            </div>
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

    </div>
</section>
@endsection