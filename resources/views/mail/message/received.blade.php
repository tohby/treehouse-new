@component('mail::message')
# You have a new message!

Hello,

You have new messages waiting in your inbox

@component('mail::button', ['url' => $url])
See all messages
@endcomponent

Thanks,<br>
Khanh Arts
@endcomponent
