<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}" class="bg-white border border-black p-6 rounded-lg shadow-md">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="mb-6">
            <x-input-label for="email" :value="__('Email')" class="text-black" />
            <x-text-input id="email" class="block mt-1 w-full border border-black p-2 rounded-md text-black"
                            type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
        </div>

        <!-- Password -->
        <div class="mt-4 mb-6">
            <x-input-label for="password" :value="__('Password')" class="text-black" />
            <x-text-input id="password" class="block mt-1 w-full border border-black p-2 rounded-md text-black"
                            type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4 mb-6">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-black" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full border border-black p-2 rounded-md text-black"
                            type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-600" />
        </div>

        <div class="flex items-center justify-end mt-6">
            <x-primary-button class="bg-red-600 hover:bg-red-700 text-white border border-red-600">
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
