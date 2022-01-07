<x-layout.content>
    <x-layout.title>
        <x-slot name="icon">fluent:chat-multiple-20-regular</x-slot>
        <x-slot name="title">{{ __('cv.contact_title') }}</x-slot>
    </x-layout.title>

    <div class="space-y-5 px-5">
        <div class="space-y-1 text-gray-600" >
            <p><span class="text-gray-900 font-medium">{{ __('cv.phone') }} : </span><a target="_blank" class="hover:text-gray-900" href="{{ url('tel:+6285156875180') }}">+62 851 5687 5180</a></p>
            <p><span class="text-gray-900 font-medium">{{ __('cv.whatsapp') }} : </span><a target="_blank" class="hover:text-gray-900" href="{{ url('https://wa.me/6285156875180') }}">+62 851 5687 5180</a></p>
            <p><span class="text-gray-900 font-medium">{{ __('cv.email') }} : </span><a target="_blank" class="hover:text-gray-900" href="{{ url('mailto:hey@adenanteng.com') }}">hey@adenanteng.com</a></p>
        </div>
        <div class="space-y-1 text-gray-600">
            <p><span class="text-gray-900 font-medium">{{ __('cv.linkedin') }} : </span><a target="_blank" class="hover:text-gray-900" href="{{ url('https://linkedin.com/in/adenanteng') }}">adenanteng</a></p>
            <p><span class="text-gray-900 font-medium">{{ __('cv.github') }} : </span><a target="_blank" class="hover:text-gray-900" href="{{ url('https://github.com/adenanteng') }}">adenanteng</a></p>
        </div>


    </div>
</x-layout.content>
