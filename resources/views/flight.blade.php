@extends('layouts.app')

@section('content')

<h1>List of Flight</h1>

<div class="flights">
    @foreach ($flights as $flight)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$flight->name}}</h5>
                <p class="card-text">{{$flight->airline}}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    @endforeach
</div>

@endsection