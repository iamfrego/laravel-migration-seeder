@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-white mb-5">List of Flight</h1>
    <div class="flights">
        <div class="container">
            <div class="row row-cols-4 gy-4">
                @foreach ($flights as $flight)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">Destinazione: {{$flight->name}}</h5>
                            <p class="card-text">Compagnia Aerea: {{$flight->airline}}</p>
                            <p class="card-text">Prezzo: {{$flight->price}}€</p>
                            <button type="button" class="btn btn-dark">Buy Now</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection