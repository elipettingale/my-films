@php
    if ($color === 'red') {
        $classes = "py-2.5 px-5 ml-2 text-sm font-medium text-white bg-red-700 rounded-lg border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800";
    }

    if ($color === 'green') {
        $classes = "py-2.5 px-5 ml-2 text-sm font-medium text-white bg-green-700 rounded-lg border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800";
    }
@endphp


<button {{ $attributes->merge(['class' => $classes]) }} type="button">
    {{ $slot }}
</button>
