<x-mail::message>
# Welcome!

Hi {{ $user->name }},
<br>
Welcome to Laracamp, your account has been created successfuly. Now you can login to your account and choose your best match camp!.

<x-mail::button :url="route('login')">
Login Here
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
