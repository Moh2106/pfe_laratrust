<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('نائب وكيل الملك') }}
        </h2>
    </x-slot>

    <div class="py-6">
        
        <div id="vice">
            <router-view></router-view>
        </div>
    </div>
</x-app-layout>