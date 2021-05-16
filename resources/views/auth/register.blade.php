<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Sexo -->
            <div class="mt-4">
                <x-label for="sexo" :value="__('Sexo')" />

                <x-input type="radio" name="sexo" value="hombre" />Hombre
                <x-input type="radio" name="sexo" value="mujer" />Mujer
            </div>

            <!-- Fecha de Nacimiento -->
            <div class="mt-4">
                <x-label for="fechaNacimiento" :value="__('Fecha de nacimiento')" />

                <x-input class="block mt-1 w-full" type="date" name="fechaNacimiento" :value="old('fechaNacimiento')"
                    required />
            </div>

            <!-- Ciudad de residencia -->
            <div class="mt-4">
                <x-label for="ciudad" :value="__('Ciudad de residencia')" />

                <x-input class="block mt-1 w-full" type="text" name="ciudad" :value="old('ciudad')" required />
            </div>

            <!-- Pais de residencia -->
            <div class="mt-4">
                <x-label for="pais" :value="__('Pais de residencia')" />

                <x-input class="block mt-1 w-full" type="text" name="pais" :value="old('pais')" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
