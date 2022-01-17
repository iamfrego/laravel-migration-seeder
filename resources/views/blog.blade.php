@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-white mb-5">List of Articles</h1>
    <div class="blogs">
        <div class="container">
            <div class="row row-cols-4 gy-4">
                @foreach ($blogs as $blog)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">{{$blog->title}}</h5>
                            <p class="card-text">{{$blog->article}}€</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection