<x-app-layout>
    <x-slot name="header">
        <div class="bg-black p-4 rounded-lg">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Add Project Milestone') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-black">
                <div class="p-6 text-black">
                    <form action="{{ route('projectMilestones.store') }}" method="POST">
                        @csrf

                        @foreach ([
                            'Research Grant' => [
                                'type' => 'select',
                                'name' => 'research_grant_id',
                                'options' => $researchGrants->map(fn($grant) => ['value' => $grant->id, 'label' => $grant->project_title]),
                                'empty' => 'No Research Grants available',
                                'required' => true
                            ],
                            'Milestone Name' => [
                                'type' => 'text',
                                'name' => 'milestone_name',
                                'required' => true
                            ],
                            'Target Completion Date' => [
                                'type' => 'date',
                                'name' => 'target_completion_date',
                                'required' => true
                            ],
                            'Deliverable' => [
                                'type' => 'textarea',
                                'name' => 'deliverable',
                                'rows' => 3,
                                'required' => true
                            ],
                            'Status' => [
                                'type' => 'select',
                                'name' => 'status',
                                'options' => collect([
                                    ['value' => 'Not Started', 'label' => 'Not Started'],
                                    ['value' => 'In Progress', 'label' => 'In Progress'],
                                    ['value' => 'Completed', 'label' => 'Completed'],
                                ]),
                                'required' => true
                            ],
                            'Remarks (Optional)' => [
                                'type' => 'textarea',
                                'name' => 'remark',
                                'rows' => 3,
                                'required' => false
                            ]
                        ] as $label => $input)
                            <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-300 mb-4">
                                <label for="{{ $input['name'] }}" class="block text-sm font-medium text-black">{{ $label }}</label>


@if ($input['type'] === 'select')
                                    <select 
                                        name="{{ $input['name'] }}" 
                                        id="{{ $input['name'] }}" 
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                                        {{ $input['required'] ? 'required' : '' }}>
                                        @if (isset($input['options']) && count($input['options']))
                                            @foreach ($input['options'] as $option)
                                                <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
                                            @endforeach
                                        @else
                                            <option value="" disabled>{{ $input['empty'] }}</option>
                                        @endif
                                    </select>
                                @elseif ($input['type'] === 'textarea')
                                    <textarea 
                                        name="{{ $input['name'] }}" 
                                        id="{{ $input['name'] }}" 
                                        rows="{{ $input['rows'] }}" 
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                                        {{ $input['required'] ? 'required' : '' }}></textarea>
                                @else
                                    <input 
                                        type="{{ $input['type'] }}" 
                                        name="{{ $input['name'] }}" 
                                        id="{{ $input['name'] }}" 
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" 
                                        {{ $input['required'] ? 'required' : '' }}>
                                @endif

                                @error($input['name'])
                                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        @endforeach

                        <div class="mt-6">
                            <button type="submit" class="bg-black hover:bg-gray-800 text-white py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-black">
                                Save Milestone
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>