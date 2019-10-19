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
                <form method="POST" action="{{route('commercials.index')}}">
                  {{ csrf_field() }}
                  <input type="text" class="form-control" name="start" placeholder="Start Date" />
                  <input type="text" class="form-control" name="end" placeholder="End Date" />
                  <button type="button" class="btn btn-success waves-effect waves-light">Filtrele</button>
                </form>
              </div>
              <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Şirket ismi</th>
                      <th>Fiyat</th>
                      <th>Tarih</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($commercials as $commercial)
                      <tr>
                        <td>{{$commercial->name}}</td>
                        <td>{{$commercial->price}}</td>
                        <td>{{ date('d-m-Y', strtotime($commercial->date)) }}</td>
                        <td><a href="{{route('commercials.edit',$commercial->id)}}" class="btn btn-sm btn-outline-primary" >Edit</a></td>
                        <td>
                          <form id="rec_remove_{{$commercial->id}}" style="display:inline;" action="{{route('commercials.destroy',$commercial->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="button" class="btn btn-sm btn-outline-danger" onclick="alertify.confirm('Silmek istediğine emin misin ?', function(){ document.getElementById('rec_remove_{{$commercial->id}}').submit(); });">Sil</button>
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
