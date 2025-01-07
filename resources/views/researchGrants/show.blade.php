<x-app-layout>
    <x-slot name="header">
        <div class="bg-black p-4 rounded-lg">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('View Research Grants') }}
            </h2>
        </div>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black">
                    <div class="space-y-6">
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-black">Project Title:</h3>
                            <p class="text-black">{{ $researchGrant->project_title }}</p>
                        </div>

                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-black">Project Leader:</h3>
                            <p class="text-black">{{ $researchGrant->projectLeader->name }}</p>
                        </div>

                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-black">Grant Amount:</h3>
                            <p class="text-black">${{ number_format($researchGrant->grant_amount, 2) }}</p>
                        </div>

                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-black">Grant Provider:</h3>
                            <p class="text-black">{{ $researchGrant->grant_provider }}</p>
                        </div>

                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-black">Start Date:</h3>
                            <p class="text-black">{{ \Carbon\Carbon::parse($researchGrant->start_date)->format('M d, Y') }}</p>
                        </div>

                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-black">Duration (Months):</h3>
                            <p class="text-black">{{ $researchGrant->duration_months }}</p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('researchGrants.index') }}" class="btn btn-secondary mt-4 px-6 py-2 bg-gray-300 hover:bg-gray-400 text-black rounded-lg shadow-md">
                            Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
