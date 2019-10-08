@csrf
<div class="form-group row">
    <label for="name-text-input" class="col-sm-2 col-form-label">Ad</label>
    <div class="col-sm-10">
        <input class="form-control" name="name" type="text" value="{{isset($orders->name) ? old('title',$orders->name) :''}}" id="name-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="surname-text-input" class="col-sm-2 col-form-label">Soyad</label>
    <div class="col-sm-10">
        <input class="form-control" name="surname" type="text" value="{{isset($orders->surname) ? old('title',$orders->surname) :''}}" id="surname-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="phoneNumber-tel-input" class="col-sm-2 col-form-label">Telefon</label>
    <div class="col-sm-10">
        <input class="form-control" name="phoneNumber" type="tel" value="{{isset($orders->phone_number) ? old('title',$orders->phone_number) :''}}" id="phoneNumber-tel-input">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Şehir</label>
    <div class="col-sm-10">
        <select class="form-control" name="city">
          @isset ($cities)
            @foreach ($cities as $city)
              <option value="{{$city->id}}" {{isset($orders->cities_id) && $city->id==$orders->cities_id ? 'selected' : ''}}>{{$city->city_name}}</option>
            @endforeach
          @endisset
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="address-text-input" class="col-sm-2 col-form-label">Adres</label>
    <div class="col-sm-10">
        <input class="form-control" name="address" type="text" value="{{isset($orders->address) ? old('title',$orders->address) :''}}" id="address-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="productCode-text-input" class="col-sm-2 col-form-label">Ürün Kodu</label>
    <div class="col-sm-10">
        <input class="form-control" name="productCode" type="text" value="{{isset($orders->product_code) ? old('title',$orders->product_code) :''}}" id="productCode-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="price-text-input" class="col-sm-2 col-form-label">Fiyat</label>
    <div class="col-sm-10">
        <input class="form-control" name="price" type="text" value="{{isset($orders->price) ? old('title',$orders->price) :''}}" id="price-text-input">
    </div>
</div>


<div class="form-group row">
    <label class="col-sm-2 col-form-label">Durum</label>
    <div class="col-sm-10">
        <select class="form-control" name="status">
          @isset ($statuses)
            @foreach ($statuses as $status)
              <option value="{{$status->id}}" {{isset($orders->statuses_id) && $status->id==$orders->statuses_id ? 'selected':''}}>{{$status->status}}</option>
            @endforeach
          @endisset
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Ödeme Türü</label>
    <div class="col-sm-10">
        <select class="form-control" name="paymentMethod">
          @isset ($payment_methods)
            @foreach ($payment_methods as $payment_method)
              <option value="{{$payment_method->id}}" {{isset($orders->payment_methods_id) && $payment_method->id==$orders->payment_methods_id ? 'selected':''}}>{{$payment_method->method_name}}</option>
            @endforeach
          @endisset
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="not-text-input" class="col-sm-2 col-form-label">Not</label>
    <div class="col-sm-10">
      <textarea id="textarea" name="note" class="form-control" maxlength="255" rows="3" placeholder="This textarea has a limit of 225 chars.">{{isset($orders->note) ? old('title',$orders->note) :''}}</textarea>
    </div>
</div>
<div class="form-group row">
  <div class="col-10">
    <div class="custom-control custom-checkbox">
      <input type="checkbox" name="controlAllowed" class="custom-control-input" id="controlAllowed" {{isset($orders->control_allowed) && $orders->control_allowed==1 ? 'checked' :''}}>
      <label class="custom-control-label font-weight-normal" for="controlAllowed">Kontrollü kargo</label>
    </div>
  </div>
</div>
<div class="form-group row">
  <div class="col-10">
    <div class="custom-control custom-checkbox">
      <input type="checkbox" name="paymentOnDoor" class="custom-control-input" id="paymentOnDoor" {{isset($orders->payment_on_door) && $orders->payment_on_door==1 ? 'checked' :''}}>
      <label class="custom-control-label font-weight-normal" for="paymentOnDoor">Gönderici Ödeme</label>
    </div>
  </div>
</div>
<button class="btn btn-info btn-block" type="submit">{{$buttonText}}</button>
