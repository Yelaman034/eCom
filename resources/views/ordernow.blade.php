@extends('master')
@section("content")

<div class="custom-product">

    <div class="col-sm-6">
    <table class="table table-dark">
 
  <tbody>
    <tr>
      <td>Дүн</td>
      <td>{{$total}}₮</td>
    </tr>
    <tr>
      <td>Татвар</td>
      <td>0</td>
    </tr>
    <tr>
      <td>Хүргэлт</td>
      <td>3000₮</td>
    </tr>
    <tr>
      <td>Нийт дүн</td>
      <td>{{$total + 3000}}₮</td>
    </tr>
  </tbody>
</table>

<form method='POST' action='orderplace'>
    @csrf
  <div class="form-group">
    <textarea placeholder="хүргэлтийн хаягаа оруулна уу"  name="address" class="form-control" id="email"> </textarea>
  </div>
  <div class="form-group">
    <label for="">Төлбөрийн нөхцөл</label>
    <p><input type="radio" value="cash" name="payment"><span>Мобайл</span></p>
    <p><input type="radio" value="cash" name="payment"><span>Карт</span></p>
    <p><input type="radio" value="cash" name="payment"><span>Qpay</span></p>
  </div>
  <button type="submit" class="btn btn-default">Захиалах</button>
</form>
    </div>

</div>

@endsection