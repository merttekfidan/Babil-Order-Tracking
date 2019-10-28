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
    <label for="name-text-input" class="col-sm-2 col-form-label">Kargo Şirketi ismi</label>
    <div class="col-sm-10">
        <input class="form-control" name="name" type="text" value="{{isset($shipping_companies->shipping_company) ? $shipping_companies->shipping_company :''}}">
    </div>
</div>
<div class="form-group row">
    <label for="name-text-input" class="col-sm-2 col-form-label">Kod</label>
    <div class="col-sm-10">
        <input class="form-control" name="code" type="text" value="{{isset($shipping_companies->code) ? $shipping_companies->code :''}}">
    </div>
</div>
<button class="btn btn-info btn-block" type="submit">{{$buttonText}}</button>
