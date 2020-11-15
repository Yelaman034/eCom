@extends('master')
@section("content")

<div class="container">
    <!--Section: Block Content-->
<section class="mb-5">

<div class="row">
  <div class="col-md-6 mb-4 mb-md-0">

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox">

      <div class="row product-gallery mx-1">

        <div class="col-12 mb-0">
                <figure class="view overlay rounded z-depth-1 main-img">
                <a href="#">
                <img style="margin-top:-20px" src="{{$product['photo']}}"
                    class="img-fluid z-depth-1">
                </a>
                </figure>
                
        </div>
        <div class="col-12">
          <div class="row">
            <!-- <div class="col-3">
              <div class="view overlay rounded z-depth-1 gallery-item">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                  class="img-fluid">
                <div class="mask rgba-white-slight"></div>
              </div>
            </div> -->
          </div>
        </div>
      </div>

    </div>

  </div>
  <div class="col-md-6 design">

    <p><strong>Ангилал:</strong>{{ $product['category']}}</p>
    <h3><strong>{{$product['name']}}</strong></h3>
    <div>
    <h6 style="color:gray">Худалдах үнэ</h6>
    <p><span class="mr-1 text"><strong>{{$product['price']}}</strong></span></p>
    </div>
    <p  class="pt-1">{{$product['description']}}</p>
    <div class="table-responsive">
      <table class="table table-sm table-borderless mb-0">
        <tbody>
          <tr>
            <th class="pl-0 w-25" scope="row"><strong>Барааны код:</strong></th>
            <td>{{$product['b_code']}}</td>
          </tr>
          <tr>
            <th class="pl-0 w-25" scope="row"><strong>Бренд:</strong></th>
            <td>{{$product['brend']}}</td>
          </tr>
          <tr>
            <th class="pl-0 w-25" scope="row"><strong>Өнгө:</strong></th>
            <td>{{$product['color']}}</td>
          </tr>
        </tbody>
      </table>
    </div>
    <hr>
    
    <button type="button" class="btn btn-primary btn-md mr-1 mb-2">ХУДАЛДАН АВАХ</button>
    <button type="button" class="btn btn-light btn-md mr-1 mb-2"><i
        class="fas fa-shopping-cart pr-2"></i>САГСАНД НЭМЭХ</button>
  </div>
</div>

</section>
<!--Section: Block Content-->
</div>


@endsection