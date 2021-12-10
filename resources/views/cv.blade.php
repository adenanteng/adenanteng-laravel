<x-layout.app >
    <x-layout.navbar-cv >
        <main class="pt-32 pb-20 sm:pt-36 lg:pb-0">
            <div class="mx-auto max-w-6xl">
                <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                    <div class="lg:col-span-6 px-5 sm:px-10 lg:px-5">
                        <div class="static lg:fixed sm:text-center md:max-w-xl md:mx-auto lg:text-left lg:flex lg:items-start">

                            <div class="">
                                <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:leading-none lg:mt-6 lg:text-5xl xl:text-6xl">
                                    <span class="md:block">Aden </span>
                                    <span class="text-indigo-400 md:block">Anteng</span>
                                </h1>
                                <p class="mt-3 text-base text-gray-300 sm:mt-5 lg:max-w-md">
                                    {{ __('cv.about_p1') }}
                                </p>
                                <p class="mt-3 text-base text-gray-300 sm:mt-5 lg:max-w-md">
                                    {{ __('cv.about_p2') }}
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="mt-16 sm:mt-24 px-5 sm:px-10 lg:px-5 lg:mt-0 lg:col-span-6 gap-10 ">

                        <x-cv.project />
                        <x-cv.skills />
{{--                        <x-cv.resume />--}}
                        <x-cv.contact />
                    </div>
                </div>
            </div>
        </main>

    </x-layout.navbar-cv>
</x-layout.app>
