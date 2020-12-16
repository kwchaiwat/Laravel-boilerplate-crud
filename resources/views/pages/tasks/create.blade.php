@extends('layouts.mainlayout')

@section('content')
    <div class="container">
        <h1 class="mt-5 pt-5"> Add New Task </h1>
        <hr>
        <form action="/tasks" method="post">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $errors)
                            <li>{{$errors}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Task Title</label>
                <input type="text" class="form-control" id="taskTitle" name="title">
            </div>
            <div class="form-group">
                <label for="description">Task Description</label>
                <input type="text" class="form-control" id="taskDescription" name="description">
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
        </form>
    </div>
@endsection
