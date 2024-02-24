@props(['post'])

<x-card>
    <div class="w-full h-[250px] overflow-hidden">
        <img class="w-full min-h-full object-cover"
            src="{{ $post->img ? asset('storage/' . $post->img) : asset('/assets/img/no-image.jpg') }}" alt="" />
    </div>
    <div class="p-2 pb-0 flex justify-between items-center text-sm">
        <div>
            <h4 class="inline-block font-bold"><i class="fa-regular fa-calendar"></i></i> Date:</h4>
            <a class="text-gray-500" href="#">2023-11-04</a>
        </div>
        <div>
            <h4 class="inline-block font-bold"><i class="fa-solid fa-user-pen"></i></i> Author:</h4>
            <a class="text-gray-500" href="#">Admin</a>
        </div>
    </div>
    <span class="block bg-gray-100 w-full h-[1px] mt-2"></span>
    <div class="p-2">
        <h3 class="font-bold text-lg pb-2" title="{{ $post->title }}">
            {{ $post->title }}</h3>
        <p class="text-gray-500 text-sm post-description">{{ $post->description }}</p>
    </div>
    <x-post-tags :tags="$post->tags" />
    <span class="block bg-gray-100 w-full h-[1px] mt-2"></span>
    <div class="px-2 py-3 flex justify-end">
        <a class="bg-white text-red-400 p-2 border border-red-400 duration-300 hover:bg-red-700 hover:text-white"
            href="/posts/{{ $post->id }}">Learn more</a>
    </div>
</x-card>
