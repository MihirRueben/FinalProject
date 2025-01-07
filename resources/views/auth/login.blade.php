<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 text-green-600" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="bg-white border border-black p-6 rounded-lg shadow-md max-w-sm mx-auto mt-10">
        @csrf

        <!-- Email Address -->
        <div class="mb-6">
            <x-input-label for="email" :value="__('Email')" style="color: black;" />
            <x-text-input id="email" class="block mt-1 w-full border border-white p-2 rounded-md" style="color: white;" 
                            type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
        </div>

        <!-- Password -->
        <div class="mt-4 mb-6">
            <x-input-label for="password" :value="__('Password')" style="color: black;" />
            <x-text-input id="password" class="block mt-1 w-full border border-white p-2 rounded-md" style="color: white;" 
                            type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center" style="color: black;">
                <input id="remember_me" type="checkbox" class="rounded border-black text-black shadow-sm focus:ring-red-500" name="remember">
                <span class="ms-2 text-sm" style="color: black;">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-6">
            @if (Route::has('password.request'))
                <a class="underline text-sm" href="{{ route('password.request') }}" style="color: black; hover:text-red-600;">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="bg-red-600 hover:bg-red-700 text-white border border-red-600 rounded-lg shadow-sm px-4 py-2">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
