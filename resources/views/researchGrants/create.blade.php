<x-app-layout>
    <x-slot name="header">
        <div class="bg-black p-4 rounded-lg">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Create Research Grant') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg border border-black">
                <div class="p-6">
                    <form action="{{ route('researchGrants.store') }}" method="POST">
                        @csrf

                        <!-- Project Title -->
                        <div class="mb-6">
                            <label for="project_title" class="block text-sm font-medium text-black">Project Title</label>
                            <input type="text" name="project_title" id="project_title" class="form-input rounded-md shadow-sm mt-1 block w-full text-black border border-black" required>
                        </div>

                        <!-- Project Leader -->
                        <div class="mb-6">
                            <label for="project_leader_id" class="block text-sm font-medium text-black">Project Leader</label>
                            <select name="project_leader_id" id="project_leader_id" class="form-select rounded-md shadow-sm mt-1 block w-full text-black border border-black" required>
                                @foreach ($academicians as $academician)
                                    <option value="{{ $academician->id }}">{{ $academician->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Grant Amount -->
                        <div class="mb-6">
                            <label for="grant_amount" class="block text-sm font-medium text-black">Grant Amount</label>
                            <input type="number" name="grant_amount" id="grant_amount" class="form-input rounded-md shadow-sm mt-1 block w-full text-black border border-black" required>
                        </div>

                        <!-- Grant Provider -->
                        <div class="mb-6">
                            <label for="grant_provider" class="block text-sm font-medium text-black">Grant Provider</label>
                            <input type="text" name="grant_provider" id="grant_provider" class="form-input rounded-md shadow-sm mt-1 block w-full text-black border border-black" required>
                        </div>

                        <!-- Start Date -->
                        <div class="mb-6">
                            <label for="start_date" class="block text-sm font-medium text-black">Start Date</label>
                            <input type="date" name="start_date" id="start_date" class="form-input rounded-md shadow-sm mt-1 block w-full text-black border border-black" required>
                        </div>

                        <!-- Duration in Months -->
                        <div class="mb-6">
                            <label for="duration_months" class="block text-sm font-medium text-black">Duration (Months)</label>
                            <input type="number" name="duration_months" id="duration_months" class="form-input rounded-md shadow-sm mt-1 block w-full text-black border border-black" required>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-red-500">
                            Create Research Grant
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
