
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.nav','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<article>

  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">


      <div class="p-6">
          <div class="flex items-center">
              <img src="<?php echo e($post->thumbnail ?  'storage/'.$post->thumbnail : 'storage/lary-avatar.svg'); ?>" width="56" height="63" alt="avatar">
              <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
								<h1><?php echo e($post->title); ?></h1>
							</div>

          </div>
          <br>
          <div class="text-gray-600">
            By <?php echo e($post->user->name); ?> in <?php echo e($post->category->name); ?>

          </div>
          <div class="ml-12 mb-20 text-gray-600">
            Created <time><?php echo e($post->created_at->diffForHumans()); ?></time>
              <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                  <?php echo e($post->body); ?>

              </div>
          </div>
          <?php if(auth()->guard()->check()): ?>
              
          <div class="comment">
          <form action="/post/<?php echo e($post->id); ?>/comments" method="post" class="w-50 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <?php echo csrf_field(); ?>
            <header class="flex items-center">
              <img src="https://i.pravatar.cc/60?u=<?php echo e(auth()->id()); ?>" width="40" height="40" alt="" class="rounded-xl" >
              <h2>Want to participate</h2>
            </header>
            <div class="mt-8">
              <textarea name="body" class="w-full text-sm focus::outline-none focus:ring"
               cols="30" rows="10" placeholder="Write here" required></textarea>
               <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                   <?php echo e($message); ?>

               <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
               <div>
                 <button class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl" type="submit">Post Comment</button>
               </div>
            </div>
          </form>
          </div>
          <?php else: ?>
          <p>
            <a class="text-gray-600 font-semibold" href="/login" >Log In to write a comment</a>
          </p>
          <?php endif; ?>
          <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.comment','data' => ['comment' => $comment]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('comment'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['comment' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($comment)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>    
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
      </div>
			<a href="/">Back</a>
  </div>
</article>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /home/paul/Документы/www/lara_blog/resources/views/post.blade.php ENDPATH**/ ?>