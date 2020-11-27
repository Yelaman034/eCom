@extends('master')
@section("content")

<div class="custom-product">

    <div class="trending-wrapper">
    <h4><strong>Хайлтын үр дүн</strong></h4>
    @foreach($products as $item)
    <div class="searched-item">
        <a href="detail/{{$item['id']}}">
        <img class="trending-image" src="{{$item['photo']}}">
        <div class="">
        <b style="font-size:11.5px">{{$item['name']}}</b>
        <h3 style="font-size:12px">{{$item['description']}}</h3 >
        </div>
        </a>
    </div>
    @endforeach
    </div>
</div>

@endsection