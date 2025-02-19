<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800">
            {{ 'Dashboard' }}
        </h2>
    </x-slot>

    <div class="bg-gray-100 overflow-hidden shadow-xs p-4">
        {{ 'Vous êtes connectés !' }}
    </div>
</x-app-layout>
