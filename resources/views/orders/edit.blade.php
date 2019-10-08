@extends('layouts.master')
@section('title')
  Test
@endsection

@section('content')
  <div class="row">
      <div class="col-12">
          <div class="card m-b-30">
              <div class="card-body">
                <h4 class="mt-0 header-title">Güncelle</h4>
                <p class="text-muted m-b-30 font-14">Sipariş Güncelleme sayfası</p>
                  <form action="{{route('orders.update',$orders->id)}}" method="post">
                      {{ method_field('PUT') }}
                      @include('orders._form',['buttonText'=>"Düzenle"])
                  </form>
              </div>
          </div>
      </div>
  </div>

@endsection
