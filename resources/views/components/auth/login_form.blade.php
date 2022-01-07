{{--<div>--}}
{{--    <div >--}}
{{--        <p class="text-sm font-medium text-gray-700">--}}
{{--            Sign in with--}}
{{--        </p>--}}

{{--        <div class="mt-5 grid grid-cols-3 gap-3">--}}
{{--            <div>--}}
{{--                <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">--}}
{{--                    <span data-width="20" class="iconify" data-icon="simple-icons:google"></span>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">--}}
{{--                    <span data-width="20" class="iconify" data-icon="simple-icons:facebook"></span>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">--}}
{{--                    <span data-width="20" class="iconify" data-icon="simple-icons:github"></span>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="mt-6 relative">--}}
{{--        <div class="absolute inset-0 flex items-center" aria-hidden="true">--}}
{{--            <div class="w-full border-t border-gray-300"></div>--}}
{{--        </div>--}}
{{--        <div class="relative flex justify-center text-sm">--}}
{{--            <span class="px-2 bg-white text-gray-500">--}}
{{--                or continue with--}}
{{--            </span>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif

<div class="mt-6">
    <form action="{{ route('login') }}" method="POST" class="space-y-6">
        @csrf
        <div>
            <x-form.label for="email" value="{{ __('a.email') }}" />
            <div class="mt-1">
                <x-form.input id="email" type="email" name="email" placeholder="{{ __('a.email') }}" :value="old('email')" required autofocus />
                <p class="mt-1 hidden peer-invalid:block text-pink-600 text-sm">
                    Please provide a valid email address.
                </p>
            </div>
        </div>

        <div class="space-y-1">
            <x-form.label for="password" value="{{ __('a.password') }}" />
            <div class="mt-1">
                <x-form.input id="password" type="password" name="password" placeholder="{{ __('a.password') }}" required autocomplete="current-password"/>
            </div>
        </div>

        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <x-form.checkbox id="remember_me" name="remember-me" class="" />
                <x-form.label for="remember_me" value="{{__('a.remember me')}}" class="ml-2 " />
            </div>

            <div class="text-sm">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-700 hover:underline">
                        {{ __('a.forgot your password?') }}
                    </a>
                @endif
            </div>
        </div>

        <div>
            <x-form.button_submit class="">
                {{__('a.sign in')}}
            </x-form.button_submit>
        </div>
    </form>
</div>
