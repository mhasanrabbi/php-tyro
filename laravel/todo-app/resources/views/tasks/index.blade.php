@extends('layout')
@section('content')

<h1>Task List</h1>
@foreach ($tasks as $task)
<div class="card mb-4">
    <div class="card-body">
        <p>
            {{$task->description}}
        </p>
        <a href="" class="btn btn-secondary ">Complete</a>
    </div>
</div>
@endforeach
<a href="/tasks/create" class="btn btn-primary btn-lg btn-block">New Task</a>
@endsection
