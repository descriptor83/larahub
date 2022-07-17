
<div x-data="{ open: false }">
    <button class="navbutton" type="button" x-on:click="open = ! open">
      {{ isset($currentCategory) ? ($currentCategory->name) : 'Categories' }}
    </button>
    <div x-show="open" x-transition @click.away = "open = false">
      @foreach ($categories as $category)
        <a {{ isset($currentCategory ) && ($currentCategory->slug == $category->slug ) ? 'class = active' : '' }} 
         href="/category/{{ $category->slug }}">{{ $category->name }}</a>
      @endforeach
    </div>
</div>