@extends('layout')
@section('content')

<h1>New Task</h1>
@if($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
</div>
@endif
<form action="/tasks" method="post">
    @csrf
    <div class="form-group">
        <label for="description">Task Description</label>
        <input class="form-control" name="description" type="text">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Create Task</button>
    </div>
</form>
@endsection
