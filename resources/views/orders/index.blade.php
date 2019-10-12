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
              <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Ad</th>
                      <th>Telefon</th>
                      <th>Şehir</th>
                      <th>Fiyat</th>
                      <th>Durum</th>
                      <th>Ödeme Türü</th>
                      <th>Tarih</th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($orders as $order)
                      <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->phone_number}}</td>
                        <td>{{$order->cities->city_name}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->statuses->status}}</td>
                        <td>{{$order->payment_methods->method_name}}</td>
                        <td>{{ date('d-m-Y', strtotime($order->created_at)) }}</td>
                        <td><a href="{{route('orders.edit',$order->id)}}" class="btn btn-sm btn-outline-primary" >Edit</a></td>
                        <td><a target="_blank" href="{{route('orders.show',$order->id)}}" class="btn btn-sm btn-outline-primary" >Baskı</a></td>
                        <td>
                          <form id="rec_remove_{{$order->id}}" style="display:inline;" action="{{route('orders.destroy',$order->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="button" class="btn btn-sm btn-outline-danger" onclick="alertify.confirm('Silmek istediğine emin misin ?', function(){ document.getElementById('rec_remove_{{$order->id}}').submit(); });">Sil</button>
                          </form></td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
        </div>
    </div>
</div>

@endsection
