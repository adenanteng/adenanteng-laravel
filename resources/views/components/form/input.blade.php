@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge(['class' =>
        'appearance-none block w-full px-3 py-2 border border-gray-200 rounded-md shadow-sm bg-gray-50 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm ']) !!}>
