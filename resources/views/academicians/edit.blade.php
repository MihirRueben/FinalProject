<x-app-layout>
    <x-slot name="header">
        <div class="bg-black p-4 rounded-lg">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Edit Academician') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-black">
                <div class="p-6 text-black">
                    <form action="{{ route('academicians.update', $academician->id) }}" method="POST" onsubmit="return confirmUpdate()">
                        @csrf
                        @method('PUT')

                        <!-- Name Field -->
                        <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-300 mb-4">
                            <label for="name" class="block text-sm font-medium text-black">Name</label>
                            <input type="text" name="name" id="name" value="{{ $academician->name }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                            @error('name')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Staff Number Field -->
                        <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-300 mb-4">
                            <label for="staff_number" class="block text-sm font-medium text-black">Staff Number</label>
                            <input type="text" name="staff_number" id="staff_number" value="{{ $academician->staff_number }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                            @error('staff_number')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-300 mb-4">
                            <label for="email" class="block text-sm font-medium text-black">Email</label>
                            <input type="email" name="email" id="email" value="{{ $academician->email }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                            @error('email')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- College Field -->
                        <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-300 mb-4">
                            <label for="college" class="block text-sm font-medium text-black">College</label>
                            <input type="text" name="college" id="college" value="{{ $academician->college }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                            @error('college')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Department Field -->
                        <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-300 mb-4">
                            <label for="department" class="block text-sm font-medium text-black">Department</label>
                            <input type="text" name="department" id="department" value="{{ $academician->department }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                            @error('department')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Position Dropdown -->
                        <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-300 mb-4">
                            <label for="position" class="block text-sm font-medium text-black">Position</label>
                            <select name="position" id="position" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                                <option value="Professor" {{ $academician->position == 'Professor' ? 'selected' : '' }}>Professor</option>
                                <option value="Associate Professor" {{ $academician->position == 'Associate Professor' ? 'selected' : '' }}>Associate Professor</option>
                                <option value="Senior Lecturer" {{ $academician->position == 'Senior Lecturer' ? 'selected' : '' }}>Senior Lecturer</option>
                                <option value="Lecturer" {{ $academician->position == 'Lecturer' ? 'selected' : '' }}>Lecturer</option>
                            </select>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('academicians.index') }}" class="bg-gray-800 hover:bg-gray-700 text-white py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-black">
                                Cancel
                            </a>
                            <button type="submit" class="ml-3 bg-black hover:bg-gray-800 text-white py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-black">
                                Update Academician
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmUpdate() {
            return confirm('Are you sure you want to update this academician?');
        }
    </script>
</x-app-layout>
