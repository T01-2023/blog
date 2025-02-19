<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800">
            {{ 'Gestion des posts' }}
        </h2>
    </x-slot>

    <div class="overflow-hidden shadow-md p-8">

        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-gray-600">Post show</h1>
                <p class="mt-2 text-xs text-gray-400">A list of all the users in your account including their name, title, email and role.</p>
            </div>
            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <button type="button" class="block rounded-md bg-red-800 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Supprimer</button>
            </div>
        </div>
        <div class="-mx-4 mt-8 sm:-mx-0 text-xs">

            {{ $post->id }} - {{ $post->title }}
            <br>
            <br>
            Créé le : {{ $post->created_at->format('d-m-Y à h:i') }}
            <br>
            <br>
            Updaté le : {{ $post->updated_at->format('d-m-Y à h:i') }}
            <br>
            <br>
            Statut : <span class="inline-flex items-center rounded-md bg-green-100 px-2 py-0.5 text-xs font-medium text-green-700">Online</span>

        </div>

        <x-secondary-button class="mt-20"><a href="{{url()->previous()}}">Go back to the previous page</a></x-secondary-button>

    </div>
</x-app-layout>
