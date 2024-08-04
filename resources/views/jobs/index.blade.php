<x-layout>
    <x-slot:heading>Jobs listing</x-slot:heading>
    <h1>List of jobs</h1>
    <div>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block border rounded p-2 mb-2">
                <div class="text-sm font-bold text-blue-400">
                    {{ $job->employer->name }}
                </div>
                <div>
                    <strong>{{ $job['name'] }}</strong>
                    ${{ $job['salary'] }}

                </div>

            </a>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
