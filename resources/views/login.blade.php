<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<title>Rádio Desopila - Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link href="imgR/icons/faviconRA.ico" rel="icon">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorL/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fontsL/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fontsL/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorL/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendorL/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorL/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorL/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendorL/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('imgL/SquareRadio.jpeg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form action="{{ route('login') }}" class="login100-form validate-form" method="post">
					@csrf
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Usuário</span>
						<input class="input100" type="email" id="email" name="email" placeholder="Digite seu email" required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Senha</span>
						<input class="input100" type="password" id="password" name="password"  placeholder="Digite sua senha" required>
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						@if (Route::has('password.request'))
						<a href="#">
							Esqueceu a senha?
						</a>
						@endif
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" action="/login">
								Login
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Nossas redes sociais!
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Ainda não se cadastrou?
						</span>

						<a href="/register" class="txt2">
							Cadastre-se!
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendorL/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorL/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorL/bootstrap/js/popper.js"></script>
	<script src="vendorL/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorL/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorL/daterangepicker/moment.min.js"></script>
	<script src="vendorL/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendorL/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="jsL/main.js"></script>

</body>
</html>