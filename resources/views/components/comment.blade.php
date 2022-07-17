@props(['comment'])
<div class="comment">
    <section class="col-span-8 col-start-5 mt-10">
      <img src="https://i.pravatar.cc/60?u={{ $comment->user_id }}" alt="avatar">
    </section>
    <section>
      <header>
        <h3 class="font-bold text-gray-600">{{ $comment->author->username }}</h3>
        <p class="text-xs text-gray-600">Posted <time>{{ $comment->created_at->format('F j, Y g:i a') }}</time> </p>
      </header>
      <p class="mt-12 text-gray-400" >
        {{ $comment->body }}
      </p>
    </section>
    </div>