<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Képzések') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <table class="table-auto w-full border-collapse border border-gray-300 dark:border-gray-800">
                    <thead>
                    <tr class="bg-gray-200 dark:bg-gray-700">
                        <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Név</th>
                        <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Felvehető</th>
                        <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Minimum</th>
                        @if ($user->isAdmin())
                            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Edit</th>
                            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Delete</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($kepzesek as $kepzes)
                        <tr>
                            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $kepzes['nev'] }}</td>
                            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $kepzes['felveheto'] }}</td>
                            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $kepzes['minimum'] }}</td>
                            @if ($user->isAdmin())
                                <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">
                                    <a href="/edit-kepzes/{{ $kepzes->id }}" class="text-blue-500">Edit</a>
                                </td>
                                <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">
                                    <form action="/delete-kepzes/{{ $kepzes->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-500">Delete</button>
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                @if ($user->isAdmin())
                    <form action="/createKepzes" method="POST" class="mt-8 bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md border border-gray-200 dark:border-gray-600">
                        @csrf
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Új képzés létrehozása</h3>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <label for="nev" class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Képzés neve</label>
                                <input type="text" id="nev" name="nev"
                                       placeholder="Pl. Informatika"
                                       class="w-full rounded-md bg-white dark:bg-gray-700  border-gray-300 dark:border-gray-700 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition" />
                            </div>

                            <div>
                                <label for="felveheto" class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Felvehető</label>
                                <input type="number" id="felveheto" name="felveheto"
                                       placeholder="Max létszám"
                                       class="w-full rounded-md bg-white dark:bg-gray-700  border-gray-300 dark:border-gray-700 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition" />
                            </div>

                            <div>
                                <label for="minimum" class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Minimum</label>
                                <input type="number" id="minimum" name="minimum"
                                       placeholder="Minimum létszám"
                                       class="w-full rounded-md bg-white dark:bg-gray-700  border-gray-300 dark:border-gray-700 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition" />
                            </div>
                        </div>

                        <div class="mt-6 flex justify-end">
                            <button type="submit"
                                    class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2.5 rounded-md shadow transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 4v16m8-8H4" />
                                </svg>
                                Képzés létrehozása
                            </button>
                        </div>
                    </form>

                @endif
            </div>
        </div>
    </div>
</x-app-layout>
