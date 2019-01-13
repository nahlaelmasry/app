@extends('layouts.app')

@section('content')

<style>

  .header {
  padding: 30px;
  text-align: center;
   background: rgba(133, 104, 73, 0.33);
  color: #262626;
  font-size: 40px;
  font-family: sans-serif;
}

</style>



<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/img/v.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/v6.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/v5.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="/img/v1.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/v2.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/v4.jpg" alt="Third slide">
    </div>
  </div>
</div>


@endsection