@extends('layouts.app')

@section('title')
Details
@endsection

@section('content')
<div class="card text-center mt-5">

    <div class="card-header">
        <b>EMPLOYEE'S DETAILS</b>
    </div>

    @foreach ($employee as $employee )
        <div class="card-body">
            <h5 class="card-title">{{$employee ->name}}</h5> 
            <p class="card-text">{{$employee ->address}}</p>
            <p class="card-text">{{$employee ->salary}}</p>
            <a href="/edit/{{$employee ->id}}"><span class="btn btn-primary">Edit</span></a>
            <a href="/delete/{{$employee ->id}}"><span class="btn btn-danger">Delete</span></a>
        </div>
    @endforeach
</div>

@endsection