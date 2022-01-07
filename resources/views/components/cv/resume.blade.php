<x-layout.content>
    <x-layout.title>
        <x-slot name="icon">fluent:briefcase-20-regular</x-slot>
        <x-slot name="title">{{ __('cv.work') }}</x-slot>
    </x-layout.title>

    <div class="grid gap-2 group">
        <x-layout.box>
            <x-slot name="title">{{ __('cv.work_kiriminaja_t') }}</x-slot>
            <x-slot name="italic">{{ __('cv.work_kiriminaja_i') }}</x-slot>
            <x-slot name="desc">{{ __('cv.work_kiriminaja_d') }}</x-slot>
        </x-layout.box>
    </div>
</x-layout.content>
<x-layout.content>
    <x-layout.title>
        <x-slot name="icon">fluent:backpack-20-regular"</x-slot>
        <x-slot name="title">{{ __('cv.edu') }}</x-slot>
    </x-layout.title>

    <div class="grid gap-2 group">
        <x-layout.box>
            <x-slot name="title">{{ __('cv.edu_amikom_t') }}</x-slot>
            <x-slot name="italic">{{ __('cv.edu_amikom_i') }}</x-slot>
            <x-slot name="desc">{{ __('cv.edu_amikom_d') }}</x-slot>
        </x-layout.box>
        <x-layout.box>
            <x-slot name="title">{{ __('cv.edu_aka_t') }}</x-slot>
            <x-slot name="italic">{{ __('cv.edu_aka_i') }}</x-slot>
            <x-slot name="desc">{{ __('cv.edu_aka_d') }}</x-slot>
        </x-layout.box>
    </div>
</x-layout.content>
