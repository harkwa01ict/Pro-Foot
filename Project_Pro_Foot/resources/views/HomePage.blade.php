@extends('pagefeature');

@section('content')
<div>
    <img src="{{asset('images/Stade.jpg')}}" class="d-block w-100" alt="" width="400" height="400">
    <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda eaque fugiat nulla</p>
</div>
<div class="angi">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="{{asset('images/coupe.jpg')}}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{asset('images/footchest.jpg')}}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{asset('images/footgirl.jpeg')}}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{asset('images/footkid.jpg')}}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{asset('images/stadium.jpg')}}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{asset('images/sunsetfoot.jpg')}}" class="d-block w-100" alt="">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
@endsection