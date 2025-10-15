@component('mail::message')
# Password Reset Link

Hi {{ $user->name }},

You requested to reset your password. Click the button below to continue:

@component('mail::button', ['url' => $resetUrl])
Reset Password
@endcomponent

If you did not request a password reset, ignore this email.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
