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
                      <th>Şirket ismi</th>
                      <th>Kodu</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($shipping_companies as $company)
                      <tr>
                        <td>{{$company->shipping_company}}</td>
                        <td>{{$company->code}}</td>
                        <td><a href="{{route('admin.shipping_companies.edit',$company->id)}}" class="btn btn-sm btn-outline-primary" >Edit</a></td>
                        <td>
                          <form id="rec_remove_{{$company->id}}" style="display:inline;" action="{{route('admin.shipping_companies.destroy',$company->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="button" class="btn btn-sm btn-outline-danger" onclick="alertify.confirm('Silmek istediğine emin misin ?', function(){ document.getElementById('rec_remove_{{$company->id}}').submit(); });">Sil</button>
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
