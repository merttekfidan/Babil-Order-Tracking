@extends('layouts.master')
@section('title')
  Test
@endsection

@section('content')
  <div class="row">
      <div class="col-12">
          <div class="card m-b-30">
              <div class="card-body">
                <h4 class="mt-0 header-title">Düzenle</h4>
                  <p class="text-muted m-b-30 font-14">Kargo Düzenleme Sayfası</p>
                  <form action="{{route('user.update',$users->id)}}" method="POST">
                      {{ method_field('PUT') }}
                      @include('user._form',['buttonText'=>"Düzenle"])
                  </form>
              </div>
          </div>
      </div>
  </div>
  <div class="card-body">

  </div>

@endsection
