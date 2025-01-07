<x-app-layout>
    <x-slot name="header">
        <div class="bg-black p-4 rounded-lg">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Academician List') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg border border-gray-300">
                <div class="p-6">
                    <a href="{{ route('academicians.create') }}" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-yellow-400 mb-6">
                        Add New Academician
                    </a>
                    <table class="min-w-full table-auto text-sm">
                        <thead>
                            <tr class="bg-red-500 text-white">
                                <th class="py-3 px-4">Name</th>
                                <th class="py-3 px-4">Email</th>
                                <th class="py-3 px-4">Staff Number</th>
                                <th class="py-3 px-4">College</th>
                                <th class="py-3 px-4">Department</th>
                                <th class="py-3 px-4">Position</th>
                                <th class="py-3 px-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($academicians as $academician)
                                <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                                    <td class="py-3 px-4">{{ $academician->name }}</td>
                                    <td class="py-3 px-4">{{ $academician->email }}</td>
                                    <td class="py-3 px-4">{{ $academician->staff_number }}</td>
                                    <td class="py-3 px-4">{{ $academician->college }}</td>
                                    <td class="py-3 px-4">{{ $academician->department }}</td>
                                    <td class="py-3 px-4">{{ $academician->position }}</td>
                                    <td class="py-3 px-4 flex items-center space-x-4">
                                        <a href="{{ route('academicians.edit', $academician->id) }}" class="text-blue-500 hover:text-blue-600">Edit</a>
                                        <form action="{{ route('academicians.destroy', $academician->id) }}" method="POST" class="inline-block ml-4">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-600">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
