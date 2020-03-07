<!DOCTYPE html>
<html>
<head>
		<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Euro 2020 - Login</title>

	<!-- Site favicon -->
	<!-- <link rel="shortcut icon" href="images/favicon.ico"> -->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="src/styles/style.css">


</head>
<body>
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
			<img src="src/images/logo.png" alt="login" class="login-img">
			<h2 class="text-center mb-30">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                        @csrf
				<div class="input-group custom input-group-lg">
					<input type="text" class="form-control" placeholder="Email" name="email">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
                </div>
				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" placeholder="**********" name="password">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="form-check input-group">
					<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

					<label class="form-check-label" for="remember">
						{{ __('Zapamti me') }}
					</label>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="input-group">
							<!--
								use code for form submit
								<input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Sign In">
                            -->
                            <button type="submit" class="btn btn-outline-primary btn-lg btn-block">
                                    {{ __('Prijava') }}
                                </button>
							<!-- <a class="btn btn-outline-primary btn-lg btn-block" href="index.php">Sign In</a> -->
						</div>
					</div>
					<div class="col-sm-6">
						<div class="forgot-password"><a href="{{ route('password.request') }}">Zaboravljena lozinka</a></div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
					<div class="register pl-1">Nemaš račun? <a href="/register">Registriraj se</a></div>
					</div>
				</div>
			</form>
		</div>
	</div>
		<!-- js -->
    <!-- <script src="vendors/scripts/script.js"></script> -->
</body>
</html>