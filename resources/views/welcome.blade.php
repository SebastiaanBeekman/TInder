<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Code om van te houden | Stinder</title>
</head>

<body>
    <div class="bg-white">
        <main>
            <!-- Hero section -->
            <div class="pt-8 overflow-hidden sm:pt-12 lg:relative lg:py-48">
                <div
                    class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl lg:grid lg:grid-cols-2 lg:gap-24">
                    <div>
                        <div>
                            <img class="h-11 w-auto" src="{{ asset('img/logo.png') }}" alt="Stinder">
                        </div>
                        <div class="mt-20">
                            <div>
                                <a href="#" class="inline-flex space-x-4">
                                    <span
                                        class="rounded bg-rose-50 px-2.5 py-1 text-xs font-semibold text-rose-500 tracking-wide uppercase">
                                        Lees meer op ons blog
                                    </span>
                                    <span class="inline-flex items-center text-sm font-medium text-rose-500 space-x-1">
                                        <span>Stinder is live!</span>
                                        <!-- Heroicon name: solid/chevron-right -->
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="mt-6 sm:max-w-xl">
                                <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">
                                    Code om van te houden
                                </h1>
                                <p class="mt-6 text-xl text-gray-500">
                                    Vind deze Valentijnsdag degene die het beste voor jou is. Op basis van dingen die
                                    echt belangrijk zijn. Goede code.
                                </p>
                            </div>
                            <a type="submit"
                                class="block w-full rounded-md border border-transparent px-5 py-3 mt-6 bg-rose-500 text-base font-medium text-white shadow hover:bg-rose-600 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2 sm:px-10 text-center"
                                href="{{ route('register') }}">Vind
                                je partner</a>
                            <div class="mt-2">
                                <a href="{{ route('login') }}" class="text-base font-medium text-rose-500">
                                    Ik heb al een account&nbsp&rarr;
                                </a>
                            </div>
                            <div class="mt-6">
                                <div class="inline-flex items-center divide-x divide-gray-300">
                                    <div class="flex-shrink-0 flex pr-5">
                                        <!-- Heroicon name: solid/star -->
                                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <!-- Heroicon name: solid/star -->
                                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <!-- Heroicon name: solid/star -->
                                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <!-- Heroicon name: solid/star -->
                                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <!-- Heroicon name: solid/star -->
                                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <div class="min-w-0 flex-1 pl-5 py-1 text-sm text-gray-500 sm:py-3"><span
                                            class="font-medium text-gray-900">Beoordeeld met 5 sterren</span> door meer
                                        dan <span class="font-medium text-rose-500">5 bestuursleden</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sm:mx-auto sm:max-w-3xl sm:px-6">
                    <div class="py-12 sm:relative sm:mt-12 sm:py-16 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                        <div class="hidden sm:block">
                            <div
                                class="absolute inset-y-0 left-1/2 w-screen bg-gray-50 rounded-l-3xl lg:left-80 lg:right-0 lg:w-full">
                            </div>
                            <svg class="absolute top-8 right-1/2 -mr-3 lg:m-0 lg:left-0" width="404" height="392"
                                fill="none" viewBox="0 0 404 392">
                                <defs>
                                    <pattern id="837c3e70-6c3a-44e6-8854-cc48c737b659" x="0" y="0" width="20"
                                        height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200"
                                            fill="currentColor" />
                                    </pattern>
                                </defs>
                                <rect width="404" height="392" fill="url(#837c3e70-6c3a-44e6-8854-cc48c737b659)" />
                            </svg>
                        </div>
                        <div
                            class="relative pl-4 -mr-40 sm:mx-auto sm:max-w-3xl sm:px-0 lg:max-w-none lg:h-full lg:pl-12 flex content-center">
                            <img class="w-full lg:h-full lg:w-auto lg:max-w-none" src="{{ asset('img/mockup.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial/stats section -->
            <div class="relative mt-20">
                <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start">
                    <div class="relative sm:py-16 lg:py-0">
                        <div aria-hidden="true" class="hidden sm:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-screen">
                            <div class="absolute inset-y-0 right-1/2 w-full bg-gray-50 rounded-r-3xl lg:right-72"></div>
                            <svg class="absolute top-8 left-1/2 -ml-3 lg:-right-8 lg:left-auto lg:top-12" width="404"
                                height="392" fill="none" viewBox="0 0 404 392">
                                <defs>
                                    <pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0" width="20"
                                        height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200"
                                            fill="currentColor" />
                                    </pattern>
                                </defs>
                                <rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)" />
                            </svg>
                        </div>
                        <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 lg:max-w-none lg:py-20">
                            <!-- Testimonial card-->
                            <div class="relative pt-64 pb-10 rounded-2xl shadow-xl overflow-hidden">
                                <img class="absolute inset-0 h-full w-full object-cover"
                                    src="{{ asset('img/cover.jpg') }}" alt="">
                                <div class="absolute inset-0 bg-rose-500 mix-blend-multiply"></div>
                                <div class="absolute inset-0 bg-gradient-to-t from-rose-600 via-rose-600 opacity-90">
                                </div>
                                <div class="relative px-8">
                                    <blockquote class="mt-8">
                                        <div class="relative text-lg font-medium text-white md:flex-grow">
                                            <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-rose-400"
                                                fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                                <path
                                                    d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                            </svg>
                                            <p class="relative">
                                                Dankzij Stinder heb ik mijn ideale partner voor tijdens hackathons
                                                gevonden. Dagelijks ontwikkelen wij nu samen nieuwe features en
                                                applicaties. Bedankt Stinder!
                                            </p>
                                        </div>

                                        <footer class="mt-4">
                                            <p class="text-base font-semibold text-rose-200">Sebastiaan Beekman, student
                                                Technische Informatica</p>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0">
                        <!-- Content area -->
                        <div class="pt-12 sm:pt-16 lg:pt-20">
                            <h2 class="text-3xl text-gray-900 font-extrabold tracking-tight sm:text-4xl">
                                Stinder doet het onmogelijke.
                            </h2>
                            <div class="mt-6 text-gray-500 space-y-6">
                                <p class="text-lg">
                                    We weten hoe moeilijk programmeurs het vinden om een partner te vinden. Als je pas
                                    om 12 uur opstaat en nooit buiten komt, dan is het moeilijk om iemand te ontmoeten
                                    waarmee je je project wil ontwikkelen. Of uberhaupt iemand.
                                </p>
                                <p class="text-lg">
                                    Stinder helpt je. Upload je mooiste code snippet en ga direct aan de slag met je
                                    zoektocht! Geen foto's van mannen die een vis hebben gevangen of ongevraagde dick
                                    pics, maar alleen waar het echt om draait. Bekijk de code van andere gebruikers en
                                    vindt de perfecte partner voor je project.
                                </p>
                                <p class="text-lg">
                                    Na Valentijnsdag zal STIR publiceren welke code het populairste was op Stinder. Dit
                                    is je extra kans om jezelf te laten zien aan het publiek.
                                </p>
                            </div>
                        </div>

                        <!-- Stats section -->
                        <div class="mt-10">
                            <!-- <dl class="grid grid-cols-2 gap-x-4 gap-y-8">
                                <div class="border-t-2 border-gray-100 pt-6">
                                    <dt class="text-base font-medium text-gray-500">Studenten</dt>
                                    <dd class="text-3xl font-extrabold tracking-tight text-gray-900">987</dd>
                                </div>
                            </dl> -->
                            <div class="mt-10">
                                <a href="#" class="text-base font-medium text-rose-500">
                                    Lees meer over dit experiment&nbsp&rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA section -->
            <div class="relative mt-24 sm:mt-32 sm:py-16">
                <div aria-hidden="true" class="hidden sm:block">
                    <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50 rounded-r-3xl"></div>
                    <svg class="absolute top-8 left-1/2 -ml-3" width="404" height="392" fill="none"
                        viewBox="0 0 404 392">
                        <defs>
                            <pattern id="8228f071-bcee-4ec8-905a-2a059a2cc4fb" x="0" y="0" width="20" height="20"
                                patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="392" fill="url(#8228f071-bcee-4ec8-905a-2a059a2cc4fb)" />
                    </svg>
                </div>
                <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                    <div
                        class="relative rounded-2xl px-6 py-10 bg-rose-500 overflow-hidden shadow-xl sm:px-12 sm:py-20">
                        <div aria-hidden="true" class="absolute inset-0 -mt-72 sm:-mt-32 md:mt-0">
                            <svg class="absolute inset-0 h-full w-full" preserveAspectRatio="xMidYMid slice"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1463 360">
                                <path class="text-rose-400 text-opacity-40" fill="currentColor"
                                    d="M-82.673 72l1761.849 472.086-134.327 501.315-1761.85-472.086z" />
                                <path class="text-rose-600 text-opacity-40" fill="currentColor"
                                    d="M-217.088 544.086L1544.761 72l134.327 501.316-1761.849 472.086z" />
                            </svg>
                        </div>
                        <div class="relative">
                            <div class="sm:text-center">
                                <h2 class="text-3xl font-extrabold text-white tracking-tight sm:text-4xl">
                                    Start direct met je zoektocht.
                                </h2>
                                <p class="mt-6 mx-auto max-w-2xl text-lg text-rose-100">
                                    Laat ons je helpen om degene te vinden die het best bij je past. Ook als je nog niet
                                    weet dat je op zoek bent. Onze wereldklasse AI kan je helpen je zoektocht tot een
                                    succes te maken.
                                </p>
                            </div>
                            <div class="mt-12 sm:mx-auto sm:max-w-lg sm:flex">
                                <a type="submit"
                                    class="block w-full rounded-md border border-transparent px-5 py-3 bg-white text-base font-medium text-black shadow hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-rose-500 sm:px-10 text-center"
                                    href="{{ route('register') }}">
                                    Vind je partner
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer section -->
        <footer class="mt-24 bg-gray-900 sm:mt-12">
            <div class="mx-auto max-w-md py-12 px-4 overflow-hidden sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                <p class="mt-8 text-center text-base text-gray-400">
                    &copy; 2022 Stinder is ontwikkeld door STIR. STIR is niet verantwoordelijk voor het succes dat je
                    behaalt op Stinder.
                </p>
            </div>
        </footer>
    </div>
</body>

</html>
