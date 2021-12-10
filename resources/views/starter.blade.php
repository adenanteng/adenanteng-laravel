<div class="fixed z-50 inset-0 overflow-y-auto bg-gray-800 transition-opacity flex items-center" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div x-data="{ open: false }" class="fixed w-screen top-0 z-20 bg-gray-800 py-6">
        <nav class="relative max-w-6xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
            <div class="flex items-center flex-1">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <x-layout.logo />
                </div>

            </div>
        </nav>

    </div>
    <div x-data="{ show:1 }" class="mx-auto align-bottom px-4 pt-5 pb-4 text-left overflow-hidden sm:my-8 sm:align-middle sm:max-w-xl">

        <div x-show="show===1" class="transform transition-all">
            <div class="mt-3 text-center sm:mt-5">
                <h3 class="text-4xl leading-10 font-medium text-white" id="modal-title">
                   {!! __('a.starter t1') !!}
                </h3>
            </div>
            <div class="mt-5 sm:mt-8 sm:grid sm:grid-cols-2 space-y-5 sm:space-y-0 sm:gap-3 sm:grid-flow-row-dense" >
                <div>
                    <x-form.input id="name" type="text" name="name" placeholder="Tulis namamu disini" x-model="name" required autofocus />
                </div>
                <a type="button" @click="show=2" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:col-start-2 sm:text-sm">
                   {{__('a.starter b1')}}  <span x-text="name" class="mx-1"> </span>
                </a>
            </div>
        </div>

        <div x-show="show===2" class="transform transition-all">
            <div class="mt-3 text-center sm:mt-5">
                <h3 class="text-4xl leading-10 font-medium text-white" id="modal-title">
                    {!! __('a.starter t2') !!}
                </h3>
            </div>
            <div class="mt-5 sm:mt-8 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                <a type="button" @click="start = !start" href="{{ url('https://cv.adenanteng.com') }}" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:col-start-2 sm:text-sm">
                    {{ __('a.starter ya')}}
                </a>
                <a type="button" @click="start = !start" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-700 shadow-sm px-4 py-2 text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:col-start-1 sm:text-sm">
                    {{ __('a.starter bukan')}}
                </a>
            </div>
        </div>

    </div>

</div>
