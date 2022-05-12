@extends('layouts.app')
@section('title')
Employees Management App
@endsection
@section('content')

<div class="row mt-3">
    <div class="col-12 align-self-center">
        <ul class="list-group">
            @foreach($employee as $e)
            <li class="list-group-item"><a href="show/{{$e->id}}" style="color: cornflowerblue">{{$e->name}}</a></li>
            @endforeach
        </ul>
    </div>
</div>

@endsection
