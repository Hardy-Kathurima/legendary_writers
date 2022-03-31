@component('mail::message')
# Hello {{ $user_name }},

{{ $user_detail }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent