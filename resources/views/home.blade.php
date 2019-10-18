@extends('layout.layout')

@section ('content')
<h3><strong>Tablates</strong></h3>
<div class="card bg-dark text-white">
    <div class="card-body">
 <img class="card-img" src="storage/uploads/images/beach-clouds-dawn-635279.png" alt="Card image">
  <div class="card-img-overlay">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ storage_path('app/public/uploads/images/2019-06-30.png') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="storage/uploads/images/web.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="storage/uploads/images/web1.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="storage/uploads/images/web2.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!--<h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p>-->
  </div>
</div>
</div>
@endsection
