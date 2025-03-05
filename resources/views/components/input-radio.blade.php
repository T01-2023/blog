@props(['name' => 'default', 'label' => 'Radio label', 'description' => NULL])

<div class="relative flex items-start">
    <div class="flex h-5 items-center">
        <input id="small" aria-describedby="publier" name="{{ $name }}" type="radio" class="h-4 w-4 border-gray-300 text-vert focus:ring-white checked:border-vert cursor-pointer">
    </div>
    <div class="ml-3 text-sm leading-6">
        <label for="medium" class="font-medium text-gray-600">{{ $label }}</label>
        <p id="medium-description" class="text-xs text-gray-400">{{ $description }}</p>
    </div>
</div>
