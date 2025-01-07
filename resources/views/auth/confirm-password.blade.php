<x-guest-layout>
    <div class="mb-4 text-sm text-black">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}" class="bg-white border border-black p-6 rounded-lg shadow-md">
        @csrf

        <!-- Password -->
        <div class="mb-6">
            <x-input-label for="password" :value="__('Password')" class="text-black" />

            <x-text-input id="password" class="block mt-1 w-full border border-black p-2 rounded-md text-black"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button class="bg-red-600 hover:bg-red-700 text-white border border-red-600">
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
