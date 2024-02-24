@props(['posts'])
<h1 class="text-2xl text-center font-medium mt-16 mb-8 text-gray-500">All Posts</h1>
<div class="container mx-auto">
    <div>
        <table class="border border-1 border-gray-300 bg-white w-full">
            <tr class="bg-red-400 text-white text-left">
                <th class="border-y border-1 border-gray-300 p-2">#ID</th>
                <th class="border-y border-1 border-gray-300 p-2">Title</th>
                <th class="border-y border-1 border-gray-300 p-2">Tags</th>
                <th class="border-y border-1 border-gray-300 p-2">Description</th>
                <th class="border-y border-1 border-gray-300 p-2">Published</th>
                <th class="border-y border-1 border-gray-300 p-2">Author</th>
                <th class="border-y border-1 border-gray-300 p-2">Created At</th>
                <th class="border-y border-1 border-gray-300 p-2">Updated At</th>
                <th class="border-y border-1 border-gray-300 p-2">Controls</th>
            </tr>
            @unless (count($posts) == 0)
                <tbody class="">
                    @foreach ($posts as $post)
                        <tr>
                            <td class="font-medium border-y border-1 border-gray-300 p-2">{{ $post->id }}</td>
                            <td class="font-medium border-y border-1 border-gray-300 p-2">{{ $post->title }}</td>
                            <td class="font-medium border-y border-1 border-gray-300 p-2">{{ $post->tags }}</td>
                            <td class="font-medium border-y border-1 border-gray-300 p-2">{{ $post->description }}</td>
                            <td class="font-medium border-y border-1 border-gray-300 p-2">
                                {{ $post->published == 1 ? 'Published' : 'Draft' }}</td>
                            <td class="font-medium border-y border-1 border-gray-300 p-2">{{ $post->user_id }}</td>
                            <td class="font-medium border-y border-1 border-gray-300 p-2">{{ $post->created_at }}</td>
                            <td class="font-medium border-y border-1 border-gray-300 p-2">{{ $post->updated_at }}</td>
                            <td class="font-medium border-y border-1 border-gray-300 p-2"><a
                                    class="text-green-600 font-medium" href="/posts/edit/{{ $post->id }}">Edit </a>
                                -<form action="/posts/{{ $post->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 font-medium">
                                        Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            @endunless
        </table>
    </div>
    <div class="mt-4">
        {{ $posts->links() }}
    </div>
</div>
