<div class="relative bg-gray-100 min-h-screen overflow-hidden">
    <div x-data="{ open: false }" class="fixed w-screen z-20 bg-gray-100 pt-3 pb-1 sm:pt-6 sm:pb-3">
        <nav class="relative max-w-6xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
            <div class="flex items-center flex-1">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <x-layout.logo />
                    <div class=" flex items-center md:hidden" >
                        <button type="button" @click="open = !open" class="rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                            <span class="iconify" data-width="30" data-icon="fluent:list-20-regular"></span>
                        </button>
                    </div>
                </div>
                <div class="hidden space-x-10 md:flex md:ml-10">
                    @foreach($nav as $item)
                        <a href="{{ url($item['url']) }}" class="px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:underline">{{ $item['title'] }}</a>
                    @endforeach
                </div>
            </div>
            <div class="hidden md:flex">
                <x-layout.lang />
{{--                        <form method="POST" action="{{ route('logout') }}">--}}
{{--                            @csrf--}}
{{--                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700">--}}
{{--                                {{__('a.logout')}}--}}
{{--                            </button>--}}
{{--                        </form>--}}

                @if(Route::is('cv') )
                    <a download type="button" href="{{ asset('pdf/cv-aden-anteng.pdf') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700">
                        {{ __('cv.download') }}
                    </a>

                @else
                    @foreach($btn as $item)
                        <a type="button" href="{{ route($item['url']) }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700">
                            {{ __($item['title']) }}
                        </a>
                    @endforeach
                @endif


            </div>
        </nav>

        <nav x-show="open" class=" absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="px-5 pt-4 flex items-center justify-between">
                    <div>
    {{--                    <span class="iconify text-white" data-icon="healthicons:animal-chicken-outline" data-flip="horizontal" data-width="40"></span>--}}
                        <x-layout.lang />
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
{{--                    <a href="{{ url('https://cv.adenanteng.com') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">{{__('a.resume/CV')}}</a>--}}

                </div>

{{--                @if(Route::is('cv') )--}}
{{--                    <a download type="button" href="{{ asset('pdf/cv-aden-anteng.pdf') }}" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100">--}}
{{--                        {{ __('cv.download') }}--}}
{{--                    </a>--}}

{{--                @else--}}
{{--                    @foreach($data as $item)--}}
{{--                        <a type="button" href="{{ route($item['btn_url']) }}" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100">--}}
{{--                            {{ __($item['btn_title']) }}--}}
{{--                        </a>--}}
{{--                    @endforeach--}}
{{--                @endif--}}
            </div>
        </nav>
    </div>

    <div class="mb-24">
    {{ $slot }}
    </div>

    <footer class="absolute inset-x-0 bottom-0 bg-white ">
        <div class="max-w-6xl mx-auto flex items-center justify-end py-2">
           <div class="">
               <p class="text-gray-600 text-sm">Made with <span class="text-red-800 animate-pulse">❤</span> in IT Room</p>
           </div>
        </div>
    </footer>

{{--    <div x-data="{ start: localStorage.getItem('starter') === 'true'} "--}}
{{--         x-init="$watch('start', val => localStorage.setItem('starter', val))"--}}
{{--         x-bind:class="{ 'starter': start }"--}}
{{--    >--}}
{{--        <div x-show="start === false">--}}
{{--            @include('starter')--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
