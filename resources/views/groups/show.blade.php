<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информация о группах и студентах</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>{{ $group->title }}</h1>
    <p>Дата начала: {{ $group->start_from }}</p>
    <p>Активна: {{ $group->is_active ? 'Да' : 'Нет' }}</p>

    <a href="{{ route('students.create', $group) }}">Добавить студента</a>

    <h2>Студенты</h2>
    <ul>
        @foreach($students as $student)
        <li>
            <a href="{{ route('students.show', [$group, $student]) }}">
                {{ $student->surname }} {{ $student->name }}
            </a>
        </li>
        @endforeach
    </ul>

    <a href="{{ route('groups.index') }}">Назад к списку</a>
</body>
</html>