<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('مدير') }}
        </h2>
    </x-slot>

    <div>
        <div>
            <div id="hello">
                <router-view></router-view>
            </div>
        </div>
    </div>
</x-app-layout>