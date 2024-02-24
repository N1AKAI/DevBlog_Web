@props(['tags'])

@php
    $tags = explode(',', $tags);
@endphp
<div class="p-2 space-y-1">
    <div>
        <h4 class="inline-block font-bold"><i class="fa-solid fa-tag"></i> Tags:</h4>
        <div class="inline-block">
            <ul class="flex space-x-1">
                @foreach ($tags as $tag)
                    <li><a class="text-gray-500" href="/?tag={{ trim($tag) }}">{{ $tag }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
