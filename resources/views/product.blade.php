@extends('master')
@section("content")

<div class="custom-product">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    
  @foreach($products as $item)
    <div class="item {{$item['id']==1?'active':''}}">
      <img class="slider-img" src="{{$item['photo']}}" alt="New York">
      <div class="carousel-caption">
        <h3 style="color:black">{{$item['name']}}</h3>
        <p  style="color:black">{{$item['description']}}</p>
      </div>
    </div>
@endforeach
    

    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <div class="trending-wrapper">
    <h3>Бүтээгдэхүүнүүд</h3>
    @foreach($products as $item)
    <div class="trending-item">
    <img class="trending-image" src="{{$item['photo']}}">
    <div class="">
    <b style="font-size:11.5px">{{$item['name']}}</b>
    <h3 style="font-size:12px">{{$item['price']}}</h3>
    </div>
    </div>
    @endforeach
    </div>
    </div>
</div>

@endsection