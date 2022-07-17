<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index()
    {

      return view('posts', ['posts'=> Post::latest()->filter(request(['search', 'category']))->paginate(3)->withQueryString()]);
    }
    public function show($id)
    {
      $post = Post::findOrFail($id);

      return view('post', ['post' => $post->load(['category', 'user'])]);
    }
    public function postcat($slug)
    {
      $category = Category::where('slug', $slug)->first();
      $posts = Post::where('category_id', $category->id)->simplePaginate(3)->withQueryString();
      return view('posts', ['posts' => $posts]);
    }
    public function authcat($username)
    {
        $author = User::where('username', $username)->first();
        $posts = Post::where('author_id', $author->id)->simplePaginate(3)->withQueryString();
        return view('posts', ['posts' => $posts]);
    }
    public function create()
    {
      
      return view('create');
    }
    public function store()
    {
      $attributes = request()->validate([
        'title' => 'required',
        'excerpt' => 'required',
        'body' => 'required',
        'thumbnail' => 'required|image',
        'category_id' => ['required', Rule::exists('categories', 'id')]
      ]);
      $attributes['author_id'] = auth()->id();
      $attributes['thumbnail'] = request()->file('thumbnail')->store('');
      Post::create($attributes);
      return redirect('/');
    }
}
