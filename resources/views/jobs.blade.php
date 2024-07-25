<x-layout>
    <x-slot:heading>Jobs listing</x-slot:heading>
    <h1>List of jobs</h1>
    <ul>
        @foreach ($jobs as $job)
            <li>

                <a href="/jobs/{{ $job['id'] }}" class="text-blue-400 font-thin underline">
                    <strong>{{ $job['name'] }}</strong>
                    {{ $job['salary'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
