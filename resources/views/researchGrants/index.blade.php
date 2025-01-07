<x-app-layout>
    <x-slot name="header">
        <div class="bg-black p-4 rounded-lg">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Research Grants') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg border border-black">
                <div class="p-6">
                    <a href="{{ route('researchGrants.create') }}" class="inline-block px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 mb-4">
                        Add Research Grant
                    </a>
                    <table class="min-w-full table-auto bg-white rounded-lg shadow-md overflow-hidden">
                        <thead>
                            <tr class="bg-red-600 text-white text-sm text-left">
                                <th class="px-6 py-3">Project Title</th>
                                <th class="px-6 py-3">Project Leader</th>
                                <th class="px-6 py-3">Grant Amount</th>
                                <th class="px-6 py-3">Start Date</th>
                                <th class="px-6 py-3">Duration (Months)</th>
                                <th class="px-6 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($researchGrants as $grant)
                                <tr class="bg-white">
                                    <td class="px-6 py-4 text-sm text-black">{{ $grant->project_title }}</td>
                                    <td class="px-6 py-4 text-sm text-black">{{ $grant->projectLeader->name }}</td>
                                    <td class="px-6 py-4 text-sm text-black">${{ number_format($grant->grant_amount, 2) }}</td>
                                    <td class="px-6 py-4 text-sm text-black">{{ \Carbon\Carbon::parse($grant->start_date)->format('M d, Y') }}</td>
                                    <td class="px-6 py-4 text-sm text-black">{{ $grant->duration_months }}</td>
                                    <td class="px-6 py-4 text-sm text-black flex space-x-8">
                                        <a href="{{ route('researchGrants.show', $grant->id) }}" class="text-blue-600 hover:text-blue-800">View</a>
                                        <a href="{{ route('researchGrants.edit', $grant->id) }}" class="text-yellow-600 hover:text-yellow-800">Edit</a>
                                        <form action="{{ route('researchGrants.destroy', $grant->id) }}" method="POST" style="display:inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure?')">Delete</button>
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
