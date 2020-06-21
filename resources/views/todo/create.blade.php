@extends('layout.app')

@section('content')
<div class="container">
    <h1 class="text-center">Create Todo</h1>
    <div class="row justify-content-center">
        <div class="card card-default">
            <div class="card-header bg-primary text-white">Create Todo</div>
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
                <form action="/store-todo" method="post">
                    @csrf
                   <div class="mb-3">
                        <input type="text" name="title" class="form-control" placeholder="Enter Todo Title">
                   </div>
                    <div class="form-group mb-3">
                        <textarea name="memo" placeholder="Enter Details" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <input type="submit" value="Create" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
