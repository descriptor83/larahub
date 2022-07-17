{{--@extends('layout')

@section('title')
	Post
@endsection
@section('content')
<div>
{!! $post->body !!}
    <a href="/">Back</a>
</div>
@endsection--}}
<x-layout>
  <x-nav />
<article>

  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">


      <div class="p-6">
          <div class="flex items-center">
              <img src="{{ $post->thumbnail ?  'storage/'.$post->thumbnail : 'storage/lary-avatar.svg' }}" width="56" height="63" alt="avatar">
              <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
								<h1>{{ $post->title}}</h1>
							</div>

          </div>
          <br>
          <div class="text-gray-600">
            By {{ $post->user->name }} in {{ $post->category->name }}
          </div>
          <div class="ml-12 mb-20 text-gray-600">
            Created <time>{{ $post->created_at->diffForHumans() }}</time>
              <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                  {{ $post->body}}
              </div>
          </div>
          @auth
              
          <div class="comment">
          <form action="/post/{{ $post->id }}/comments" method="post" class="w-50 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            @csrf
            <header class="flex items-center">
              <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" width="40" height="40" alt="" class="rounded-xl" >
              <h2>Want to participate</h2>
            </header>
            <div class="mt-8">
              <textarea name="body" class="w-full text-sm focus::outline-none focus:ring"
               cols="30" rows="10" placeholder="Write here" required></textarea>
               @error('body')
                   {{ $message }}
               @enderror
               <div>
                 <button class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl" type="submit">Post Comment</button>
               </div>
            </div>
          </form>
          </div>
          @else
          <p>
            <a class="text-gray-600 font-semibold" href="/login" >Log In to write a comment</a>
          </p>
          @endauth
          @foreach ($post->comments as $comment)
          <x-comment :comment="$comment" />    
          @endforeach
          
      </div>
			<a href="/">Back</a>
  </div>
</article>

</x-layout>
