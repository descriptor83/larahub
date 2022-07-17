<?php foreach($attributes->onlyProps(['comment']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['comment']); ?>
<?php foreach (array_filter((['comment']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="comment">
    <section class="col-span-8 col-start-5 mt-10">
      <img src="https://i.pravatar.cc/60?u=<?php echo e($comment->user_id); ?>" alt="avatar">
    </section>
    <section>
      <header>
        <h3 class="font-bold text-gray-600"><?php echo e($comment->author->username); ?></h3>
        <p class="text-xs text-gray-600">Posted <time><?php echo e($comment->created_at->format('F j, Y g:i a')); ?></time> </p>
      </header>
      <p class="mt-12 text-gray-400" >
        <?php echo e($comment->body); ?>

      </p>
    </section>
    </div><?php /**PATH /home/paul/Документы/www/lara_blog/resources/views/components/comment.blade.php ENDPATH**/ ?>