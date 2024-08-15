<x-layout>
    <x-slot:heading>Job create</x-slot:heading>

    <form method="POST" action="/jobs/">
        @csrf
        <div class="space-y-12">


            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Job Information</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8">

                    <x-form.field>
                        <x-form.label for="title">Name</x-form.label>
                        <x-form.input type="text" placeholder="CEO" value="{{ old('name') }}" name="name"
                            id="title" autocomplete="given-name" />
                        <x-form.error field="name" />
                    </x-form.field>

                    <x-form.field>
                        <x-form.label for="title">Salary</x-form.label>
                        <x-form.input type="text" placeholder="$50,000" value="{{ old('salary') }}" name="salary"
                            id="title" autocomplete="given-name" />
                        <x-form.error field="salary" />
                    </x-form.field>


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

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form.button>Save</x-form.button>
        </div>
    </form>

</x-layout>
