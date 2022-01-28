<x-guest-layout>
    <div class="min-h-full flex">
        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
                    <a href="/">
                        <x-application-logo class="h-12 w-auto" />
                    </a>
                    <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                        Maak een nieuw account aan
                    </h2>
                    <p class="mt-2 text-sm text-gray-600">
                        Of
                        <a href="{{ route('register') }}" class="font-medium text-rose-500 hover:text-rose-600">
                            log terug in
                        </a>
                    </p>
                </div>

                <div class="mt-8">
                    <div class="mt-6">
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Student Number -->
                            <div class="mt-4">
                                <x-label for="student_number" :value="__('Studentnummer')" />

                                <x-input id="student_number"
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-rose-500 focus:border-rose-500 sm:text-sm"
                                    type="text" name="student_number" :value="old('student_number')" required />
                            </div>

                            <!-- Email -->
                            <div class="mt-4">
                                <x-label for="email" :value="__('Email')" />

                                <x-input id="email"
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-rose-500 focus:border-rose-500 sm:text-sm"
                                    type="text" name="email" :value="old('email')" required disabled />
                            </div>

                            <!-- First Name -->
                            <div class="mt-4">
                                <x-label for="first_name" :value="__('Voornaam')" />

                                <x-input id="first_name"
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-rose-500 focus:border-rose-500 sm:text-sm"
                                    type="text" name="first_name" :value="old('first_name')" required autofocus />
                            </div>

                            <!-- Last Name -->
                            <div class="mt-4">
                                <x-label for="last_name" :value="__('Achternaam')" />

                                <x-input id="last_name"
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-rose-500 focus:border-rose-500 sm:text-sm"
                                    type="text" name="last_name" :value="old('last_name')" required autofocus />
                            </div>

                            <!-- Grade -->
                            <div class="mt-4">
                                <x-label for="grade" :value="__('Leerjaar')" />

                                <x-input id="grade"
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-rose-500 focus:border-rose-500 sm:text-sm"
                                    type="text" name="grade" :value="old('grade')" required />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-label for="password" :value="__('Wachtwoord')" />

                                <x-input id="password"
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-rose-500 focus:border-rose-500 sm:text-sm"
                                    type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-label for="password_confirmation" :value="__('Bevestig wachtwoord')" />

                                <x-input id="password_confirmation"
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-rose-500 focus:border-rose-500 sm:text-sm"
                                    type="password" name="password_confirmation" required />
                            </div>

                            <div class="mt-4 text-sm">
                                <a href="{{ route('login') }}"
                                        class="font-medium text-rose-500 hover:text-rose-600">
                                        Ik heb al een account&nbsp&rarr;
                                    </a>
                            </div>

                            <button type="submit"
                                class="w-full flex justify-center py-2 px-4 mt-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-rose-500 hover:bg-rose-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500">
                                Maak een account aan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:block relative w-0 flex-1">
            <img class="absolute inset-0 h-full w-full object-cover"
                src="https://images.unsplash.com/photo-1573165067541-4cd6d9837902?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80"
                alt="">
        </div>
    </div>
</x-guest-layout>

<script src="{{ asset('js/email.js') }}"></script>
