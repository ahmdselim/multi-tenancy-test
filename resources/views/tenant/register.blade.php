<x-guest-layout>
    <form method="POST" action="{{ route('tenant.register') }}">
        @csrf
        <div class="mt-4">
            <x-input-label for="domain" :value="__('Subdomain')" />
            <div class="flex">
                <x-text-input
                    id="domain"
                    class="mt-1 block w-full"
                    type="text"
                    name="domain"
                    :value="old('domain')"
                    required
                />
                <span class="text-gray-600 ml-2 mt-1">.selim.test</span>
            </div>
        </div>

        <div class="mt-4 flex items-center justify-end">
            <x-primary-button class="ml-4"> {{ __('Register Tenant') }} </x-primary-button>
        </div>
    </form>
</x-guest-layout>
