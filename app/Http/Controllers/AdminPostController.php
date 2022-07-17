<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index', ['posts' => Post::paginate(50)]);
    }
    public function create()
    {
        return view('admin.posts.create');
    }
    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['post' => $post]);
    }
    public function update(Post $post)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'thumbnail' => 'image',
            'category_id' => ['required', Rule::exists('categories', 'id')]
          ]);
          if(isset($attributes['thubmnail'])){
            $attributes['thumbnail'] = request()->file('thumbnail')->store('');
          }
          $post->update($attributes);
          return back()->with('success', 'Post has been updated');
    }
    public function destroy(Post $post)
    {
          $post->delete();
          return back()->with('success', 'Post has been deleted');
    }
}
