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
              <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Ad</th>
                      <th>Soyad</th>
                      <th>Nickname</th>
                      <th>Telefon Numarası</th>
                      <th>Email</th>
                      <th>Son online</th>
                      <th>Yetki</th>
                      <th>Durum</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                      <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->surname}}</td>
                        <td>{{$user->nickname}}</td>
                        <td>{{$user->phone_number}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{date('d.m.Y',strtotime($user->last_online))}}</td>
                        <td>@foreach($user->roles as $role) {{ $role->role }} @endforeach</td>
                        <td>@if ($user->active==1) <span class="badge badge-primary">Aktif</span>@else <span class="badge badge-danger">Bloklu</span>@endif </td>


                        <td><a href="{{route('user.edit',$user->id)}}" class="btn btn-sm btn-outline-primary" >Edit</a></td>
                        <td>
                          @if($user->active==1)
                          <form id="rec_remove_{{$user->id}}" style="display:inline;" action="{{route('admin.user.destroy',$user->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="button" class="btn btn-sm btn-outline-danger" onclick="alertify.confirm('Bloklamak istediğine emin misin ?', function(){ document.getElementById('rec_remove_{{$user->id}}').submit(); });">Blokla</button>
                          </form>
                          @else
                            <form id="rec_remove_{{$user->id}}" style="display:inline;" action="{{route('admin.user.active',$user->id)}}" method="post">
                                @csrf
                                <button type="button" class="btn btn-sm btn-outline-primary" onclick="alertify.confirm('Aktif etmek istediğine emin misin ?', function(){ document.getElementById('rec_remove_{{$user->id}}').submit(); });">Aktif et</button>
                            </form>
                          @endif
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
        </div>
    </div>
</div>

@endsection
