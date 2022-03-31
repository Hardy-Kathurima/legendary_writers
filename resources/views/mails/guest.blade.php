@component('mail::message')
# Sent By: {{ $guest_name }}

{{ $guest_message }}

@component('mail::button', ['url' => '/login'])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent