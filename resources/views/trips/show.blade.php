@extends('layouts.app')

@section('page_title')
Home
@endsection

@section('content')
<div class="container">
   <div class="p-5 bg-light">
    <div class="container">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{$trip->image}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="img_linked" src="https://arenalmanoa.com/wp-content/uploads/2022/02/Tripadvisor-Award-LOGO-wide.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="img_linked" src="https://rentalsunited.com/site/assets/files/1189/premierpartner-web-booking.png" alt="Third slide">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h1 class="display-3">{{$trip->place}}</h1>
        <p class="lead">{{$trip->description}}</p>
        <hr class="my-2">
        <p class="lead">
            <a class="btn btn-success btn-lg" href="Jumbo action link" role="button">{{$trip->price}} &euro;</a>
        </p>
    </div>
   </div>
</div>
@endsection


