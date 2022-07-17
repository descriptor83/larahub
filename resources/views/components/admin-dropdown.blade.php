<div x-data="{ open: false }">
    <button class="navbutton" type="button" x-on:click="open = ! open">
        Welcome {{ auth()->user()->name }}!
    </button>
    <div x-show="open" x-transition @click.away = "open = false">
      @admin
      <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'active' : '' }}"" >Dashboard</a>  
      <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'active' : '' }}">New Post</a>
      @endadmin
      <form method="POST" action="/logout">
        @csrf
        <button class="navbutton" type="submit">Logout</button>
       </form>  
    </div>
</div>