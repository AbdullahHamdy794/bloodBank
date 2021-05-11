@component('mail::message')
# Introduction

BloodBank Reset password.

@component('mail::button', ['url' => 'http://ipda3.com'])
Reset
@endcomponent
<p>yourCode is {{$code}}</p>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
