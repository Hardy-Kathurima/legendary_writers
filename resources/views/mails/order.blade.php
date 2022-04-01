@component('mail::message')
# Order from: {{ $clientName }}
# Paper Type: {{ $paper_type }}
# Order Cost: ${{ $order_cost }}

You have received a new order! The deadline is {{ $order_deadline }}

@component('mail::button', ['url' => 'http://127.0.0.1:8000/login'])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent