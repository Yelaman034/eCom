@extends('master')
@section("content")

<div class="custom-product">

    <div class="col-sm-10">
        <div class="trending-wrapper">
        <h2><strong>Захиалгын жагсаалт</strong></h2>
        <div class="">
        @foreach($orders as $item)
        <div class="row searched-item card-list-devider">
            <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                <img class="trending-image" src="{{$item->photo}}">
                
                </a>
            </div>
            <div class="col-sm-3">
                <div class="">
                <b style="font-size:11.5px">{{$item->name}}</b>
                <h3 style="font-size:12px">Хүргэлтийн төлөв:{{$item->status}}</h3 >
                <h3 style="font-size:12px">Төлбөрийн төлөв:{{$item->payment_status}}</h3 >
                <h3 style="font-size:12px">Төлбөрийн нөхцөл:{{$item->payment_method}}</h3 >
                <h3 style="font-size:12px">Хүргэлтийн хаяг:{{$item->address}}</h3 >
                <h3 style="font-size:12px">Дүн:{{$item->price}}₮</h3 >
                </div>
            </div>
            <div class="col-sm-3 ">
                
            </div>
        </div>
        @endforeach 
        </div>
        </div>
    </div>

</div>

@endsection