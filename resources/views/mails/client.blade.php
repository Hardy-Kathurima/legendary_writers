@component('mail::message')
# Sent By: {{ $user_name  }}

{{ $user_message }}

@component('mail::button', ['url' => 'http://127.0.0.1:8000/login'])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent