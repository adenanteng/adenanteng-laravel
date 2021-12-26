<x-layout.app>
    <div class="flex min-h-screen bg-gray-100">
        <div class="hidden lg:block relative w-0 flex-1">
            <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1505904267569-f02eaeb45a4c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1908&q=80" alt="">
        </div>

        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
                    <x-layout.logo />
                    <h2 class="mt-6 text-3xl font-extrabold text-gray-900 font-head">
                        {{ __('a.sign in to your account') }}
                    </h2>
                    <p class="mt-2 text-sm text-gray-500">
                        {{ __('a.or') }}
                        <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                            {{ __('a.create your account') }}
                        </a>
                    </p>
                </div>

                <div class="mt-8">
                    <x-auth.login_form />
                </div>
            </div>
        </div>

    </div>
</x-layout.app>
