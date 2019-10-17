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
                  <p class="text-muted m-b-30 font-14">Reklam Ekleme Sayfası</p>
                  <form action="{{route('commercials.store')}}" method="POST">
                      @include('commercials._form',['buttonText'=>"Gönder"])
                  </form>
              </div>
          </div>
      </div>
  </div>
  <div class="card-body">

  </div>

@endsection
