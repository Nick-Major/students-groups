<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание группы</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Создание группы</h1>

    <form action="{{ route('groups.store') }}" method="POST">
        @csrf {{-- защита от CSRF-атак --}}

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
</html>