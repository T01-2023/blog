<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-white text-xs font-medium bg-vert rounded-sm px-5 py-2 cursor-pointer']) }}>
    {{ $slot }}
</button>


