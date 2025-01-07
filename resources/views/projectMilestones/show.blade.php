<x-app-layout>
    <x-slot name="header">
        <div class="bg-black p-4 rounded-lg">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Project Milestone Details') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-black">
                <div class="p-6 text-black">
                    <div class="space-y-6">
                        @foreach ([
                            'Milestone Name' => $projectMilestone->milestone_name,
                            'Research Grant' => $projectMilestone->researchGrant->project_title,
                            'Target Completion Date' => $projectMilestone->target_completion_date,
                            'Deliverable' => $projectMilestone->deliverable,
                            'Status' => $projectMilestone->status,
                            'Remarks' => $projectMilestone->remark,
                            'Last Updated' => $projectMilestone->date_updated 
                                ? $projectMilestone->date_updated->format('Y-m-d H:i:s') 
                                : 'Not Updated'
                        ] as $label => $value)
                            <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-300">
                                <h3 class="text-lg font-medium text-black">{{ $label }}:</h3>
                                <p class="text-gray-700">{{ $value }}</p>
                            </div>
                        @endforeach
                    </div>
                    
                    <div class="mt-6">
                        <a href="{{ route('projectMilestones.index') }}" class="bg-black hover:bg-gray-800 text-white py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-black">
                            Back to Milestones
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>