@if($flash=Session::get('success'))
<div class="alert alert-success" role="alert">
  {{ $flash }}
</div>
@endif

@if($flash=Session::get('info'))
<div class="alert alert-info" role="alert">
  {{ $flash }}
</div>
@endif

@if($flash=Session::get('warning'))
<div class="alert alert-warning" role="alert">
  {{ $flash }}
</div>
@endif

@if($flash=Session::get('error'))
<div class="alert alert-danger" role="alert">
  {{ $flash }}
</div>
@endif