<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DeskApp - Login</title>

	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/vendors/images/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/vendors/images/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/vendors/images/favicon-16x16.png') }}">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('assets/vendors/styles/core.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendors/styles/icon-font.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendors/styles/style.css') }}">
</head>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="{{ route('login') }}">
					<img src="{{ asset('assets/vendors/images/deskapp-logo.svg') }}" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="{{ route('register') }}">Register</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="{{ asset('assets/vendors/images/login-page-img.png') }}" alt="">
				</div>

				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Login To DeskApp</h2>
						</div>

						<form>
		

							<div class="input-group custom">
								<input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>

							<div class="input-group custom">
								<input type="password" name="password" class="form-control form-control-lg" placeholder="**********" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>

							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="remember" name="remember">
										<label class="custom-control-label" for="remember">Remember</label>
									</div>
								</div>
							</div>

							<div class="input-group mb-0">
								<a href="{{ url('/dashboard') }}" class="btn btn-primary btn-lg btn-block">Sign In</a>
							</div>

							<div class="font-16 weight-600 pt-10 pb-10 text-center">OR</div>

							<div class="input-group mb-0">
								<a class="btn btn-outline-primary btn-lg btn-block" href="{{ route('register') }}">
									Register To Create Account
								</a>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="{{ asset('assets/vendors/scripts/core.js') }}"></script>
	<script src="{{ asset('assets/vendors/scripts/script.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/scripts/process.js') }}"></script>
	<script src="{{ asset('assets/vendors/scripts/layout-settings.js') }}"></script>
</body>
</html>
