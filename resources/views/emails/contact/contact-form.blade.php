@component('mail::message')

# Contact formulier website

<strong>Naam:</strong> {{ $data['name'] }}
<strong>Email:</strong> {{ $data['email'] }}
<strong>Telefoonnummer:</strong> {{ $data['tel'] }}

<strong>Bericht:</strong>

{{ $data['message'] }}

@endcomponent
