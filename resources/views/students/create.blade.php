<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить студента в группу</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Добавить студента в группу: {{ $group->title }}</h1>

    <form action="{{ route('students.store', $group) }}" method="POST">
        @csrf

        <label>Фамилия:</label>
        <input type="text" name="surname" required><br><br>

        <label>Имя:</label>
        <input type="text" name="name" required><br><br>

        <button type="submit">Добавить</button>
    </form><br>

    <a href="{{ route('groups.show', $group->id) }}">Назад к группе</a>
</body>
</html>