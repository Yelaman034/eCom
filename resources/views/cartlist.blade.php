@extends('master')
@section("content")

<div class="custom-product">

    <div class="col-sm-10">
        <div class="trending-wrapper">
        <h2><strong>Сагс жагсаалт</strong></h2>
        <a class="btn btn-success" href="/ordernow">Худалдан авах</a> <br>  <br>
        <div class="">
        @foreach($products as $item)
        <div class="row searched-item card-list-devider">
            <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                <img class="trending-image" src="{{$item->photo}}">
                
                </a>
            </div>
            <div class="col-sm-3">
                <div class="">
                <b style="font-size:11.5px">{{$item->name}}</b>
                <h3 style="font-size:12px">{{$item->description}}</h3 >
                </div>
            </div>
            <div class="col-sm-3 ">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Устгах</a> 
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-primary">Худалдан авах</a>
            </div>
        </div>
        @endforeach 
        <a class="btn btn-success" href="/ordernow">Худалдан авах</a>
        </div>
        </div>
    </div>

</div>

@endsection