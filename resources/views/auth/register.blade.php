<x-layout>
    <x-slot:heading>
        Register    
    </x-slot>

    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                        <div class="mt-2">
                            <x-form-input name="first_name" id="first_name" required/>

                            <x-form-error name= "first_name"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last Name</label>
                        <div class="mt-2">
                            <x-form-input name="last_name" id="last_name" required/>

                            <x-form-error name= "last_name"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" type="email" required/>

                            <x-form-error name= "email"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="mt-2">
                            <x-form-input name="password" id="password" type="password" required/>

                            <x-form-error name= "password"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>
                        <div class="mt-2">
                            <x-form-input name="password_confirmation" id="password_confirmation" type="password" required/>

                            <x-form-error name= "password_confirmation"/>
                        </div>
                    </x-form-field>
                </div>
                
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <x-form-button>Register</x-form-button>
            </div>
        </div>
    </form>

</x-layout>