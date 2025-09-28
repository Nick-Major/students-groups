<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h1 class="mb-4">Создание группы</h1>

    <form action="<?php echo e(route('groups.store')); ?>" method="POST" class="mb-4">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label class="form-label fw-bold">Название группы:</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Дата начала:</label>
            <input type="date" name="start_from" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Активна ли группа:</label>
            <select name="is_active" class="form-select" required>
                <option value="1">Да</option>
                <option value="0">Нет</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Создать</button>
        <a href="<?php echo e(route('groups.index')); ?>" class="btn btn-secondary">Назад</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/resources/views/groups/create.blade.php ENDPATH**/ ?>