<x-layout>
    <x-slot:heading>Register</x-slot:heading>

    <form method="POST" action="/register/">
        @csrf
        <div class="space-y-12">


            <div class="border-b border-gray-900/10 pb-12">


                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8">

                    <x-form.field>
                        <x-form.label for="first_name">First Name</x-form.label>
                        <x-form.input type="text" placeholder="Alex" value="{{ old('first_name') }}" name="first_name"
                            id="first_name" autocomplete="given-name" />
                        <x-form.error field="first_name" />
                    </x-form.field>

                    <x-form.field>
                        <x-form.label for="last_name">Last Name</x-form.label>
                        <x-form.input type="text" placeholder="Neo" value="{{ old('last_name') }}" name="last_name"
                            id="last_name" autocomplete="given-name" />
                        <x-form.error field="last_name" />
                    </x-form.field>

                    <x-form.field>
                        <x-form.label for="email">Email</x-form.label>
                        <x-form.input type="email" placeholder="example@example.org" value="{{ old('email') }}"
                            name="email" id="email" autocomplete="given-name" />
                        <x-form.error field="email" />
                    </x-form.field>

                    <x-form.field>
                        <x-form.label for="password">Password</x-form.label>
                        <x-form.input type="password" placeholder="" value="{{ old('password') }}" name="password"
                            id="password" autocomplete="given-name" />
                        <x-form.error field="password" />
                    </x-form.field>

                    <x-form.field>
                        <x-form.label for="password_confirmation">Password Confirmation</x-form.label>
                        <x-form.input type="password" placeholder="" value="{{ old('password_confirmation') }}"
                            name="password_confirmation" id="password_confirmation" autocomplete="given-name" />
                        <x-form.error field="password_confirmation" />
                    </x-form.field>
                </div>

            </div>


        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form.button>Register</x-form.button>
        </div>
    </form>

</x-layout>
