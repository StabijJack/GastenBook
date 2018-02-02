@component('mail::message')
# Introduction

bedankt voor het aanpassen.

@component('mail::button', ['url' => 'http://gastenbook/gastenbericht/'. $gastenBericht->id ])
bekijk uw gewijzigde bericht
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
