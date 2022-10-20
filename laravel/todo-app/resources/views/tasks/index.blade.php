@extends('layout')
@section('content')

<h1>Task List</h1>
@foreach ($tasks as $task)
<div class="card mb-4">
    <div class="card-body">
        <p>
            {{$task->description}}
            @if($task->isCompleted())
            <span class="badge badge-success">Completed</span>
        @endif
        </p>

        <form action="/tasks/{{ $task->id }}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit" class="btn btn-secondary btn-block">Complete</button>
        </form>
    </div>
</div>
@endforeach
<a href="/tasks/create" class="btn btn-primary btn-lg btn-block">New Task</a>
@endsection
