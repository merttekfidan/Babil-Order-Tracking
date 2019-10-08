@extends('layouts.master')
@section('title')
  Test
@endsection

@section('content')
  <div class="row">
      <div class="col-12">
          <div class="card m-b-30">
              <div class="card-body">
                <h4 class="mt-0 header-title">Yeni oluştur</h4>
                  <p class="text-muted m-b-30 font-14">Sipariş Ekleme Sayfası</p>
                  <form action="{{route('orders.store')}}" method="POST">
                      @include('orders._form',['buttonText'=>"Gönder"])
                  </form>
              </div>
          </div>
      </div>
  </div>
  <div class="card-body">

  </div>

@endsection
