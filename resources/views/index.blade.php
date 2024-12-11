<!doctype html>
<html lang="en">
  <head>
  	<title>Login Buku Tamu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{asset('/frontend/css/style.css')}}">

	</head>
	<body class="img js-fullheight" style="background-image: url({{url('frontend/images/bg.jpg')}});">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 class="heading-section">Aplikasi Buku Tamu</h1>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Form Buku Tamu</h3>
                @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
                @endif
		      	<form action="{{url('simpan-bukutamu')}}" method="post" class="signin-form">
                    @csrf
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Nama" required>
		      		</div>
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Telepon" required>
		      		</div>
		      		<div class="form-group">
		      			<input type="email" class="form-control" placeholder="Email" required>
		      		</div>
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Alamat" required>
                    </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
			</div>
		</div>
	</section>
  <script src="{{asset('/fronted/js/jquery.min.js')}}"></script>
  <script src="{{asset('/fronted/js/popper.js')}}"></script>
  <script src="{{asset('/fronted/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/fronted/js/main.js')}}"></script>

	</body>
</html>

