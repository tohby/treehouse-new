@component('mail::message')
# A new order just came in!

Hi there,

A customer ust placed and order. Please review it and contact the customer quickly. Follow the link below to see all new orders.

@component('mail::button', ['url' => $url])
See all orders
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent