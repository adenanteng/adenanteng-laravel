<x-layout.content>
    <x-layout.title>
        <x-slot name="icon">fluent:heart-pulse-20-regular</x-slot>
        <x-slot name="title">{{ __('cv.skills_tools') }}</x-slot>
    </x-layout.title>

    <div class="grid grid-cols-2 sm:grid-cols-3 gap-2 flex items-start group" >
        <x-layout.box>
            <x-slot name="icon">simple-icons:tailwindcss</x-slot>
            <x-slot name="title">Tailwind CSS</x-slot>
        </x-layout.box>
        <x-layout.box>
            <x-slot name="icon">simple-icons:bootstrap</x-slot>
            <x-slot name="title">Bootstrap</x-slot>
        </x-layout.box>
        <x-layout.box>
            <x-slot name="icon">simple-icons:alpinedotjs</x-slot>
            <x-slot name="title">Alpine Js</x-slot>
        </x-layout.box>
        <x-layout.box>
            <x-slot name="icon">simple-icons:vuedotjs</x-slot>
            <x-slot name="title">Vue Js</x-slot>
        </x-layout.box>
        <x-layout.box>
            <x-slot name="icon">simple-icons:laravel</x-slot>
            <x-slot name="title">Laravel</x-slot>
        </x-layout.box>
        <x-layout.box>
            <x-slot name="icon">simple-icons:figma</x-slot>
            <x-slot name="title">Figma</x-slot>
        </x-layout.box>
    </div>
</x-layout.content>

<x-layout.content>
    <x-layout.title>
        <x-slot name="icon">fluent:paint-brush-20-regular</x-slot>
        <x-slot name="title">{{ __('cv.skills_doing') }}</x-slot>
    </x-layout.title>

    <div class="grid grid-cols-2 gap-2 group"  >

        <x-layout.box>
            <x-slot name="icon">simple-icons:github</x-slot>
            <x-slot name="title">Github</x-slot>
            <x-slot name="desc">{{ __('cv.skills_github') }}</x-slot>
        </x-layout.box>

        <x-layout.box>
            <x-slot name="icon">simple-icons:amazonaws</x-slot>
            <x-slot name="title">Amazon AWS</x-slot>
            <x-slot name="desc">{{ __('cv.skills_amazonaws') }}</x-slot>
        </x-layout.box>

        <x-layout.box>
            <x-slot name="icon">simple-icons:phpstorm</x-slot>
            <x-slot name="title">Phpstorm</x-slot>
            <x-slot name="desc">{{ __('cv.skills_phpstorm') }}</x-slot>
        </x-layout.box>

        <x-layout.box>
            <x-slot name="icon">simple-icons:tailwindcss</x-slot>
            <x-slot name="title">Tailwind CSS</x-slot>
            <x-slot name="desc">{{ __('cv.skills_tailwind') }}</x-slot>
        </x-layout.box>

        <x-layout.box>
            <x-slot name="icon">simple-icons:alpinedotjs</x-slot>
            <x-slot name="title">Alpine Js</x-slot>
            <x-slot name="desc">{{ __('cv.skills_alpine') }}</x-slot>
        </x-layout.box>

        <x-layout.box>
            <x-slot name="icon">simple-icons:iconify</x-slot>
            <x-slot name="title">Iconify</x-slot>
            <x-slot name="desc">{{ __('cv.skills_iconify') }}</x-slot>
        </x-layout.box>

        <x-layout.box>
            <x-slot name="icon">simple-icons:figma</x-slot>
            <x-slot name="title">Figma</x-slot>
            <x-slot name="desc">{{ __('cv.skills_figma') }}</x-slot>
        </x-layout.box>

        <x-layout.box>
            <x-slot name="icon">simple-icons:laravel</x-slot>
            <x-slot name="title">Laravel</x-slot>
            <x-slot name="desc">{{ __('cv.skills_laravel') }}</x-slot>
        </x-layout.box>
    </div>
</x-layout.content>
