@props(['title', 'post', 'btn_text'])
<h1 class="text-2xl text-center font-medium mb-8 text-gray-500">{{ $title }}</h1>
<form action="{{ $post ? '/posts/' . $post->id : '/posts' }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if ($post)
        @method('PUT')
    @endif
    <div class="container mx-auto">
        <div class="p-8 bg-white rounded-lg">
            <label class="font-medium my-2 block" for="title">Post Title <span class="text-red-600">*</span></label>
            <div>
                <input class="w-full bg-[#F7F7F7] border border-gray-200 p-1 focus:outline-red-300" type="text"
                    id="title" name="title" value="{{ $post ? $post->title : old('title') }}" />
                @error('title')
                    <x-error-form>{{ $message }}</x-error-form>
                @enderror
            </div>
            <label class="font-medium my-2 block" for="content">Post Content <span
                    class="text-red-600">*</span></label>
            <div>
                <textarea id="text-area" class="w-full bg-[#F7F7F7] border border-gray-200 p-1 focus:outline-red-300" type="text"
                    id="content" name="content">{{ $post ? $post->content : old('content') }}</textarea>
                @error('content')
                    <x-error-form>{{ $message }}</x-error-form>
                @enderror
            </div>
            <label class="font-medium my-2 block" for="tags">Post Tags <span class="text-red-600">*</span></label>
            <div>
                <input class="w-full bg-[#F7F7F7] border border-gray-200 p-1 focus:outline-red-300" type="text"
                    id="tags" name="tags" value="{{ $post ? $post->tags : old('tags') }}" />
                @error('tags')
                    <x-error-form>{{ $message }}</x-error-form>
                @enderror
            </div>
            <label class="font-medium my-2 block" for="description">Post Description <span
                    class="text-red-600">*</span></label>
            <div>
                <input class="w-full bg-[#F7F7F7] border border-gray-200 p-1 focus:outline-red-300" type="text"
                    id="description" name="description" value="{{ $post ? $post->description : old('description') }}" />
                @error('description')
                    <x-error-form>{{ $message }}</x-error-form>
                @enderror
            </div>
            <label class="font-medium my-2 block" for="published">Post status <span
                    class="text-red-600">*</span></label>
            <div>
                <select class="w-full bg-[#F7F7F7] border border-gray-200 p-1 focus:outline-red-300" type="text"
                    id="published" name="published" value="{{ $post ? $post->published : old('published') }}">
                    <option value="1">Published</option>
                    <option value="0">Draft</option>
                    @error('published')
                        <x-error-form>{{ $message }}</x-error-form>
                    @enderror
                </select>
            </div>
            <label class="font-medium my-2 block" for="post-img">Post Image <span class="text-red-600">*</span></label>
            <input type="file" id="post-img" name="post-img" />
            @if ($post && $post->img)
                <img class="mt-2 h-[250px]" src="{{ asset('/storage/' . $post->img) }}" alt="">
            @endif
            @error('post-img')
                <x-error-form>{{ $message }}</x-error-form>
            @enderror
            <button type="submit"
                class="bg-red-400 text-white p-2 border border-red-400 duration-300 hover:bg-red-700 block mt-4 w-full">{{ $btn_text ? $btn_text : 'Add Post' }}</button>
        </div>
    </div>
</form>
