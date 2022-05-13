@extends('layouts.app')

@section('title')
Create Employee details
@endsection

@section('content')

<form action="/store-data" method="post" class="mt-4 p-4">
@csrf
    <div class="form-group m-3">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group m-3">
        <label for="address">Address</label>
        <textarea class="form-control" name="address" rows="3"></textarea>
    </div>
    <div class="form-group m-3">
        <label for="salary">Salary</label>
        <textarea class="form-control" name="salary" rows="3"></textarea>
    </div>
    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Insert">
    </div>
</form>

@endsection
