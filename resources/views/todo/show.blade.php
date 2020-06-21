@extends('layout.app')

@section('content')
<div class="container">
    <h1 class="text-center">Todo</h1>
    <div class="card card-default">
        <div class="card-header">{{ $todo->title }} <span class="float-right text-muted font-weight-small"> {{ $todo->created_at }} </span> </div>
        <div class="card-body">
            {{ $todo->memo }}
        </div>
    <div class="card-footer">
        <a href="/todo/{{ $todo->id }}/edit" class="btn btn-info btn-sm font-weight-bold">Edit</a>
        @if(!$todo->completed)
            <a href="/todo/{{ $todo->id }}/completed" class="btn btn-success btn-sm">Complete</a>
        @else
            <a href="/todo/{{ $todo->id }}/incomplete" class="btn btn-success btn-sm">Not Completed</a>
        @endif
        <a href="/todo/{{ $todo->id }}/delete" class="btn btn-danger btn-sm font-weight-bold float-right">Delete</a>
    </div>
    </div>
</div>
@endsection
