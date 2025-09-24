<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание группы</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <h1>Создание группы</h1>

    <form action="<?php echo e(route('groups.store')); ?>" method="POST">
        <?php echo csrf_field(); ?> 

        <label>Название группы:</label>
        <input type="text" name="title" required><br><br>

        <label>Дата начала:</label>
        <input type="date" name="start_from" required><br><br>

        <label>Активна ли группа:</label>
        <select name="is_active" required>
            <option value="1">Да</option>
            <option value="0">Нет</option>
        </select><br><br>

        <button type="submit">Создать</button>
    </form><br>
    
</body>
</html><?php /**PATH /var/www/html/resources/views/groups/create.blade.php ENDPATH**/ ?>