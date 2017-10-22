@section('header')

@endsection

@extends('layouts.app')

@section('content')
<button type="button" class="btn btn-primary" onclick="location.href='/';">Back to Homepage</button>
<button type="button" class="btn btn-primary" onclick="location.href='/customer/menu';">Go to Menu</button>
<center><p>กำลังรอ  <p class="h1"> 13</p> คิว</p></center>

<table class="table table-striped">
<thead>
<tr>
<th>Order#</th>
<th>รายการอาหาร</th>
<th>Qty</th>
<th>เวลาออเดอร์</th>
<th>สถานะ</th>
<th>ยกเลิก</th>
</tr>
</thead>
<tbody>
@foreach($orders as $order)
<form method="post" action="/customer/queue/delete">
  <input type="hidden" name="order_id" value="{{ $order->order_id}}">
  <input type="hidden" name="food_id" value="{{ $order->food_id}}">
  <input type="hidden" name="qty" value="{{ $order->Qty}}">
  <tr>
  <th scope="row">{{ $order->order_id}}</th>
  <td>{{$order->food_name}}</td>
  <td>{{$order->Qty}}</td>
  <td>{{$order->order_time}}</td>
  <td>
  @if ($order->serve_flag == 1)
    @if($oreder->delivery_flag == 0)
      เสิร์ฟแล้ว
    @else
      จัดส่งแล้ว
    @endif
  @elseif($order->cooking_flag == 1)
    กำลังทำอาหาร
  @else
    รอคิว
  @endif
  </td>
  <td>
    <button type="submit" class="btn btn-danger"
    @if($order->cooking_flag == 1)
      disabled
    @endif
    >ยกเลิก</button></td>
  </tr>
</form>
@endforeach

</tr>

</tbody>
</table>
<button type="button" class="btn btn-info" onclick="location.href='cus_payment.html';">ยืนยันจ่ายเงิน</button>


@endsection
