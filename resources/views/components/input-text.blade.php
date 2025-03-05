@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'block w-full rounded-md border border-gray-300 focus:ring-0 text-sm text-gray-500 focus:outline-none']) }}>
