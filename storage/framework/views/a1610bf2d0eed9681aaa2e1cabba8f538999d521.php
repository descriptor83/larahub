

  <?php foreach($attributes->onlyProps(['post']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['post']); ?>
<?php foreach (array_filter((['post']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<article>
  <div class="grid grid-cols-2 md:grid-cols-2">


      <div class="p-6">
          <div class="flex items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
              <div class="ml-4 text-lg leading-7 font-semibold"><a href="/post/<?php echo e($post->id); ?>" class="underline text-gray-900 dark:text-white"><?php echo e($post->title); ?></a></div>

          </div>
          <br>
          <div>
            <img src="<?php echo e($post->thumbnail ?  'storage/'.$post->thumbnail : 'storage/lary-avatar.svg'); ?>" alt="lary" width="56" height="63">
            <h3>By <a href="/author/<?php echo e($post->user->username); ?>"><?php echo e($post->user->name); ?></a></h3>
            <h4>In category <?php echo e($post->category->name); ?></h4>
          </div>
          <div class="ml-12">
            Created <?php echo e($post->created_at); ?>

              <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                  <?php echo e($post->excerpt); ?>

              </div>
          </div>
      </div>

  </div>
</article>
<?php /**PATH /home/paul/Документы/www/lara_blog/resources/views/components/post-card.blade.php ENDPATH**/ ?>