@extends('layouts.app')

@section('title')
Details
@endsection

@section('content')
<div class="card text-center mt-5">

    <div class="card-header">
        <b>EMPLOYEE'S DETAILS</b>
    </div>

    @foreach ($employee as $e)
        <div class="card-body">
            <h5 class="card-title">{{$e->name}}</h5> 
            <p class="card-text">{{$e->address}}</p>
            <p class="card-text">{{$e->salary}}</p>
            <a href="/edit/{{$e->id}}"><span class="btn btn-primary">Edit</span></a>
            <a href="/delete/{{$e->id}}"><span class="btn btn-danger">Delete</span></a>
        </div>
    @endforeach
</div>

@endsection