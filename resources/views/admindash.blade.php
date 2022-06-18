<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight text-black text-center">
            {{ __('الوكيل العام للملك') }}
        </h2>
    </x-slot>
    
    <div class="py-6">
        <div>
            <div id="app">
                <router-view></router-view>
            </div>
        </div>
    </div>
</x-app-layout>



