<div class="space-y-1 cursor-pointer bg-white text-gray-600 px-5 py-3 grid items-end rounded-lg md:hover:scale-110 group-hover:opacity-25 hover:!opacity-100" >
    <span class="iconify text-indigo-600 " data-icon="{{ $icon ?? '' }}" data-width="45" ></span>
    <h5 class="text-gray-900">{{ $title }}</h5>
    <p class="text-sm italic" >{{ $italic ?? '' }}</p>
    <p class="text-sm" >{{ $desc ?? '' }}</p>
</div>
