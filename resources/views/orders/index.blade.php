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
                <form method="POST" action="{{route('orders.index')}}">
                  {{ csrf_field() }}
                  <input type="text" class="form-control" name="start" placeholder="Start Date" />
                  <input type="text" class="form-control" name="end" placeholder="End Date" />
                  <button type="button" class="btn btn-success waves-effect waves-light">Filtrele</button>
                </form>
              </div>
              <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer">
                  <thead>
                    <tr>
                      <th>Ad</th>
                      <th>Soyad</th>
                      <th>Telefon</th>
                      <th>Adres</th>
                      <th>Ürün Kodu</th>
                      <th>Fiyat</th>
                      <th>Durum</th>
                      <th>Not</th>
                      <th>Ödeme Türü</th>
                      <th>Kontrollü Kargo</th>
                      <th>Tarih</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($orders as $order)
                      <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->surname}}</td>
                        <td>{{$order->phone_number}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->product_code}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->statuses->status}}</td>
                        <td>{{$order->note}}</td>
                        <td>{{$order->payment_methods->method_name}}</td>
                        <td>@if ($order->control_allowed == true) <span class="ion-checkmark-round"></span> @endif</td>
                        <td>{{ date('d-m-Y', strtotime($order->created_at)) }}</td>
                        <td><a href="{{route('orders.edit',$order->id)}}" class="btn btn-sm btn-outline-primary" >Edit</a></td>
                        <td><a target="_blank" href="{{route('orders.show',$order->id)}}" class="btn btn-sm btn-outline-primary" >Baskı</a></td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
        </div>
    </div>
</div>
@endsection
