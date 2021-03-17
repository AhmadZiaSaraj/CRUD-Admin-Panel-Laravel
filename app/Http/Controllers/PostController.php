<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', ['posts' => $posts]);
    }


    public function show(Post $post)
    {
        return view('blog-post', [ 'post' => $post ]);
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        $validated_data = request()->validate([
            'title' => 'required',
            'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'body' => 'required'
        ]);
        if (request('featured_image')){
            $img_name = request('featured_image')->getClientOriginalName();
            $validated_data['featured_image'] = $img_name;
            request('featured_image')->move(public_path('media'), $img_name);
        }
        $post->title = $validated_data['title'];
        $post->featured_image = $validated_data['featured_image'];
        $post->body = $validated_data['body'];
        auth()->user()->posts()->save($post);
        return redirect('/post/index');
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store()
    {
        $validated_data = request()->validate([
           'title' => 'required',
            'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'body' => 'required'
        ]);
        if (request('featured_image')){
            $img_name = request('featured_image')->getClientOriginalName();
            $validated_data['featured_image'] = $img_name;
            request('featured_image')->move(public_path('media'), $img_name);
        }
        auth()->user()->posts()->create($validated_data);
        return redirect('/post/index');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/post/index');
    }
}
