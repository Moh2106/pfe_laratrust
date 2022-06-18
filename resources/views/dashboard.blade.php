<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('وكيل التسجيل') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div>
            <div id="agent">
                <router-view></router-view>
            </div>
        </div>
    </div>
</x-app-layout>