<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Show all posts
    public function index()
    {
        return view(
            'posts.index',
            [
                'heading' => 'Latest Blogs',
                'posts' => Post::latest()->filter(request(['tag', 'search']))->paginate(10),
            ]
        );
    }

    // Show single post
    public function show(Post $post)
    {
        return view(
            'posts.show',
            [
                'post' => $post,
            ]
        );
    }

    // Show Create Form
    public function create()
    {
        return view('posts.create', [
            'posts' => Post::latest()->paginate(6),
        ]);
    }

    // Store Post Data
    public function store(Request $request)
    {
        $formFeidls = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'tags' => 'required',
            'description' => 'required',
            'published' => 'required',
        ]);

        $formFeidls['slug'] = $this->slug($formFeidls['title']);

        if ($request->hasFile('post-img')) {
            $formFeidls['img'] = $request->file('post-img')->store('imgs', 'public');
        }

        Post::create($formFeidls);


        return redirect("/")->with('success', 'Post created successfully!');
    }

    public function slug($str)
    {
        return implode("-", explode(' ', $str));
    }

    // Show Edit Form
    public function edit(Post $post)
    {
        return view("posts.edit", [
            'post' => $post,
            'posts' => Post::latest()->paginate(6),
        ]);
    }

    // Update Post
    public function update(Request $request, Post $post)
    {

        $formFeidls = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'tags' => 'required',
            'description' => 'required',
            'published' => 'required',
        ]);

        if ($request->hasFile('post-img')) {
            $formFeidls['img'] = $request->file('post-img')->store('imgs', 'public');
        }

        $post->update($formFeidls);

        return back()->with("success", "Post updated successfully!");
    }

    // Destroy Post
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect("/")->with("success", "Deleted updated successfully!");
    }
}
