<div class="relative bg-gray-100 min-h-screen overflow-hidden">
    <div x-data="{ open: false }" class="fixed w-screen z-30 bg-gray-100 pt-3 pb-1 sm:pt-6 sm:pb-3">
        <nav class="relative max-w-6xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
            <div class="flex items-center flex-1">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <x-layout.logo />
                    <div class=" flex items-center md:hidden" >
                        <button type="button" @click="open = !open" class="bg-gray-800 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-700 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white" aria-expanded="false">
                            <span class="iconify" data-width="30" data-icon="fluent:list-20-regular"></span>
                        </button>
                    </div>
                </div>
                <div class="hidden space-x-10 md:flex md:ml-10">
{{--                    <a href="#" class="font-medium text-white hover:text-gray-300">Link 1</a>--}}

                </div>
            </div>
            <div class="hidden md:flex">
                <a download type="button" href="{{ asset('pdf/cv-aden-anteng.pdf') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700">
                    {{ __('cv.download') }}
                </a>
            </div>
        </nav>

        <div x-show="open" class=" absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="px-5 pt-4 flex items-center justify-between">
                    <div>
{{--                        <span class="iconify text-white" data-icon="healthicons:animal-chicken-outline" data-flip="horizontal" data-width="40"></span>--}}
                    </div>
                    <div class="-mr-2">
                        <button type="button" @click="open = !open" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="px-2 pt-2 pb-3 space-y-1">
{{--                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Link 1</a>--}}

                </div>

                <a download type="button" href="{{ asset('pdf/cv-aden-anteng.pdf') }}" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100">
                    {{ __('cv.download') }}
                </a>


            </div>
        </div>
    </div>

    {{ $slot }}

</div>
