@extends('layouts.master')
@section('title')
  Test
@endsection

@section('content')



 @include('layouts._alert')

 <div class="row">
     <div class="col-12">
         <div class="card m-b-30">
            <div class="card-body">
              <div class="input-daterange input-group " id="date-range">
              <div>Tarih : {{ date('d-m-Y', strtotime(Carbon\Carbon::now())) }}</div>
              <table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Ürün</th>
                      <th>Ad</th>
                      <th>Telefon</th>
                      <th>Şehir</th>
                      <th>Fiyat</th>
                      <th>Durum</th>
                      <th>Ödeme Türü</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $counter=0;
                    @endphp
                    @foreach ($orders as $order)
                      <tr>
                        <td>{{++$counter}}</td>
                        <td>{{$order->product_code}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->phone_number}}</td>
                        <td>{{$order->cities->city_name}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->statuses->status}}</td>
                        <td>{{$order->payment_methods->method_name}}</td>
                      </tr>
                    @endforeach
                  </tbody>

              </table>
              <p><h4>Toplam Müşteri : {{$counter}} <br><hr> Toplam Ürün : {{$products_count}}</h4></p>
          </div>
        </div>
    </div>
</div>

@endsection
