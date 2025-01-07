<x-app-layout>
    <x-slot name="header">
        <div class="bg-black p-4 rounded-lg">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Edit Project Member') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg border border-gray-300">
                <div class="p-6">
                    <!-- Form to Edit Project Member -->
                    <form action="{{ route('projectMembers.update', $projectMember->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Research Grant Dropdown -->
                        <div class="mb-4">
                            <label for="research_grant_id" class="block text-gray-700 dark:text-gray-200 font-medium">Research Grant</label>
                            <select name="research_grant_id" id="research_grant_id" class="block w-full p-2 mt-2 rounded-lg border border-gray-300 dark:border-gray-600 text-black focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                                @foreach($researchGrants as $grant)
                                    <option value="{{ $grant->id }}" {{ $projectMember->research_grant_id == $grant->id ? 'selected' : '' }}>
                                        {{ $grant->project_title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Academician Dropdown -->
                        <div class="mb-4">
                            <label for="academician_id" class="block text-gray-700 dark:text-gray-200 font-medium">Academician</label>
                            <select name="academician_id" id="academician_id" class="block w-full p-2 mt-2 rounded-lg border border-gray-300 dark:border-gray-600 text-black focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                                @foreach($academicians as $academician)
                                    <option value="{{ $academician->id }}" {{ $projectMember->academician_id == $academician->id ? 'selected' : '' }}>
                                        {{ $academician->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Update Button -->
                        <div class="mb-4">
                            <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
                                Update Member
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
