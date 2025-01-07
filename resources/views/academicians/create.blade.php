<x-app-layout>
    <x-slot name="header">
        <div class="bg-black p-4 rounded-lg">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Add Academician') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-xl p-8">
                <form action="{{ route('academicians.store') }}" method="POST">
                    @csrf

                    <!-- User Dropdown -->
                    <div class="mb-6">
                        <label for="name" class="block text-lg font-medium text-black">Name</label>
                        <select name="users_id" id="name" class="form-select rounded-md shadow-sm mt-2 w-full py-2 px-4 bg-white text-black border-gray-300 focus:ring-2 focus:ring-teal-500" required>
                            <option value="" disabled selected>Select a name</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" data-email="{{ $user->email }}" data-name="{{ $user->name }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Name Field -->
                    <div class="mb-6">
                        <label for="selected_name" class="block text-lg font-medium text-black">Selected Name</label>
                        <input type="text" name="name" id="selected_name" class="form-input rounded-md shadow-sm mt-2 w-full py-2 px-4 bg-white text-black border-gray-300 focus:ring-2 focus:ring-teal-500" required readonly>
                    </div>

                    <!-- Email Field -->
                    <div class="mb-6">
                        <label for="email" class="block text-lg font-medium text-black">Email</label>
                        <input type="email" name="email" id="email" class="form-input rounded-md shadow-sm mt-2 w-full py-2 px-4 bg-white text-black border-gray-300 focus:ring-2 focus:ring-teal-500" required readonly>
                    </div>

                    <!-- Staff Number Field -->
                    <div class="mb-6">
                        <label for="staff_number" class="block text-lg font-medium text-black">Staff Number</label>
                        <input type="text" name="staff_number" id="staff_number" class="form-input rounded-md shadow-sm mt-2 w-full py-2 px-4 bg-white text-black border-gray-300 focus:ring-2 focus:ring-teal-500" required>
                    </div>

                    <!-- College Field -->
                    <div class="mb-6">
                        <label for="college" class="block text-lg font-medium text-black">College</label>
                        <input type="text" name="college" id="college" class="form-input rounded-md shadow-sm mt-2 w-full py-2 px-4 bg-white text-black border-gray-300 focus:ring-2 focus:ring-teal-500" required>
                    </div>

                    <!-- Department Field -->
                    <div class="mb-6">
                        <label for="department" class="block text-lg font-medium text-black">Department</label>
                        <input type="text" name="department" id="department" class="form-input rounded-md shadow-sm mt-2 w-full py-2 px-4 bg-white text-black border-gray-300 focus:ring-2 focus:ring-teal-500" required>
                    </div>

                    <!-- Position Dropdown -->
                    <div class="mb-6">
                        <label for="position" class="block text-lg font-medium text-black">Position</label>
                        <select name="position" id="position" class="form-select rounded-md shadow-sm mt-2 w-full py-2 px-4 bg-white text-black border-gray-300 focus:ring-2 focus:ring-teal-500" required>
                            <option value="Professor">Professor</option>
                            <option value="Associate Professor">Associate Professor</option>
                            <option value="Senior Lecturer">Senior Lecturer</option>
                            <option value="Lecturer">Lecturer</option>
                        </select>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex items-center justify-end mt-6">
                        <a href="{{ route('academicians.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Cancel
                        </a>
                        <button type="submit" class="ml-3 bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('name').addEventListener('change', function () {
            const selectedOption = this.options[this.selectedIndex];
            const name = selectedOption.getAttribute('data-name');
            const email = selectedOption.getAttribute('data-email');

            // Update name and email fields dynamically
            document.getElementById('selected_name').value = name;
            document.getElementById('email').value = email;
        });
    </script>
</x-app-layout>
