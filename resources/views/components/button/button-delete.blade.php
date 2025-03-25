<button {{ $attributes->merge(['type' => 'button', 'class' => 'text-white text-xs font-medium bg-red-700 rounded-sm px-5 py-2 cursor-pointer']) }}>
    {{ $slot }}
</button>


