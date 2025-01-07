<x-app-layout>
    <x-slot name="header">
        <div class="bg-black p-4 rounded-lg">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Project Member Details') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg border border-gray-300">
                <div class="p-6 text-white">
                    <div class="space-y-6">
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-black">Research Grant:</h3>
                            <p class="text-gray-800">{{ $projectMember->researchGrant->project_title }}</p>
                        </div>

                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-black">Academician:</h3>
                            <p class="text-gray-800">{{ $projectMember->academician->name }}</p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('projectMembers.index') }}" class="w-full bg-gray-500 hover:bg-gray-600 text-white py-2 px-6 rounded-lg shadow-md block text-center">
                            Back to Members List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
