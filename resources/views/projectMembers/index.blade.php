<x-app-layout>
    <x-slot name="header">
        <div class="bg-black p-4 rounded-lg">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Project Members') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg border border-gray-300">
                <div class="p-6 text-white">
                    <!-- Add/Update Project Member Button -->
                    <a href="{{ route('projectMembers.create') }}" class="w-full bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-6 rounded-lg shadow-md mb-4 block text-center">
                        Add/Update Project Member
                    </a>

                    <!-- Loop through each research grant -->
                    @forelse($researchGrants as $grant)
                        <div class="mb-6 border-b border-gray-300 pb-4">
                            <!-- Research Grant Title -->
                            <h3 class="text-lg font-medium mb-2">
                                <a href="{{ route('researchGrants.show', $grant->id) }}" class="hover:text-indigo-500 text-white">
                                    {{ $grant->project_title }}
                                </a>
                            </h3>

                            <!-- Display the Project Leader -->
                            <div class="mb-4">
                                <strong>Project Leader:</strong>
                                <span>{{ $grant->projectLeader->name }}</span>
                            </div>

                            <!-- Display Project Members Excluding Leader -->
                            @if($grant->projectMembers->where('id', '!=', $grant->projectLeader->id)->count() > 0)
                                <table class="min-w-full table-auto bg-white rounded-lg shadow-md overflow-hidden">
                                    <thead>
                                        <tr class="bg-gray-200 text-left text-sm text-gray-700">
                                            <th class="px-6 py-3">Name</th>
                                            <th class="px-6 py-3">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($grant->projectMembers as $member)
                                            @if ($member->id != $grant->projectLeader->id) <!-- Exclude project leader -->
                                                <tr class="bg-white hover:bg-gray-100">
                                                    <td class="px-6 py-4 text-sm text-gray-800">{{ $member->name }}</td>
                                                    <td class="px-6 py-4 text-sm text-gray-800">
                                                        <div class="flex space-x-4">
                                                            <!-- Edit Button -->
                                                            <a href="{{ route('academicians.edit', $member->id) }}" class="text-yellow-600 hover:text-yellow-800">
                                                                <button class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-4 rounded-lg shadow-sm">
                                                                    Edit
                                                                </button>
                                                            </a>
                                                            <!-- Delete Button -->
                                                            <form action="{{ route('projectMembers.destroy', $member->pivot->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this member?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-1 px-4 rounded-lg shadow-sm">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p class="text-sm text-gray-500">No project members added yet.</p>
                            @endif
                        </div>
                    @empty
                        <p class="text-sm text-gray-500">No research grants available.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
