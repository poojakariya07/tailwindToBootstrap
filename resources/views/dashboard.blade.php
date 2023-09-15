<x-app-layout>
    <x-slot name="header">
        <h4 class="font-weight-bold text-black py-4">
            {{ __('Dashboard') }}
        </h4>
    </x-slot>

    <div class="p-5">
        <div class=" mx-auto sm:px-6 ">
            <div class="bg-white p-4 shadow p-3 mb-5 bg-body rounded">
                <div class="m-6 text-secondary">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
