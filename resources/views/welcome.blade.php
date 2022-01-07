<x-layout.app >
    <x-layout.navbar-default :nav="$nav" :btn="$btn" >

        <main class="pt-32 pb-20 sm:pt-36 lg:pb-0">
            <div class="mx-auto max-w-6xl">
                <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                    <div class="sm:text-center  mx-auto px-2 sm:px-6 sm:w-full lg:col-span-6 lg:text-left lg:flex lg:items-start">
                        <div x-data="{ show: false }" class="w-full ">
                            <a href="{{url('https://cv.adenanteng.com')}}" class="inline-flex items-center text-white bg-gray-600 rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-100">
                                <span class="px-3 py-0.5 text-white text-xs font-medium leading-5 uppercase tracking-wide bg-indigo-500 rounded-full">{{__('a.new update')}}</span>
                                <span class="ml-4 text-sm">{{__('a.visit my resume page')}}</span>
                                <span data-width="15" class="iconify ml-2 " data-icon="bi:chevron-right"></span>
                            </a>

                            <div x-data="{ tooltip: 'Click for copy!', copied: 'Copied!' }" class="grid gap-2 mt-5 mb-10 group">

                                @foreach($ajj as $aj)
                                    @if ( $loop->index == 0 )
                                        <div x-data="{ quote: 'Not yet hehe' }" class="group-kamu py-5 bg-white text-gray-600 px-5 py-3 grid items-end rounded-lg transform duration-500 md:hover:scale-110 hover:!opacity-100 ">
                                            <a type="button"
{{--                                               x-tooltip.cursor.initial.on.click="copied"--}}
                                            >
                                                <h1 class="mt-4 text-2xl tracking-tight font-extrabold text-gray-900 sm:mt-5 sm:leading-none lg:mt-6 lg:text-3xl">
                                                    <span class="text-transform: capitalize">{{ $aj->quote }}</span>
                {{--                                    <span class="text-indigo-400 md:block">{{__('a.wel t2')}}</span>--}}
                                                </h1>
                                                <p class="mt-3 text-base text-gray-600 sm:text-xl lg:text-lg xl:text-xl text-transform: capitalize italic">
                                                    - {{ $aj->name }}
                                                </p>
                                            </a>
                                            <div class="absolute -top-16 right-0 hidden group-kamu-hover:block ">
                                                <div class="inline-flex gap-2 py-5 pl-10 pr-0">
                                                    <a type="button" class="bg-indigo-100 hover:bg-indigo-200 text-indigo-500 hover:text-indigo-700 rounded-lg">
                                                        <span data-width="32" class="iconify p-1 " data-icon="fluent:copy-20-regular"></span>
                                                    </a>
                                                    <a type="button" class="bg-red-100 hover:bg-red-200 text-red-500 hover:text-red-700 rounded-lg">
                                                        <span data-width="32" class="iconify p-1 " data-icon="fluent:delete-20-regular"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="group-kamu space-y-1 bg-white grid items-end rounded-lg md:hover:scale-110 group-hover:opacity-25 hover:!opacity-100 "
{{--                                            x-tooltip.cursor.initial.on.click="copied"--}}
{{--                                            x-tooltip.cursor.placement.bottom="tooltip"--}}
                                            x-show="show"
                                            x-transition:enter="transition ease-out duration-500"
                                            x-transition:enter-start="opacity-0 scale-100"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-500"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-100"
                                        >

                                            <a type="button" class=" px-5 py-3 rounded-lg">
                                                <h5 class="text-gray-900 text-transform: capitalize">{{ $aj->quote }}</h5>
                                                <p class="text-gray-600 text-sm text-transform: capitalize italic" > - {{ $aj->name }}</p>
                                            </a>
                                            <div class="absolute -top-16 right-0 hidden group-kamu-hover:block ">
                                                <div class="inline-flex gap-2 py-5 pl-10 pr-0">
                                                    <a type="button" class="bg-indigo-100 hover:bg-indigo-200 text-indigo-500 hover:text-indigo-700 rounded-lg">
                                                        <span data-width="32" class="iconify p-1 " data-icon="fluent:copy-20-regular"></span>
                                                    </a>
                                                    <a type="button" class="bg-red-100 hover:bg-red-200 text-red-500 hover:text-red-700 rounded-lg">
                                                        <span data-width="32" class="iconify p-1 " data-icon="fluent:delete-20-regular"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                <button @click="show = !show" class="ml-2 group inline-flex items-center text-indigo-600 hover:text-indigo-700 transition duration-300">
                                    <span class="text-sm group-hover:underline">{{__('Lihat yang lain')}}</span>
                                    <span data-width="15" class="iconify ml-2 group-hover:ml-10 " data-icon="bi:chevron-right"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-16 sm:mt-24 lg:mt-0 lg:col-span-6 px-2 sm:px-6 flex justify-center lg:justify-end">
                        <div class="bg-white static lg:fixed max-w-md sm:w-full rounded-lg sm:overflow-hidden">
                            <div class="px-4 pb-8 sm:px-10">
                                <x-welcome.quotes_form />
                            </div>
                            <div class="px-4 py-6 bg-gray-50 border-t border-gray-200 sm:px-10">
                                <p class="text-xs leading-5 text-gray-600">{{ __('a.quote note') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </x-layout.navbar-default>
</x-layout.app>
