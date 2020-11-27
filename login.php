<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Including HTMLs with JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="src/css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<!-- <body class="login"> -->
<body>

	<div class="container" id="container">
		
		<div class="form-container sign-up-container">
			<form action="php_backend/login/signup.php" method="POST">
				<h1>Create Account</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-vk"></i></a>
				</div>
				<span>or use your email for registration</span>
				<input type="text" name="name" placeholder="Name" required>
				<input type="text" name="surname" placeholder="Surname" required>
				<input type="email" name="email" placeholder="Email" required>
				<input type="password" name="password" placeholder="Password" required>
                <input type="text" name="pictureurl" placeholder="Picture URL" name="pictureurl">
                <button>Sign Up</button>
                
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="php_backend/login/signin.php" method="POST">
				<h1>Sign in</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-vk"></i></a>
				</div>
				<span>or use your account</span>
				<input type="email" name="email" placeholder="Email" required>
				<input type="password" name="password" placeholder="Password" required>

                <ul class="ks-cboxtags">
                    <li><input type="checkbox" id="remember" name="remember" value="1"><label for="remember">Remember me</label></li>
                </ul>
				<!-- <a href="#">Forgot your password?</a> -->
                <button>Sign In</button>
                
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
					
                    <a href="index.php" style="color: white;"><button class="ghost" id="back">Home</button></a>
                    
                    
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Friend!</h1>
					<p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                    <a href="index.php" style="color: white;"><button class="ghost"  id="back">Home</button></a>
				</div>
			</div>
		</div>
	</div>

    <script src="src/scripts/bootstrap.min.js"></script>
    <script src="src/scripts/scripts.js"></script>
    <script src="src/scripts/login.js"></script>
</body>
</html>