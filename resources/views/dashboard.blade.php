<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Stinder
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-6">
            @if (!auth()->user()->text)
                @livewire('upload-code')
            @else
                @livewire('stinder')
            @endif
        </div>
    </div>
</x-app-layout>
