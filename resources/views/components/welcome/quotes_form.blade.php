<style>
    .aku::first-letter {
        @apply text-transform: capitalize;
    }
</style>

@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif

<div class="">
    <form action="{{ route('ajj.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <x-form.label for="quote" value="{{ __('Quote') }}" />
            <div class="mt-1">
                <x-form.textarea id="quote" name="quote" rows="4" :value="old('quote')" placeholder="{{ __('Quote cok') }}" required autofocus class="dark:bg-gray-800 text-transform: capitalize" />
            </div>
        </div>
        <div>
            <x-form.label for="name" value="{{ __('a.name') }}" />
            <div class="mt-1">
                <x-form.input x-text="urName" x-model="urName" id="name" name="name" type="text" :value="old('name')" placeholder="{{ __('Tulis nama mu disini dumb ass') }}" required autofocus autocomplete="name" class="dark:bg-gray-800 text-transform: capitalize" />
            </div>
        </div>

{{--        <div class="flex items-center justify-between">--}}
{{--            <div class="flex items-center">--}}
{{--                <x-form.checkbox id="remember_me" name="remember-me" class="" />--}}
{{--                <x-form.label for="remember_me" value="{{__('a.remember me')}}" class="ml-2 " />--}}
{{--            </div>--}}

{{--            <div class="text-sm">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-700 hover:underline">--}}
{{--                        {{ __('a.forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--        </div>--}}

        <div>
            <x-form.button_submit class="">
                {{__('Submit cuy')}}
            </x-form.button_submit>
        </div>
    </form>
</div>


