<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-500">{{ 'Gestion des posts' }}</h2>
    </x-slot>


    <div class="overflow-hidden shadow-md p-8">

        <div class="sm:flex sm:items-center pb-10 border-b-1 border-vert">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold leading-6 text-vert">Posts : création</h1>
                <p class="mt-2 text-xs text-vert">A list of all the users in your account including their name, title, email and role.</p>
            </div>
            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <a href="{{ route('form') }}">
                    <x-button-main>Nouveau post</x-button-main>
                </a>
            </div>
        </div>

        <div class="my-10">
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 gap-x-6 gap-y-14 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <x-input-label for="title" :value="('Titre')"/>
                        <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" value="{{ old('title') }}" />
                        <x-input-error :messages="$errors->get('title')" />
                    </div>

                    <div class="sm:col-span-3 sm:col-start-1">
                        <x-input-label for="slug" :value="('Slug')" />
                        <x-input-label-help  :help="('Le slug permet de générer des URL plus propres pour favoriser le référencement. Il est possible de le spécifier dans le champ ci-dessous ou de le laisser vide. Dans ce cas, ce dernier sera généré automatiquement à partir du titre.')" />
                        <x-text-input id="slug" name="slug" type="text" class="mt-1 block w-full" value="" />
                        <x-input-error :messages="$errors->get('slug')" />
                    </div>

                    <div class="col-span-full">
                        <x-input-label for="content" :value="('Contenu du post')" />
                        <x-input-label-help  :help="('Contenu affiché lors de la lecture du post. La description des posts sur la page d accueil du blog reprend les 150 premiers caractéres de ce contenu')" />
                        <x-input-textarea></x-input-textarea>
                        <x-input-error :messages="$errors->get('content')" />
                    </div>

                    <div class="col-span-3">
                        <x-input-label for="name" :value="('Publication')" />
                        <x-input-label-help  :help="('Cette section  permet de choisir le mode de publication du post.')" />
                        <fieldset>
                            <div class="mt-4 space-y-5">
                                <x-input-radio :name="('plan')" :label="('Publier')" :description="('Le post sera publié directement sur le blog.')" />
                                <x-input-radio :name="('plan')" :label="('En attente')" :description="('Le post ne sera pas publié sur le blog et pourra être modifié ultérieurement.')" />
                                <x-input-radio :name="('plan')" :label="('Archiver')" :description="('Le post sera archivé et n apparaitra plus dans la liste des posts. Il est possible de le publier de nouveau.')" />
                                <x-input-radio :name="('plan')" :label="('Label via var')" :description="('Test de description')" />
                            </div>
                        </fieldset>
                    </div>
                </div>

                <div class="mt-10 pt-10 flex items-center justify-center gap-x-6 border-t-1 border-vert">
                    <x-button-second>Annuler</x-button-second>
                    <x-button-submit>Enregistrer</x-button-submit>
                </div>
            </form>
        </div>

    </div>


    <x-mediaqueries />

</x-app-layout>

