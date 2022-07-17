{{--@extends('layout')

@section('title')
	Posts
@endsection
@section('content')
    @foreach ($posts as $post)
    <article>
        <h1>{{ $post->title }}</h1>
			{{ $post->excerpt}}<br>
             By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a><br>
			Category <a href="/categories/{{ $post->category->id }}"> {{ $post->category->name }}</a>
			<br><a href="/posts/{{ $post->id }}">See more</a><br><hr>

    </article>
    @endforeach
@endsection --}}

  <x-layout>
    <x-nav />
    
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">


            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

                @if($posts->count())
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    @foreach ($posts as $post)
                      <x-post-card :post="$post" />
                    @endforeach
                  {{ $posts->links() }}
                </div>
                @else
                  <p>No posts yet</p>
                @endif  

            </div>
          </div>
  </x-layout>
