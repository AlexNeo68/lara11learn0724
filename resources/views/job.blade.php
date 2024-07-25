<x-layout>
    <x-slot:heading>Job detail</x-slot:heading>
    <h1>Detail of job: {{ $job['name'] }}</h1>
    <p>Salary: {{ $job['salary'] }}</p>
</x-layout>
