<x-layout.app >
    <x-layout.navbar-default >

        <main class="pt-32 pb-20 sm:pt-36 lg:pb-0">
            <div class="mx-auto max-w-6xl">
                <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                    <div class="sm:text-center  mx-auto px-2 sm:px-6 sm:w-full lg:col-span-6 lg:text-left lg:flex lg:items-start">
                        <div x-data="{ show: false }" class="w-full ">
                            <a href="{{url('https://cv.adenanteng.com')}}" class="inline-flex items-center text-white bg-gray-700 rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-100">
                                <span class="px-3 py-0.5 text-white text-xs font-medium leading-5 uppercase tracking-wide bg-indigo-500 rounded-full">{{__('a.new update')}}</span>
                                <span class="ml-4 text-sm">{{__('a.visit my resume page')}}</span>
                                <span data-width="15" class="iconify ml-2 " data-icon="bi:chevron-right"></span>
                            </a>

                            <div x-data="{ tooltip: 'Click for copy!', copied: 'Copied!' }" class="grid gap-2 mt-5 mb-10">

                                @foreach($ajj as $aj)
                                    @if ( $loop->index == 0 )
                                        <div x-data="{ quote: 'Not yet hehe' }" class="py-5 bg-white text-gray-700 px-5 py-3 grid items-end rounded-lg transform duration-500 hover:scale-110 hover:bg-gray-200 dark:hover:bg-gray-700">
                                            <button type="button"
{{--                                                    @click="$clipboard(quote)" --}}
                                                x-tooltip.cursor.initial.on.click="copied" class="">
                                                <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-gray-900 sm:mt-5 sm:leading-none lg:mt-6 lg:text-5xl xl:text-6xl">
                                                    <span class="text-transform: capitalize">{{ $aj->quote }}</span>
                {{--                                    <span class="text-indigo-400 md:block">{{__('a.wel t2')}}</span>--}}
                                                </h1>
                                                <p class="mt-3 text-base text-gray-500 sm:text-xl lg:text-lg xl:text-xl text-transform: capitalize">
                {{--                                    {{__('a.wel desc')}}--}}
                                                    - {{ $aj->name }}
                                                </p>
                                            </button>
                                        </div>
                                    @else
                                        <a
                                            x-tooltip.cursor.initial.on.click="copied"
{{--                                            x-tooltip.cursor.placement.bottom="tooltip"--}}
                                            x-show="show"
                                            x-transition:enter="transition ease-out duration-500"
                                            x-transition:enter-start="opacity-0 scale-100"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-500"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-100"
                                        >

                                            <x-layout.box>
                                                <x-slot name="title">{{ $aj->quote }}</x-slot>
                                                <x-slot name="desc">- {{ $aj->name }}</x-slot>
                                            </x-layout.box>
                                        </a>
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
                                <p class="text-xs leading-5 text-gray-500">Kamu bisa menulis quotes disini tanpa harus masuk.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </x-layout.navbar-default>
</x-layout.app>
