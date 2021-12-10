<div class="space-y-1 bg-white text-gray-700 px-5 py-3 grid items-end rounded-lg transform duration-500 hover:scale-110 hover:bg-gray-200 dark:hover:bg-gray-700" >
    <span class="iconify text-gray-900 " data-icon="{{ $icon ?? '' }}" data-width="45" ></span>
    <h5 class="text-gray-900">{{ $title }}</h5>
    <p class="text-sm italic" >{{ $italic ?? '' }}</p>
    <p class="text-sm" >{{ $desc ?? '' }}</p>
</div>
