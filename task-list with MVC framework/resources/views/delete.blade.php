@extends('layouts.app')
@section('title')
Delete Tasklist
@endsection
@section('content')

<form action="/delete/{{$todos->id}}" method="post" class="mt-4 p-4">
    @csrf
    <div class="form-group m-3">
        <label for="name">Name</label>
        <input type="text" class="form-control" value="{{$todos->name}}" name="name">
    </div>
    <div class="form-group m-3">
        <label for="description">Description</label>
        <textarea class="form-control" name="description"  rows="3"> {{$todos->description}} </textarea>
    </div>
    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Delete">
    </div>
</form>

@endsection
