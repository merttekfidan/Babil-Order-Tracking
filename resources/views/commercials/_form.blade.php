@csrf
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group row">
    <label for="name-text-input" class="col-sm-2 col-form-label">Reklam Şirketi</label>
    <div class="col-sm-10">
        <input class="form-control" name="name" type="text" value="{{isset($commercial->name) ? old('title',$commercial->name) :'Facebook'}}" id="name-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="name-text-input" class="col-sm-2 col-form-label">Fiyat</label>
    <div class="col-sm-10">
        <input class="form-control" name="price" type="text" value="{{isset($commercial->price) ? old('title',$commercial->price) :''}}" id="name-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="name-text-input" class="col-sm-2 col-form-label">Tarih</label>
    <div class="col-sm-10">
        <input class="form-control" name="date" type="text" value="{{isset($commercial->date) ? old('title',date('d-m-Y',strtotime($commercial->date))) :date('d-m-Y') }}">
    </div>
</div>
<button class="btn btn-info btn-block" type="submit">{{$buttonText}}</button>
