<x-guest-app-layout>
    <div class="flex flex-col w-full py-12 px-4 sm:px-6 lg:px-8 justify-center items-center">
        <div class="w-full max-w-xl p-6 sm:p-8 bg-white dark:bg-gray-800 shadow-md rounded-lg">

            <h1 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-6">
                Kapcsolat
            </h1>

            @if (session('success'))
                <div
                    class="mb-4 rounded-md bg-green-100 dark:bg-green-800 p-4 text-sm font-medium text-green-700 dark:text-green-200">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Név</label>
                    <div class="mt-1">
                        <input type="text" name="name" id="name" required value="{{ old('name') }}"
                               class="block w-full rounded-md border-gray-300 ... dark:bg-gray-700 ...">
                        @error('name')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                    <div class="mt-1">
                        <input type="email" name="email" id="email" required value="{{ old('email') }}"
                               class="block w-full rounded-md border-gray-300 ... dark:bg-gray-700 ...">
                        @error('email')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="message"
                           class="block text-sm font-medium text-gray-700 dark:text-gray-300">Üzenet</label>
                    <div class="mt-1">
                        <textarea id="message" name="message" rows="4" required
                                  class="block w-full rounded-md border-gray-300 ... dark:bg-gray-700 ...">{{ old('message') }}</textarea>
                        @error('message')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <button type="submit"
                            class="w-full flex justify-center py-2 px-4 ... text-white bg-indigo-600 ...">
                        Üzenet elküldése
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-app-layout>
