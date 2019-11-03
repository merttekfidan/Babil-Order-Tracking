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
        <input class="form-control" name="name" type="text" value="{{isset($users->name) ? $users->name :''}}">
    </div>
</div>
<div class="form-group row">
    <label for="name-text-input" class="col-sm-2 col-form-label">Soyad</label>
    <div class="col-sm-10">
        <input class="form-control" name="surname" type="text" value="{{isset($users->surname) ? $users->surname :''}}">
    </div>
</div>
<div class="form-group row">
    <label for="name-text-input" class="col-sm-2 col-form-label">Nickname</label>
    <div class="col-sm-10">
        <input class="form-control" name="nickname" type="text" value="{{isset($users->nickname) ? $users->nickname :''}}">
    </div>
</div>
<div class="form-group row">
    <label for="name-text-input" class="col-sm-2 col-form-label">Telefon</label>
    <div class="col-sm-10">
        <input class="form-control" name="phone_number" type="text" value="{{isset($users->phone_number) ? $users->phone_number :''}}">
    </div>
</div>
<div class="form-group row">
    <label for="name-text-input" class="col-sm-2 col-form-label">E-mail</label>
    <div class="col-sm-10">
        <input class="form-control" name="email" type="text" value="{{isset($users->email) ? $users->email :''}}">
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
                <option
                    @foreach ($users->roles as $userRole)
                        {{ $userRole->id==$role->id ? 'selected' :'' }}
                    @endforeach
                value="{{ $role->id }}">{{ $role->role }}</option>
              @endforeach
            @elsecan('update', Auth::user()))
              @foreach ($users->roles as $role)
                <option disabled  value="{{ $role->id }}">{{$role->role}}</option>
              @endforeach
            @endcan
          </select>
        </div>
    </div>
</div>


<button class="btn btn-info btn-block" type="submit">{{$buttonText}}</button>
