@extends('layouts.app')
@section('title')
Delete a Employee
@endsection
@section('content')

<form action="/update/{{$employee->id}}" method="post" class="mt-4 p-4">
    @csrf
    <div class="form-group m-3">
        <label for="name">Name</label>
        <input type="text" class="form-control" value="{{$employee->name}}" name="name">
    </div>
    <div class="form-group m-3">
        <label for="address">Address</label>
        <textarea class="form-control" name="address"  rows="3"> {{$employee->address}} </textarea>
    </div>
    <div class="form-group m-3">
        <label for="salary">Salary</label>
        <textarea class="form-control" name="salary"  rows="3"> {{$employee->salary}} </textarea>
    </div>
    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Delete">
    </div>
</form>

@endsection
