<x-app-layout>
    <x-slot name="header">
        <div class="bg-black p-4 rounded-md">
            <h2 class="font-semibold text-2xl text-white leading-tight">
                {{ ('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                <div class="p-6 text-gray-900">
                    <h3 class="text-xl font-bold">
                        {{ ("Welcome back!") }}
                    </h3>
                    <p class="mt-2 text-sm text-gray-600">
                        {{ __("Navigate through the following options to manage your projects and resources efficiently.") }}
                    </p>

                    <!-- Buttons Section -->
                    <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                        @foreach ([
                            ['route' => 'academicians.index', 'bg' => 'bg-red-600', 'hover' => 'hover:bg-red-700', 'text' => 'Manage Academicians'],
                            ['route' => 'researchGrants.index', 'bg' => 'bg-yellow-500', 'hover' => 'hover:bg-yellow-600', 'text' => 'Manage Research Grants'],
                            ['route' => 'projectMilestones.index', 'bg' => 'bg-gray-800', 'hover' => 'hover:bg-gray-900', 'text' => 'Manage Project Milestones'],
                            ['route' => 'projectMembers.index', 'bg' => 'bg-red-500', 'hover' => 'hover:bg-red-600', 'text' => 'Manage Project Members'],
                        ] as $button)
                            <a href="{{ route($button['route']) }}"
                               class="block text-center py-4 px-6 rounded-lg shadow-lg {{ $button['bg'] }} text-white text-lg font-medium transition transform hover:scale-105 {{ $button['hover'] }}">
                                {{ $button['text'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>