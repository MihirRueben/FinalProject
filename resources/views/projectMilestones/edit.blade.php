<x-app-layout>
    <x-slot name="header">
        <div class="bg-black p-4 rounded-lg">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Edit Project Milestone') }}
            </h2>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-black">
                <div class="p-6 text-black">
                    <form action="{{ route('projectMilestones.update', $projectMilestone->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Research Grant Field -->
                        <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-300 mb-4">
                            <label for="research_grant_id" class="block text-sm font-medium text-black">Research Grant</label>
                            <select 
                                name="research_grant_id" 
                                id="research_grant_id" 
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                                required>
                                @forelse ($researchGrants as $grant)
                                    <option value="{{ $grant->id }}" @selected($grant->id == $projectMilestone->research_grant_id)>{{ $grant->project_title }}</option>
                                @empty
                                    <option value="" disabled>No Research Grants available</option>
                                @endforelse
                            </select>
                            @error('research_grant_id')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Milestone Name Field -->
                        <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-300 mb-4">
                            <label for="milestone_name" class="block text-sm font-medium text-black">Milestone Name</label>
                            <input 
                                type="text" 
                                name="milestone_name" 
                                id="milestone_name" 
                                value="{{ old('milestone_name', $projectMilestone->milestone_name) }}" 
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                                required>
                            @error('milestone_name')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Target Completion Date Field -->
                        <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-300 mb-4">
                            <label for="target_completion_date" class="block text-sm font-medium text-black">Target Completion Date</label>
                            <input 
                                type="date" 
                                name="target_completion_date" 
                                id="target_completion_date" 
                                value="{{ old('target_completion_date', $projectMilestone->target_completion_date) }}" 
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                                required>
                            @error('target_completion_date')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Deliverable Field -->
                        <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-300 mb-4">
                            <label for="deliverable" class="block text-sm font-medium text-black">Deliverable</label>
                            <textarea 
                                name="deliverable" 
                                id="deliverable" 
                                rows="3" 
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                                required>{{ old('deliverable', $projectMilestone->deliverable) }}</textarea>
                            @error('deliverable')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Status Field -->
                        <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-300 mb-4">
                            <label for="status" class="block text-sm font-medium text-black">Status</label>
                            <select 
                                name="status" 
                                id="status" 
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                                required>
                                <option value="Pending" @selected($projectMilestone->status == 'Pending')>Pending</option>
                                <option value="In Progress" @selected($projectMilestone->status == 'In Progress')>In Progress</option>
                                <option value="Completed" @selected($projectMilestone->status == 'Completed')>Completed</option>
                            </select>
                            @error('status')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('projectMilestones.index') }}" class="bg-gray-800 hover:bg-gray-700 text-white py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-black">
                                Cancel
                            </a>
                            <button type="submit" class="ml-3 bg-black hover:bg-gray-800 text-white py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-black">
                                Update Milestone
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

           
