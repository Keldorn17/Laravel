<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Képzések') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Név
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Felvehető
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Minimum
                                </th>
                                @if ($user->isAdmin())
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        Szerkesztés
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        Törlés
                                    </th>
                                @endif
                            </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            @forelse ($kepzesek as $kepzes)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        {{ $kepzes->nev }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        {{ $kepzes->felveheto }}
                                    </td>
                                    <td class="px-6 py-4 text-sm max-w-md truncate">
                                        {{ $kepzes->minimum }}
                                    </td>
                                    @if ($user->isAdmin())
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="/dashboard/edit-kepzes/{{ $kepzes->id }}" class="text-blue-500">Szerkesztés</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <form action="/delete-kepzes/{{ $kepzes->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-red-500">Törlés</button>
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-4 text-center text-sm text-gray-500">
                                        Nincsenek beérkezett üzenetek.
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        @if ($user->isAdmin())
                            <form action="/createKepzes" method="POST"
                                  class="mt-8 bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md border border-gray-200 dark:border-gray-600">
                                @csrf
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Új képzés
                                    létrehozása</h3>

                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                    <div>
                                        <label for="nev"
                                               class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Képzés
                                            neve</label>
                                        <input type="text" id="nev" name="nev"
                                               placeholder="Pl. Informatika"
                                               class="w-full rounded-md bg-white dark:bg-gray-700  border-gray-300 dark:border-gray-700 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition"/>
                                    </div>

                                    <div>
                                        <label for="felveheto"
                                               class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Felvehető</label>
                                        <input type="number" id="felveheto" name="felveheto"
                                               placeholder="Max létszám"
                                               class="w-full rounded-md bg-white dark:bg-gray-700  border-gray-300 dark:border-gray-700 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition [color-scheme:light] dark:[color-scheme:dark]"/>
                                    </div>

                                    <div>
                                        <label for="minimum"
                                               class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Minimum</label>
                                        <input type="number" id="minimum" name="minimum"
                                               placeholder="Minimum létszám"
                                               class="w-full rounded-md bg-white dark:bg-gray-700  border-gray-300 dark:border-gray-700 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition [color-scheme:light] dark:[color-scheme:dark]"/>
                                    </div>
                                </div>

                                <div class="mt-6 flex justify-end">
                                    <button type="submit"
                                            class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2.5 rounded-md shadow transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M12 4v16m8-8H4"/>
                                        </svg>
                                        Képzés létrehozása
                                    </button>
                                </div>
                            </form>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
