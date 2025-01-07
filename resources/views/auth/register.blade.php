<x-guest-layout>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Lexend Exa', sans-serif;
            background: linear-gradient(to bottom right, #1c1c2b, #2a2a4d); /* Dark blue gradient background */
            color: #f4f4f9;
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white */
        }

        .navbar a {
            color: black !important;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #f44336 !important; /* Red color for hover */
        }

        .welcome-section {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: url('https://img.freepik.com/free-vector/vintage-science-education-background-theme_23-2148477890.jpg?semt=ais_hybrid') no-repeat center center fixed;
            background-size: cover;
            color: white;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
        }

        .welcome-section h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #ff3333; /* Red color for the main heading */
        }

        .welcome-section p {
            font-size: 1.25rem;
            margin-bottom: 20px;
            color: #e0e0e0; /* Light gray text */
        }

        .btn-custom {
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: bold;
            transition: all 0.3s ease;
            background: #f44336; /* Red background */
            color: white;
            text-decoration: none;
            border: none;
            box-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
        }

        .btn-custom:hover {
            background: #d32f2f; /* Darker red on hover */
            box-shadow: 0 6px 18px rgba(255, 0, 0, 0.5);
            text-decoration: none;
        }

        .navbar-toggler-icon {
            background-color: #f44336; /* Red color for toggle button */
        }

        .navbar-nav .nav-item .nav-link {
            color: #2a2a4d !important;
        }

        .registration-form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            margin: 20px auto;
        }

        .registration-form label {
            color: #333;
        }

        .registration-form .text-input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }

        .registration-form .select-input {
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }

        .registration-form button {
            background-color: #f44336;
            color: white;
            font-weight: bold;
            padding: 12px 20px;
            border-radius: 30px;
            border: none;
            width: 100%;
            transition: all 0.3s ease;
        }

        .registration-form button:hover {
            background-color: #d32f2f;
            cursor: pointer;
        }
    </style>

    <form method="POST" action="{{ route('register') }}" class="registration-form">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="text-input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="text-input" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="text-input"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="text-input"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Role -->
        <div class="mt-4">
            <x-input-label for="user_level" :value="__('Role')" />
            <select name="user_level" id="user_level" class="select-input" required>
                <option value="4" >Admin Executive</option>
                <option value="3" >Staff</option>
                <option value="0" >User</option>
            </select>
            <x-input-error :messages="$errors->get('user_level')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button type="submit">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</x-guest-layout>
