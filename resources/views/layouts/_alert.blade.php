@if (session('success'))
  <div class="alert alert-success" role="alert">
    <strong>Bravo aslan!</strong> {{session('success')}}
  </div>
@endif
@if (session('info'))
  <div class="alert alert-info" role="alert">
    <strong>Well done!</strong> You successfully read this important alert message.
  </div>
@endif
@if (session('danger'))
  <div class="alert alert-danger" role="alert">
    <strong>Aga sorun var!</strong> Bir şeyler yanlış gitti.
  </div>
@endif
