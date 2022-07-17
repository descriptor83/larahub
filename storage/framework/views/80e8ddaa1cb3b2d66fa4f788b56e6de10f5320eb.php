
<div x-data="{ open: false }">
    <button class="navbutton" type="button" x-on:click="open = ! open">
      <?php echo e(isset($currentCategory) ? ($currentCategory->name) : 'Categories'); ?>

    </button>
    <div x-show="open" x-transition @click.away = "open = false">
      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a <?php echo e(isset($currentCategory ) && ($currentCategory->slug == $category->slug ) ? 'class = active' : ''); ?> 
         href="/category/<?php echo e($category->slug); ?>"><?php echo e($category->name); ?></a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div><?php /**PATH /home/paul/Документы/www/lara_blog/resources/views/components/category-dropdown.blade.php ENDPATH**/ ?>