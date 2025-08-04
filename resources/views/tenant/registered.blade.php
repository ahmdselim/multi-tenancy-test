<x-guest-layout>
    <div class="text-gray-600 mb-4 text-sm">
        {{ __('Your tenant has been registered successfully!') }}
    </div>

    <div class="mt-4 flex items-center justify-between">
        <div>
            Your tenant URL:
            <a
                href="https://{{ $domain }}.selim.test"
                class="text-gray-600 hover:text-gray-900 text-sm underline"
                target="_blank"
            >https://{{ $domain }}.selim.test</a
            >
        </div>
    </div>
</x-guest-layout>
