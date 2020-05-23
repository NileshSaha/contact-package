 @component('mail::message')
# Introduction

This is a message from {{ $name }}
<br>
+++++++++++++++++++++++++++++
<br>
{{ $message }}.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
