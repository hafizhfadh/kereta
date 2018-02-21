@component('mail::message')

<h1 class="has-text-centered">Verify your email address</h1>
<p class="has-text-centered is-muted">Please confirm that you want to use this as your E-ticket account email address. Once it's done you will be able to start traveling!</p>

@component('mail::button', ['url' => route('email-verification.check', $user->verification_token) . '?email=' . urlencode($user->email) ])
Verify my email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
