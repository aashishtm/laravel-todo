@extends('layout.app')

@section('content')
<div class="container">
    <h1 class="text-center">Edit Todo</h1>
    <div class="row justify-content-center">
        <div class="card card-default">
            <div class="card-header bg-primary text-white">Edit Todo</div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            @foreach ($errors->all() as $error)
                                <li class="list-group-item">
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/todo/{{ $todo->id }}/update-todo" method="post">
                    @csrf
                   <div class="mb-3">
                   <input type="text" name="title" class="form-control" value="{{ $todo->title }}">
                   </div>
                    <div class="form-group mb-3">
                    <textarea name="memo" id="" cols="30" rows="10" class="form-control">
                        {{ $todo->memo }}
                    </textarea>
                    </div>
                    <input type="submit" value="Edit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
