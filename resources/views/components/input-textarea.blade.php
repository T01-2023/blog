<div class="mt-2 grid
    text-sm
    after:px-3.5
    after:py-2.5
    [&>textarea]:text-inherit
    after:text-inherit
    [&>textarea]:resize-none
    [&>textarea]:overflow-hidden
    [&>textarea]:[grid-area:1/1/2/2]
    after:[grid-area:1/1/2/2]
    after:whitespace-pre-wrap
    after:invisible
    after:content-[attr(data-cloned-val)_'_']
    after:border">
    <textarea name="content" rows="3" class="block w-full rounded-md bg-white p-2 border border-gray-300 text-base text-gray-500 focus:outline-none focus:ring-0 sm:text-sm/6" onInput="this.parentNode.dataset.clonedVal = this.value"></textarea>
</div>
