<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800">
            {{ 'Gestion des posts' }}
        </h2>
    </x-slot>

    <div class="overflow-hidden shadow-md p-8">

        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-gray-600">Posts</h1>
                <p class="mt-2 text-xs text-gray-400">A list of all the users in your account including their name, title, email and role.</p>
            </div>
            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <button type="button" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Nouveau</button>
            </div>
        </div>
        <div class="-mx-4 mt-8 sm:-mx-0">

            <table class="min-w-full divide-y divide-gray-300">
                <thead>
                <tr>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Post</th>
                    <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Créé le</th>
                    <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">Statut</th>
                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">

                @foreach ($posts as $post)

                    <tr>
                        <td class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-0">
                            {{ $post->id }} - {{ $post->title }}
                            <dl class="font-normal lg:hidden">
                                <dt class="sr-only">Title</dt>
                                <dd class="mt-1 truncate text-gray-700">{{ $post->created_at->format('d-m-Y à h:i') }}</dd>
                                <dt class="sr-only sm:hidden">Statut</dt>
                                <dd class="mt-1 truncate text-gray-500 sm:hidden">
                                    <span class="inline-flex items-center rounded-md bg-green-100 px-2 py-0.5 text-xs font-medium text-green-700">Online</span>
                                </dd>
                            </dl>
                        </td>
                        <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">{{ $post->created_at->format('d-m-Y à h:i') }}</td>
                        <td class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">
                            <span class="inline-flex items-center rounded-md bg-green-100 px-2 py-0.5 text-xs font-medium text-green-700">Online</span>
                        </td>
                        <td class="py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                            <a href="{{route('show', ['post' => $post])}}" class="text-gray-400 hover:text-indigo-900">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                    <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 0 0-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 0 0 .75-.75v-4a.75.75 0 0 1 1.5 0v4A2.25 2.25 0 0 1 12.75 17h-8.5A2.25 2.25 0 0 1 2 14.75v-8.5A2.25 2.25 0 0 1 4.25 4h5a.75.75 0 0 1 0 1.5h-5Z" clip-rule="evenodd" />
                                    <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 0 0 1.06.053L16.5 4.44v2.81a.75.75 0 0 0 1.5 0v-4.5a.75.75 0 0 0-.75-.75h-4.5a.75.75 0 0 0 0 1.5h2.553l-9.056 8.194a.75.75 0 0 0-.053 1.06Z" clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">, Lindsay Walton</span>
                            </a>
                        </td>
                    </tr>

                @endforeach

                <!-- More people... -->
                </tbody>
            </table>

            <div class="mt-20">{{ $posts->links() }}</div>

        </div>

    </div>
</x-app-layout>
