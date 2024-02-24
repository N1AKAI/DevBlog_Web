<x-layout>
    @include('partials._hero')
    <!-- Latest Posts -->
    <div class="p-4">
        <div class="container mx-auto">
            <h2 class="p-2 text-2xl text-red-400">Latest Posts</h2>
            <span class="block bg-gray-200 w-full h-[1px] mb-3"></span>
            <div class="flex flex-wrap">
                @unless (count($posts) == 0)
                    @foreach ($posts as $post)
                        <x-post-card :post="$post" />
                    @endforeach
                @else
                    <h1>No Blogs</h1>
                @endunless
            </div>
            <div class="mt-4 p-2">
                {{ $posts->links() }}
            </div>
        </div>
    </div>

</x-layout>
