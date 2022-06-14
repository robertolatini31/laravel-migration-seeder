@extends('layouts.app')

@section('page_title')
Home
@endsection

@section('content')
<div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @forelse($trips as $trip)
            <div class="col">
                <div class="card shadow">
                    <a href="{{route('trip.show', $trip)}}">
                        <img src="{{$trip->image}}" alt="{{$trip->place}}" class="img-fluid rounded-top">
                    </a>
                    <div class="card-body d-flex flex-column ">
                        <h3>{{$trip->place}}</h3>
                        <p>{{$trip->description}}</p>
                        <button class="align-self-end btn-success p-2 rounded-pill shadow">{{$trip->price}}&euro;</button>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">no trips aviable</p>
        @endforelse
    </div>
</div>
@endsection
