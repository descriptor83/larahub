<div x-data="{ open: false }">
    <button class="navbutton" type="button" x-on:click="open = ! open">
        Welcome <?php echo e(auth()->user()->name); ?>!
    </button>
    <div x-show="open" x-transition @click.away = "open = false">
      <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
      <a href="/admin/posts" class="<?php echo e(request()->is('admin/posts') ? 'active' : ''); ?>"" >Dashboard</a>  
      <a href="/admin/posts/create" class="<?php echo e(request()->is('admin/posts/create') ? 'active' : ''); ?>">New Post</a>
      <?php endif; ?>
      <form method="POST" action="/logout">
        <?php echo csrf_field(); ?>
        <button class="navbutton" type="submit">Logout</button>
       </form>  
    </div>
</div><?php /**PATH /home/paul/Документы/www/lara_blog/resources/views/components/admin-dropdown.blade.php ENDPATH**/ ?>