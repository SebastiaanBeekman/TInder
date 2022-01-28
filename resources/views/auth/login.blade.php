<x-guest-layout>
    <div class="min-h-full flex">
        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
                    <a href="/">
                        <x-application-logo class="h-12 w-auto" />
                    </a>
                    <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                        Log terug in
                    </h2>
                    <p class="mt-2 text-sm text-gray-600">
                        Of
                        <a href="{{ route('register') }}" class="font-medium text-rose-500 hover:text-rose-600">
                            maak een nieuw account aan
                        </a>
                    </p>
                </div>

                <div class="mt-8">
                    <div class="mt-6">
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form action="{{ route('login') }}" method="POST" class="space-y-6">
                            @csrf
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">
                                    E-mailadres
                                </label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" autocomplete="email" required
                                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-rose-500 focus:border-rose-500 sm:text-sm">
                                </div>
                                <small class="text-gray-500">Let op: dit is je studentenmail</small>
                            </div>

                            <div class="space-y-1">
                                <label for="password" class="block text-sm font-medium text-gray-700">
                                    Wachtwoord
                                </label>
                                <div class="mt-1">
                                    <input id="password" name="password" type="password" autocomplete="current-password"
                                        required
                                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-rose-500 focus:border-rose-500 sm:text-sm">
                                </div>
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="text-sm">
                                    <a href="{{ route('password.request') }}"
                                        class="font-medium text-rose-500 hover:text-rose-600">
                                        Ik ben mijn wachtwoord vergeten&nbsp&rarr;
                                    </a>
                                </div>
                            </div>

                            <div>
                                <button type="submit"
                                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-rose-500 hover:bg-rose-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500">
                                    Log in
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:block relative w-0 flex-1">
            <img class="absolute inset-0 h-full w-full object-cover"
                src="https://images.unsplash.com/photo-1622675363311-3e1904dc1885?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                alt="">
        </div>
    </div>
</x-guest-layout>
