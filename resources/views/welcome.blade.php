<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap-4/css/bootstrap.min.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="/">CHIKADMIN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      	@auth
      		<a class="nav-link" href="{{ route('admin') }}">Dashboard</a>
      	@else
      		<a class="nav-link" href="{{ route('login') }}">Login</a>
      	@endauth
      </li>
    </ul>
    <span class="navbar-text">

    </span>
  </div>
</nav>

<div class="container-fluid mt-5">
	
	<div class="jumbotron">
	  <h1 class="display-4">Selamat Datang di CHIKADMIN</h1>
	  <p class="lead">Chikadmin adalah simpel starter sb-admin-2 untuk laravel, keuntungannya adalah kita tidak harus mengintegrasikan sb-admin-2 dari awal.</p>
	  <hr class="my-4">
	  <b><p class="">Beberapa fitur simpel : </p></b>
	  <ul>
	  	<li>Login</li>
	  	<li>Yajra ServerSide Datatable</li>
	  </ul>

	  <b><p class="text-primary">Username & Email Login : </p></b>
	  <ul>
	  	<li>email : admin@gmail.com</li>
	  	<li>password : password</li>
	  </ul>
	</div>

</div>
<script type="text/javascript" src="{{ asset('plugins/bootstrap-4/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap-4/js/bootstrap.min.js') }}"></script>
</body>
</html>