@extends('layouts.app')
@section('title')
Edit Employee's Details
@endsection
@section('content')

<form action="/update/" method="post" class="mt-4 p-4">

    @csrf
    @foreach ($employee as $e)
        <input type="hidden" name="id" value="{{$e->id}}">
        <div class="form-group m-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" value="{{$e->name}}" name="name">
        </div>
        <div class="form-group m-3">
            <label for="address">Address</label>
            <textarea class="form-control" name="description"  rows="3"> {{$e->address}} </textarea>
        </div>
        <div class="form-group m-3">
            <label for="salary">Salary</label>
            <textarea class="form-control" name="description"  rows="3"> {{$e->salary}} </textarea>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Edit">
        </div>
    @endforeach
</form>

@endsection
