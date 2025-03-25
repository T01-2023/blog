@props(['help'])

<p {{ $attributes->class(['text-gray-400 text-xs mt-1 mb-2']) }}>
    {{ $help ?: $slot  }}
</p>




