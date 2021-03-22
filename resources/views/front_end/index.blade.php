@extends('front_end.master.master')

@section('title')
Feni doctors
@endsection

@section('body')



<div class="slider ">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner carousel_height" >
      <div class="carousel-item active">
        <img src="{{asset('/')}}public/front_end/img/bg1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('/')}}public/front_end/img/bg2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('/')}}public/front_end/img/bg3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<div class="service container text-center" >
  <div class="row ">
    <div class="col-md-4">
      <a href="#"><img src="{{asset('/')}}public/front_end/img/ambulance.png"  alt=""></a>
    </div>
    <div class="col-md-4">
      <a href="#"><img src="{{asset('/')}}public/front_end/img/blood.png"  alt=""></a>
    </div>
    <div class="col-md-4">
      <a href="#"><img src="{{asset('/')}}public/front_end/img/fire.png"  alt=""></a>
    </div>
  </div>

  <div class="row ">
    <div class="col-md-6">
      <a href="#"><img src="{{asset('/')}}public/front_end/img/hospital.png"  alt=""></a>
    </div>
    <div class="col-md-6">
      <a href="#"><img src="{{asset('/')}}public/front_end/img/police.png"  alt=""></a>
    </div>
  </div>
</div>

@endsection