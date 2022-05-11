@extends('layouts.app')
@section('title')
Edit Todo
@endsection
@section('content')

<form action="/update/" method="post" class="mt-4 p-4">

    @csrf
    @foreach ($todolist as $todo)
        <input type="hidden" name="id" value="{{$todo->id}}">
        <div class="form-group m-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" value="{{$todo->name}}" name="name">
        </div>
        <div class="form-group m-3">
            <label for="description">Description</label>
            <textarea class="form-control" name="description"  rows="3"> {{$todo->description}} </textarea>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Update">
        </div>
    @endforeach
</form>

@endsection
