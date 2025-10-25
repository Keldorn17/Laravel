<x-guest-layout>
    <h1 class="text-gray-900 dark:text-white text-2xl mb-3 text-center">Elfelejtett jelszó</h1>

    <div class="mb-4 text-sm text-gray-600 dark:text-gray-500">
        Elfelejtette a jelszavát? Semmi gond. Csak adja meg az e-mail címét, és küldünk egy e-mailt egy jelszó-visszaállító linkkel, amellyel újat választhat.
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div>
            <x-input-label for="email" value="E-mail cím" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                Jelszó-visszaállító link küldése
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
