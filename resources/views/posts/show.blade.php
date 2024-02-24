<x-layout>
    <!-- Single Post -->
    <main class="p-4 bg-[#F7F7F7] relative">
        <div class="absolute top-8 right-12"><a
                class="block px-5 py-2.5 text-white bg-red-400 duration-300 hover:bg-red-600"
                href="/posts/edit/{{ $post->id }}"><i class="fa-solid fa-pen-to-square"></i> Edit Post</a>
            <form action="/posts/{{ $post->id }}" method="post">
                @csrf
                @method('DELETE')
                <button class="block mt-1 px-5 py-2.5 text-white bg-red-400 duration-300 hover:bg-red-600"><i
                        class="fa-solid fa-trash"></i> Delete Post</button>
            </form>
        </div>
        <div class="container mx-auto">
            <div class="text-center">
                <div class="text-gray-500 pb-1">{{ $post->created_at }}</div>
                <h1 class="text-3xl font-bold">{{ $post->title }}</h1>
                <p class="p-3 mx-auto lg:w-[768px] text-gray-500 text-sm">{{ $post->description }}</p>
            </div>
            <div class="my-3 flex overflow-hidden justify-center items-center">
                <img class="rounded-xl w-full max-h-full object-contain lg:w-[768px]"
                    src="{{ $post->img ? asset('storage/' . $post->img) : asset('/assets/img/no-image.jpg') }}"
                    alt="">
            </div>
            <div class="lg:w-[700px] mx-auto">
                <article class="text-lg">
                    {!! $post->content !!}
                </article>
                <div class="bg-gray-300 w-full h-[1px] my-6"></div>
                <!-- Post Auhor -->
                <div class="flex flex-col md:flex-row items-center flex-wrap">
                    <div class="w-[80px] h-[80px] rounded-[50%] overflow-hidden md:me-[10px]">
                        <img src="{{ asset('/assets/img/user.jpg') }}" alt="">
                    </div>
                    <div class="md:w-[calc(100%-90px)]">
                        <p class="font-bold">Admin</p>
                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex consequatur, modi
                            sint voluptatem dignissimos tempora nostrum optio impedit rem quisquam perspiciatis
                            repudiandae
                            sapiente, quam magnam expedita! Voluptatibus voluptas quia repellendus!</p>
                    </div>
                </div>
                <div class="bg-gray-300 w-full h-[1px] my-6"></div>
                <!-- Tags -->
                <div class="flex">
                    <div class="me-2">Tags:</div>
                    <ul class="flex space-x-2 justify-center items-center">
                        @php
                            $tags = explode(',', $post->tags);
                        @endphp
                        @foreach ($tags as $tag)
                            <li><a class="p-1 bg-white border border-red-400 text-red-400 duration-300 hover:text-white hover:bg-red-700"
                                    href="#">{{ $tag }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-gray-300 w-full h-[1px] my-6"></div>
                <!-- Comments -->
                <div>
                    <div class="mb-4">Comments(0)</div>
                    <form action="" method="post">
                        <textarea class="w-full resize-none outline-red-400 p-1" name="" id="" rows="10"></textarea>
                        <div class="flex justify-end mt-4">
                            <button
                                class="bg-red-400 text-white p-2 border border-red-400 duration-300 hover:bg-red-700">Post
                                Comment</button>
                        </div>
                    </form>
                </div>
                <div class="bg-gray-300 w-full h-[1px] my-6"></div>
                <div class="flex flex-wrap">
                    <div class="bg-white rounded-lg w-full p-6">
                        <div class="flex flex-col md:flex-row items-center flex-wrap">
                            <div class="w-[70px] h-[70px] rounded-[50%] overflow-hidden md:me-[10px]">
                                <img src="{{ asset('/assets/img/user.jpg') }}" alt="">
                            </div>
                            <div class="w-full md:w-[calc(100%-80px)] flex items-center">
                                <div class="flex-grow">
                                    <p class="font-bold">Admin</p>
                                    <p class="text-sm text-gray-500">1 hour ago</p>
                                </div>
                                <div
                                    class="text-red-400 py-2 px-4 border border-red-400 rounded-full duration-300 cursor-pointer hover:bg-red-400 hover:text-white">
                                    <i class="fa-solid fa-heart"></i> 100
                                </div>
                            </div>
                            <div class="py-5 leading-6 text-[15px]">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo nobis rerum
                                assumenda!
                                Tempora laborum autem nostrum placeat vel similique, tempore, non magnam totam adipisci
                                laboriosam deleniti dicta assumenda maiores cupiditate?
                            </div>
                            <div class="flex justify-end w-full space-x-2">
                                <button
                                    class="text-red-400 py-1 px-8 duration-300 hover:bg-red-700 hover:text-white">Delete</button>
                                <button
                                    class="bg-red-400 text-white py-1 px-8 border border-red-400 duration-300 hover:bg-red-700">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
