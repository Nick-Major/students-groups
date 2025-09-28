@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Создание группы</h1>

    <form action="{{ route('groups.store') }}" method="POST" class="mb-4">
        @csrf

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
        <a href="{{ route('groups.index') }}" class="btn btn-secondary">Назад</a>
    </form>
</div>
@endsection