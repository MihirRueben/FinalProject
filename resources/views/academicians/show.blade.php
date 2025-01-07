<x-app-layout>
    <x-slot name="header">
        <div class="bg-black p-4 rounded-lg">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Academician Details') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg sm:rounded-lg border border-gray-300">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">{{ $academician->name }}</h3>

                    <div class="mb-4">
                        <label class="font-medium text-lg text-gray-800">Email:</label>
                        <p class="mt-2 text-gray-700">{{ $academician->email }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="font-medium text-lg text-gray-800">Staff Number:</label>
                        <p class="mt-2 text-gray-700">{{ $academician->staff_number }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="font-medium text-lg text-gray-800">College:</label>
                        <p class="mt-2 text-gray-700">{{ $academician->college }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="font-medium text-lg text-gray-800">Department:</label>
                        <p class="mt-2 text-gray-700">{{ $academician->department }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="font-medium text-lg text-gray-800">Position:</label>
                        <p class="mt-2 text-gray-700">{{ $academician->position }}</p>
                    </div>

                    <div class="flex items-center justify-end mt-6">
                        <a href="{{ route('academicians.index') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
