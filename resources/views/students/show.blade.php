<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информация о студенте</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Информация о студенте</h1>

    <p>{{ $student->surname }} {{ $student->name }}</p>
    <p>Группа: {{ $group->title }}</p><br>

    <a href="{{ route('groups.show', $group) }}">Назад к группе</a>
</body>
</html>