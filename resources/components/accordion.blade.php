@props([
    'title'=>null
])
<div {{ $attributes->merge(['class' => 'px-4 w-full']) }} x-data={show:false}>
    <div class="flex items-center justify-between">   
        <x-ox.button.button-text @click="show=!show" class="p-0 uppercase" type="button">
            {{ $title ?? 'please put a title slot' }}
        </x-ox.button.button-text>  
        <x-feathericon-chevron-right x-bind:class="show ? 'rotate-90 transition duration-300':'transition duration-300'"/>                             
    </div>
    <div x-show="show" class="px-8 py-2 pt-4" x-transition>
        {{ $slot }}
    </div>
</div>