<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Список групп</h1>

    <a href="<?php echo e(route('groups.create')); ?>" class="btn btn-primary mb-3">Создать новую группу</a>

    <ul class="list-group">
        <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="list-group-item">
            <a href="<?php echo e(route('groups.show', $group->id)); ?>"><?php echo e($group->title); ?></a>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/resources/views/groups/index.blade.php ENDPATH**/ ?>