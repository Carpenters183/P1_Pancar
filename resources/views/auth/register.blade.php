<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DeskApp - Register</title>

	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/vendors/images/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/vendors/images/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/vendors/images/favicon-16x16.png') }}">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('assets/vendors/styles/core.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendors/styles/icon-font.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/src/plugins/jquery-steps/jquery.steps.css') }}">
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
					<li><a href="{{ route('login') }}">Login</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="{{ asset('assets/vendors/images/register-page-img.png') }}" alt="">
				</div>

				<div class="col-md-6 col-lg-5">
					<div class="register-box bg-white box-shadow border-radius-10">
						<div class="wizard-content">

							<form method="POST" action="{{ route('register') }}" class="tab-wizard2 wizard-circle wizard">
								@csrf

								<h5>Basic Account Credentials</h5>
								<section>
									<div class="form-group">
										<input type="email" name="email" class="form-control" placeholder="Email" required>
									</div>
									<div class="form-group">
										<input type="text" name="name" class="form-control" placeholder="Full Name" required>
									</div>
									<div class="form-group">
										<input type="password" name="password" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
									</div>
								</section>

							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="{{ asset('assets/vendors/scripts/core.js') }}"></script>
	<script src="{{ asset('assets/vendors/scripts/script.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/scripts/process.js') }}"></script>
	<script src="{{ asset('assets/vendors/scripts/layout-settings.js') }}"></script>
	<script src="{{ asset('assets/src/plugins/jquery-steps/jquery.steps.js') }}"></script>
	<script src="{{ asset('assets/vendors/scripts/steps-setting.js') }}"></script>
</body>
</html>
