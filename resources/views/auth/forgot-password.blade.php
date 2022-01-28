<x-guest-layout>
    <div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <a href="/">
                <x-application-logo class="mx-auto h-12 w-auto" />
            </a>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Herstel mijn wachtwoord
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Of
                <a href="{{ route('login') }}" class="font-medium text-rose-500 hover:text-rose-600">
                    log direct in
                </a>
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form class="space-y-6" action="{{ route('password.email') }}" method="POST">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            E-mailadres
                        </label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-rose-500 focus:border-rose-500 sm:text-sm">
                        </div>
                    </div>

                    @csrf

                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-rose-600 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500">
                            Herstel mijn wachtwoord
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
