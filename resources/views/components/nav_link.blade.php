<a {{ $attributes }} class="
{{ $active
    ? 'bg-gray-500 text-white pointer-events-none'
    : ' text-black rounded-md bg-white hover:bg-gray-100' }}
    px-3 py-2 text-sm font-medium rounded-md flex items-center gap-1 transition-all duration-100"
{{ $active
   ? 'disabled'
   : ''
}}
    aria-current="page">
    {{ $slot }}</a>