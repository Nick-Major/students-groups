@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Список групп</h1>

    <a href="{{ route('groups.create') }}" class="btn btn-primary mb-3">Создать новую группу</a>

    <ul class="list-group">
        @foreach($groups as $group)
        <li class="list-group-item">
            <a href="{{ route('groups.show', $group->id) }}">{{ $group->title }}</a>
        </li>
        @endforeach
    </ul>
</div>
@endsection