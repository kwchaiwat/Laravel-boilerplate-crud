@extends('layouts.mainlayout')

@section('content')

    <div class="container">
        <h1 class="mt-5 pt-5">Showing Task [ {{$task->title}} ]</h1>

        <div class="jumbotron text-center">
            <p>
                <strong>Task Title: </strong> {{ $task->title }} <br>
                <strong>Description: </strong> {{$task->description}}
            </p>
        </div>
    </div>

@endsection
