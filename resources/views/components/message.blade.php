@if ($notification = Session::get('success'))
<div class="notification is-primary is-light">
  <strong>{{ $notification }}</strong>
</div>
@endif

@if ($notification = Session::get('error'))
<div class="notification is-danger is-light">
  <strong>{{ $notification }}</strong>
</div>
@endif

@if ($notification = Session::get('warning'))
<div class="notification is-warning is-light">
  <strong>{{ $notification }}</strong>
</div>
@endif

@if ($notification = Session::get('info'))
<div class="notification is-info is-light">
  <strong>session{{ $notification }}</strong>
</div>
@endif

@if ($errors->any())
<div class="notification is-danger is-light">
  Please check the form below for errors
</div>
@endif
