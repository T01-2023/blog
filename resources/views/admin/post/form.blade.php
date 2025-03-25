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
                <x-button.button-second><a href="{{route('posts')}}">Retour</a></x-button.button-second>
            </div>
        </div>


        <div class="my-10">
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 gap-x-6 gap-y-14 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <x-form.input-label for="title" value="Titre"/>
                        <x-form.input-text id="title" name="title" type="text" value="{{ old('title') }}" />
                        <x-form.input-error :messages="$errors->get('title')" />
                    </div>



                    <div class="sm:col-span-3 sm:col-start-1">
                        <x-form.input-label for="slug" value="Slug" />
                        <x-form.input-label-help  help="Le slug permet de générer des URL plus propres pour favoriser le référencement. Il est possible de le spécifier dans le champ ci-dessous ou de le laisser vide. Dans ce cas, ce dernier sera généré automatiquement à partir du titre." />
                        <x-form.input-text id="slug" name="slug" type="text" value="{{ old('slug') }}" />
                        <x-form.input-error :messages="$errors->get('slug')" />
                    </div>

                    <div class="col-span-full">
                        <x-form.input-label for="content" value="Contenu du post 2" />
                        <x-form.input-label-help  help="Contenu affiché lors de la lecture du post. La description des posts sur la page d accueil du blog reprend les 150 premiers caractéres de ce contenu" />
                        <x-form.input-textarea rows="5" name="content"></x-form.input-textarea>
                        <x-form.input-error :messages="$errors->get('content')" />
                    </div>

                    <div class="col-span-6">
                        <x-form.input-label for="name" value="Publication" />
                        <x-form.input-label-help  help="Cette section  permet de choisir le mode de publication du post." />
{{--                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">--}}
{{--                            <!-- Published -->--}}
{{--                            <label class="border relative flex items-center gap-4 py-2 pl-4 rounded-md  border-gray-300 has-checked:border-vert has-checked:border cursor-pointer">--}}
{{--                                <input type="radio" id="published" aria-describedby="publishedDescription" class="sr-only peer" name="status" value="published" checked>--}}
{{--                                <svg class="w-[30px] h-[30px] text-gray-200 peer-checked:text-vert" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">--}}
{{--                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd"/>--}}
{{--                                </svg>--}}
{{--                                <div class="flex flex-col peer-checked:text-vert">--}}
{{--                                    <h3 class="font-medium" aria-hidden="true">Publier</h3>--}}
{{--                                    <small id="publishedDescription">Le post sera mis en ligne directement.</small>--}}
{{--                                </div>--}}
{{--                            </label>--}}
{{--                            <!-- Draft -->--}}
{{--                            <label class="relative flex items-center gap-4 py-2 pl-4 rounded-md border border-gray-300 has-checked:border-vert has-checked:border cursor-pointer">--}}
{{--                                <input type="radio" id="draft" aria-describedby="draftDescription" class="sr-only peer" name="status" value="draft">--}}
{{--                                <svg class="w-[30px] h-[30px] text-gray-200 peer-checked:text-vert" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">--}}
{{--                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd"/>--}}
{{--                                </svg>--}}
{{--                                <div class="flex flex-col peer-checked:text-vert">--}}
{{--                                    <h3 class="font-medium" aria-hidden="true">Draft</h3>--}}
{{--                                    <small id="draftDescription">Post non publié et modifiable.</small>--}}
{{--                                </div>--}}
{{--                            </label>--}}
{{--                            <!-- Test -->--}}
{{--                            <label class="relative flex items-center gap-4 py-2 pl-4 rounded-md border border-gray-300 has-checked:border-vert has-checked:border cursor-pointer">--}}
{{--                                <input type="radio" id="archive" aria-describedby="archiveDescription" class="sr-only peer" name="status" value="archive">--}}
{{--                                <svg class="w-[30px] h-[30px] text-gray-200 peer-checked:text-vert" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">--}}
{{--                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd"/>--}}
{{--                                </svg>--}}
{{--                                <div class="flex flex-col peer-checked:text-vert">--}}
{{--                                    <h3 class="font-medium" aria-hidden="true">Archiver</h3>--}}
{{--                                    <small id="archiveDescription">Le post sera archiver.</small>--}}
{{--                                </div>--}}
{{--                            </label>--}}
{{--                        </div>--}}

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            @foreach ($allstatus as $status)
                                <label class="border relative flex items-center gap-4 py-2 pl-4 rounded-md border-gray-300 has-checked:border-vert has-checked:border cursor-pointer">
                                    <input type="radio" id="{{ $status->value }}" aria-describedby="{{ $status->value }}Description"
                                           class="sr-only peer" name="status" value="{{ $status->value }}" {{ old('status', 'published') === $status->value ? 'checked' : '' }}>
                                    <svg class="w-[30px] h-[30px] text-gray-200 peer-checked:text-vert" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                         width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                              d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    <div class="flex flex-col peer-checked:text-vert">
                                        <h3 class="font-medium" aria-hidden="true">{{ $status->label() }}</h3>
                                        <small id="{{ $status->value }}Description">{{ $status->description() }}</small>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="mt-20 pt-14 flex items-center justify-center gap-x-6 border-t-1 border-vert">
                    <x-button.button-cancel>Annuler</x-button.button-cancel>
                    <x-button.button-submit>Enregistrer</x-button.button-submit>
                    <x-button.button-reset>Reset</x-button.button-reset>
                </div>
            </form>


        </div>

    </div>

</x-app-layout>

