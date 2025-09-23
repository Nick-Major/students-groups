<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Управление учебными группами</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Список групп</h1>

    <a href="{{ route('groups.create') }}">Создать новую группу</a>

    <ul>
        @foreach($groups as $group)
        <li>
            <a href="{{ route('groups.show', $group->id) }}">{{ $group->title }}</a>
        </li>
        @endforeach
    </ul>
</body>
</html>