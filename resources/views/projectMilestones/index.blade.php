<x-app-layout>
    <x-slot name="header">
        <div class="bg-black p-6 rounded-lg">
            <h2 class="text-2xl font-semibold text-white mb-6">
                {{ __('Project Milestones') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-xl overflow-hidden">
                <div class="p-8 text-black">
                    <a href="{{ route('projectMilestones.create') }}" class="bg-red-600 hover:bg-red-700 text-white py-3 px-6 rounded-md font-semibold mb-6 inline-block">
                        Add Project Milestone
                    </a>
                    <table class="min-w-full bg-white rounded-lg shadow-md overflow-hidden">
                        <thead class="bg-gray-50 text-sm text-gray-700">
                            <tr>
                                <th class="px-6 py-3 text-left">Milestone Name</th>
                                <th class="px-6 py-3 text-left">Research Grant</th>
                                <th class="px-6 py-3 text-left">Target Completion Date</th>
                                <th class="px-6 py-3 text-left">Status</th>
                                <th class="px-6 py-3 text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-gray-800">
                            @foreach ($projectMilestones as $milestone)
                                <tr class="bg-white hover:bg-gray-100">
                                    <td class="px-6 py-4">{{ $milestone->milestone_name }}</td>
                                    <td class="px-6 py-4">{{ $milestone->researchGrant->project_title }}</td>
                                    <td class="px-6 py-4">{{ \Carbon\Carbon::parse($milestone->target_completion_date)->format('M d, Y') }}</td>
                                    <td class="px-6 py-4">{{ $milestone->status }}</td>
                                    <td class="px-6 py-4 flex space-x-4">
                                        <a href="{{ route('projectMilestones.show', $milestone->id) }}" class="bg-teal-500 text-white hover:bg-teal-600 py-2 px-4 rounded-md">View</a>
                                        <a href="{{ route('projectMilestones.edit', $milestone->id) }}" class="bg-yellow-500 text-white hover:bg-yellow-600 py-2 px-4 rounded-md">Edit</a>
                                        <form action="{{ route('projectMilestones.destroy', $milestone->id) }}" method="POST" style="display:inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 text-white hover:bg-red-600 py-2 px-4 rounded-md" onclick="return confirm('Are you sure?')">Delete</button>
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