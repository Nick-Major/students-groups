<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить студента в группу</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <h1>Добавить студента в группу: <?php echo e($group->title); ?></h1>

    <form action="<?php echo e(route('students.store', $group)); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <label>Фамилия:</label>
        <input type="text" name="surname" required><br><br>

        <label>Имя:</label>
        <input type="text" name="name" required><br><br>

        <button type="submit">Добавить</button>
    </form><br>

    <a href="<?php echo e(route('groups.show', $group->id)); ?>">Назад к группе</a>
</body>
</html><?php /**PATH /var/www/html/resources/views/students/create.blade.php ENDPATH**/ ?>