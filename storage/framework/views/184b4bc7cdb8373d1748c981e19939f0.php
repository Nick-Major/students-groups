 <?php $__env->startSection('content'); ?>
<div class="container">
  <h1><?php echo e($group->title); ?></h1>
  <p>Дата начала: <?php echo e($group->start_from); ?></p>
  <p>Активна: <?php echo e($group->is_active ? 'Да' : 'Нет'); ?></p>

  <a href="<?php echo e(route('students.create', $group)); ?>">Добавить студента</a>

  <h2>Студенты</h2>
  <ul>
    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
      <a href="<?php echo e(route('students.show', [$group, $student])); ?>">
        <?php echo e($student->surname); ?> <?php echo e($student->name); ?>

      </a>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>

  <a href="<?php echo e(route('groups.index')); ?>">Назад к списку</a>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/resources/views/groups/show.blade.php ENDPATH**/ ?>