<x-mail::message>
    <h2>Create new job: {{ $job->name }}</h2>

    <x-mail::button url="{{ url('/jobs/' . $job->id) }}">
        View New Job
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
