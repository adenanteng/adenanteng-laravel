<x-layout.app >
    <x-layout.navbar-default >

        <main class="pt-32 pb-20 sm:pt-36 lg:pb-0">
            <div class="mx-auto max-w-6xl">
                <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                    <div class="px-4 sm:px-6 sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left lg:flex lg:items-center">
                        <div>
                            <a href="{{url('https://cv.adenanteng.com')}}" class="inline-flex items-center text-white bg-gray-900 rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-200">
                                <span class="px-3 py-0.5 text-white text-xs font-medium leading-5 uppercase tracking-wide bg-indigo-500 rounded-full">{{__('a.new update')}}</span>
                                <span class="ml-4 text-sm">{{__('a.visit my resume page')}}</span>
                                <span data-width="15" class="iconify ml-2 " data-icon="bi:chevron-right"></span>
                            </a>
                            <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:leading-none lg:mt-6 lg:text-5xl xl:text-6xl">
                                <span class="md:block">{{ __('a.wel t1') }}</span>
                                <span class="text-indigo-400 md:block">{{__('a.wel t2')}}</span>
                            </h1>
                            <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                {{__('a.wel desc')}}
                            </p>

                        </div>
                    </div>
                    <div class="mt-16 sm:mt-24 lg:mt-0 lg:col-span-6 px-2 sm:px-6 flex justify-center lg:justify-end">
                        <div class="bg-white sm:max-w-md sm:w-full rounded-lg sm:overflow-hidden">
                            <div class="px-4 py-8 sm:px-10">
                                <x-auth.login_form />
                            </div>
                            <div class="px-4 py-6 bg-gray-50 border-t-2 border-gray-200 sm:px-10">
                                <p class="text-xs leading-5 text-gray-500">By signing up, you agree to our <a href="#" class="font-medium text-gray-900 hover:underline">Terms</a>, <a href="#" class="font-medium text-gray-900 hover:underline">Data Policy</a> and <a href="#" class="font-medium text-gray-900 hover:underline">Cookies Policy</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </x-layout.navbar-default>
</x-layout.app>
