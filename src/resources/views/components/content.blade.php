@props(['title', 'id'])

<div id="{{ $id }}">
    <div class="text-[64px] text-center">
        {{ $title }}
    </div>
    <div class="py-8">
        {{ $slot }}
    </div>
    <x-buttons.return/>
</div>