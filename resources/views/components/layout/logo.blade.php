<div x-data="{ open: false }">
    <button @click="open = !open" @click.away="open = false" class="rounded-md p-2 inline-flex text-indigo-600 hover:text-indigo-700 items-center hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" >
        <span class="iconify " data-icon="fluent:list-20-regular" data-flip="horizontal" data-width="30"></span>
    </button>

    <div x-show="open" class="absolute top-0 w-56 py-2 mt-8 transition transform origin-top-right ">
        <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
            <div class="px-2 pt-2 pb-3 space-y-1">

                <div class="text-white ">
                    <a @click="darkMode = !darkMode" x-show="darkMode === true" class="flex items-center px-3 py-2 rounded-md hover:underline text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                        <span class="iconify mr-2" data-icon="bi:sun" data-width="20"></span>{{__('a.light')}}
                    </a>

                    <a @click="darkMode = !darkMode" x-show="darkMode === false" class="flex items-center px-3 py-2 rounded-md hover:underline text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                        <span class="iconify mr-2" data-icon="bi:moon-stars" data-width="20"></span>{{__('a.dark')}}
                    </a>
                </div>

                <div class="text-white ">
                    @if ( App::getLocale() === 'en' )

                        <a class="flex items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 hover:underline" rel="alternate" hreflang="{{ 'id' }}" href="{{ LaravelLocalization::getLocalizedURL('id', null, [], true) }}" >
                            <span class="iconify mr-2" data-icon="emojione-monotone:flag-for-indonesia" data-width="20"></span>Bahasa Indonesia
                        </a>
                    @elseif ( App::getLocale() === 'id' )
                        <a class="flex items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 hover:underline" rel="alternate" hreflang="{{ 'en' }}" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}" >
                            <span class="iconify mr-2" data-icon="emojione-monotone:flag-for-us-outlying-islands" data-width="20"></span>English
                        </a>
                    @endif
                </div>

            </div>

        </div>
    </div>
</div>
