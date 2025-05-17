<x-mail::message>
    # Developer Porftolio Contact

    From: {{ $emailData['name'] }}
    Email: {{ $emailData['email'] }}

    Message: {{ $emailData['message'] }}

    Thanks,
    {{ config('app.name') }}
</x-mail::message>
