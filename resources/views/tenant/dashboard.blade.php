<x-app-layout>
    <x-slot name="header">
        <h2 class="text-gray-800 text-xl font-semibold leading-tight">{{ __('Dashboard') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl lg:px-8 sm:px-6">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="text-gray-900 p-6">{{ __("You're logged in!") }} - <span class="font-bold">{{ tenant('id') }}</span></div>
            </div>
        </div>
    </div>
</x-app-layout>
