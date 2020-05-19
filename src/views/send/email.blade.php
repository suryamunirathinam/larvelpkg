@component('mail::message')
# Introduction
from {{ $name }}
Feedback:
{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
