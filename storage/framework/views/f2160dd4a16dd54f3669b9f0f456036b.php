<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информация о студенте</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <h1>Информация о студенте</h1>

    <p><?php echo e($student->surname); ?> <?php echo e($student->name); ?></p>
    <p>Группа: <?php echo e($group->title); ?></p><br>

    <a href="<?php echo e(route('groups.show', $group)); ?>">Назад к группе</a>
</body>
</html><?php /**PATH /var/www/html/resources/views/students/show.blade.php ENDPATH**/ ?>