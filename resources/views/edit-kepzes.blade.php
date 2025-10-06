<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Képzés szerkesztése') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- Reduced width to half (max-w-xl) and centered -->
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <!-- Added internal padding (p-6) and a bit of spacing (mt-6) -->
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg p-6 border border-gray-200 mt-6">
                <h1 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11 17h2m-1-4v4m4 4H8a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v8a2 2 0 01-2 2z" />
                    </svg>
                    Képzés szerkesztése
                </h1>

                <form action="/edit-kepzes/{{ $kepzes->id }}" method="POST" class="space-y-5 mx-2">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="nev" class="block text-sm font-medium text-gray-700 mb-1">Képzés neve</label>
                        <input type="text" id="nev" name="nev" value="{{ $kepzes->nev }}"
                               class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition" />
                    </div>

                    <div>
                        <label for="felveheto" class="block text-sm font-medium text-gray-700 mb-1">Felvehető</label>
                        <input type="number" id="felveheto" name="felveheto" value="{{ $kepzes->felveheto }}"
                               class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition" />
                    </div>

                    <div>
                        <label for="minimum" class="block text-sm font-medium text-gray-700 mb-1">Minimum</label>
                        <input type="number" id="minimum" name="minimum" value="{{ $kepzes->minimum }}"
                               class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition" />
                    </div>

                    <div class="flex justify-end items-center space-x-3 pt-4">
                        <a href="{{ route('kepzesek') }}"
                           class="inline-flex items-center bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium px-4 py-2 rounded-md transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 19l-7-7 7-7" />
                            </svg>
                            Vissza
                        </a>

                        <button type="submit"
                                class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2.5 rounded-md shadow transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 13l4 4L19 7" />
                            </svg>
                            Mentés
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
