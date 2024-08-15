<x-layout>
    <x-slot:heading>Job detail</x-slot:heading>
    <h1>Detail of job: {{ $job->name }}</h1>
    <p>Salary: {{ $job->salary }}</p>
    @can('edit', $job)
        <p class="mt-10">
            <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
        </p>
    @endcan

</x-layout>
