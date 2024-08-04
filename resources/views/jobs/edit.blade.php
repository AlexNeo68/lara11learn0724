<x-layout>
    <x-slot:heading>Job update: {{ $job->name }}</x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">


            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8">
                    <div class="sm:col-span-3">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                        <div class="mt-2">
                            <input type="text" value="{{ $job->name }}" name="name" id="title"
                                autocomplete="given-name"
                                class="block w-full rounded-md border-0 px-1 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('name')
                            <div class="text-xs mt-1 text-red-400 font-bold">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="sm:col-span-3">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                        <div class="mt-2">
                            <input type="text" value="{{ $job->salary }}" name="salary" id="salary"
                                autocomplete="family-name"
                                class="block w-full rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('salary')
                            <div class="text-xs mt-1 text-red-400 font-bold">{{ $message }}</div>
                        @enderror
                    </div>


                </div>
                {{-- @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                @endif --}}
            </div>


        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center  gap-x-6">
                <button form="form-delete" class="text-sm font-bold text-red-500">Delete Job</button>
            </div>
            <div class="flex items-center  gap-x-6">
                <a href="/jobs/{{ $job->id }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>


        </div>
    </form>
    <form action="/jobs/{{ $job->id }}" method="POST" id="form-delete">
        @csrf
        @method('DELETE')
    </form>

</x-layout>
