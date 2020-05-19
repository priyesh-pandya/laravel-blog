@component('mail::message')

Dear {{ucfirst($user->name)}},

Thank you so much for registering ! 


@component('mail::panel', ['url' => config('app.url') ])

Welcome to PRI's Blog Network.    

We are pleased to inform you that you account activation has been processed.

You can post blogs by clicking below 

@endcomponent 


@component('mail::button', ['url' => config('app.url').'/posts/create' ])

Submit My First Blog !

@endcomponent

Thanks ,<br>
{{ config('app.name') }}
@endcomponent
