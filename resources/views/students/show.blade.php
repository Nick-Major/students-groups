@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Информация о студенте</h1>

    <p><strong>{{ $student->surname }} {{ $student->name }}</strong></p>
    <p>Группа: {{ $group->title }}</p><br>

    <a href="{{ route('groups.show', $group) }}" class="btn btn-secondary">Назад к группе</a>
</div>
@endsection