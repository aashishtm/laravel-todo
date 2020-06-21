@extends('layout.app')

@section('content')
<div class="container">
    <h1 class="text-center">Welcome To Todos App</h1>
    <div class="card card-default">
        <div class="card-header">Todos</div>
        <div class="card-body">
            <ul class="list-group">
                @foreach ($todos->sortByDesc('created_at') as $todo)
                    <li class="list-group-item">
                       @if(!$todo->completed)
                            <span>{{ $todo->title }}</span>
                            <a href="/todo/{{ $todo->id }}/completed" class="btn btn-success btn-sm float-right">Complete</a>
                       @else
                            <span class="completed">{{ $todo->title }}</span>
                            <a href="/todo/{{ $todo->id }}/incomplete" class="btn btn-success btn-sm float-right">Not Completed</a>

                       @endif
                    <a href="/todo/{{ $todo->id }}" class="btn btn-primary btn-sm float-right">View</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
