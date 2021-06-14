@extends('front_end.master.master')

@section('title')
Feni doctors
@endsection

@section('body')


<!-- slider start -->
<div class="slider">
  <div style="z-index: -1;" id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner carousel_height" >
      <div class="carousel-item active">
        <img src="{{asset('/')}}{{$firstSlide->image}}" class="d-block w-100" alt="image">
      </div>
      <div class="carousel-item">
        <img src="{{asset('/')}}{{$secondSlide->image}}" class="d-block w-100" alt="image">
      </div>
      <div class="carousel-item">
        <img src="{{asset('/')}}{{$thirdSlide->image}}" class="d-block w-100" alt="image">
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

<!-- slider end -->

<div class="service container text-center mt-3 mb-3" style="box-shadow: 0px 0px 5px #41464b;">
  <div class="row ">
    <div class="col-md-4">
      <a href="{{route('alloambulance')}}"><img class="img-responsive service_img" src="{{asset('/')}}public/front_end/img/ambulance.png"  alt=""></a>
    </div>
    <div class="col-md-4">
      <a href="{{route('blood_group')}}"><img class="img-responsive service_img" src="{{asset('/')}}public/front_end/img/blood.png"  alt=""></a>
    </div>
    <div class="col-md-4">
      <a href="{{route('fireservice')}}"><img class="img-responsive service_img" src="{{asset('/')}}public/front_end/img/fire.png"  alt=""></a>
    </div>
  </div>

  <div class="row ">
    <div class="col-md-6">
      <a href="{{route('hospital')}}"><img class="img-responsive service_img" src="{{asset('/')}}public/front_end/img/hospital.png"  alt=""></a>
    </div>
    <div class="col-md-6">
      <a href="{{route('police')}}"><img class="img-responsive service_img" src="{{asset('/')}}public/front_end/img/police.png"  alt=""></a>
    </div>
  </div>
</div>

@endsection