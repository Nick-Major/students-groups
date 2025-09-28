@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Добавить студента в группу: {{ $group->title }}</h1>

    <form action="{{ route('students.store', $group) }}" method="POST" class="mb-4">
        @csrf

        <div class="mb-3">
            <label class="form-label fw-bold">Фамилия:</label>
            <input type="text" name="surname" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Имя:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Добавить студента</button>
        <a href="{{ route('groups.show', $group->id) }}" class="btn btn-secondary">Назад к группе</a>
    </form>
</div>
@endsection