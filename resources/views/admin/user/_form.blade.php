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
    <label for="name-text-input" class="col-sm-2 col-form-label">Ad</label>
    <div class="col-sm-10">
        <input class="form-control" name="name" type="text" value="">
    </div>
</div>
<div class="form-group row">
    <label for="name-text-input" class="col-sm-2 col-form-label">Soyad</label>
    <div class="col-sm-10">
        <input class="form-control" name="surname" type="text" value="">
    </div>
</div>
<div class="form-group row">
    <label for="name-text-input" class="col-sm-2 col-form-label">Nickname</label>
    <div class="col-sm-10">
        <input class="form-control" name="nickname" type="text" value="">
    </div>
</div>
<div class="form-group row">
    <label for="name-text-input" class="col-sm-2 col-form-label">Telefon</label>
    <div class="col-sm-10">
        <input class="form-control" name="phone_number" type="text" value="">
    </div>
</div>
<div class="form-group row">
    <label for="name-text-input" class="col-sm-2 col-form-label">E-mail</label>
    <div class="col-sm-10">
        <input class="form-control" name="email" type="text" value="">
    </div>
</div>
<div class="form-group row">
    <label for="name-text-input" class="col-sm-2 col-form-label">Şifre</label>
    <div class="col-sm-10">
        <input class="form-control" name="password" type="password" value="">
    </div>
</div>
<div class="form-group row">
    <label for="name-text-input" class="col-sm-2 col-form-label">Şifre (Tekrar)</label>
    <div class="col-sm-10">
        <input class="form-control" name="password2" type="password" value="">
    </div>
</div>
<div class="form-group row">
    <label for="name-text-input" class="col-sm-2 col-form-label">Rol</label>
    <div class="col-sm-10">
        <div class="form-group">
          <select multiple class="form-control" name="roles[]">
            @can('isAdmin',Auth::user())
              @foreach ($roles as $role)
                <option value="{{ $role->id }}">{{ $role->role }}</option>
              @endforeach
            @endcan
          </select>
        </div>
    </div>
</div>


<button class="btn btn-info btn-block" type="submit">{{$buttonText}}</button>
