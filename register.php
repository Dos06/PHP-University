<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Including HTMLs with JQuery -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    -->
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script> 
        $(function(){
            $("#links").load("src/templates/src.php"); 
        });
        $(function(){
            $("#footer").load("src/templates/footer.php"); 
        });
        $(function(){
            $("#header").load("src/templates/header.php"); 
        });
    </script>
    <!-- CSS -->
    <link rel="stylesheet" href="src/css/style.css">
    <div id="links"></div>
    
</head>
<!-- <body class="login"> -->
<body>
    <header id="header"></header>

    <div class="container mx-auto text-center align-items-center py-5">
        <div class="row col-md-8 offset-md-2 col-sm-12 offset-sm-0 mx-auto">
            <h2 class="display-4 mx-auto"><b>IITU</b></h2>
        </div>
        <div class="login-form row justify-content-center col-md-8 offset-md-2 col-sm-12 offset-sm-0 mx-auto py-1 mt-4">
            <form action="/profile" class="form-group col-md-8 col-sm-12 mx-auto">
                <h4 class="mt-4">SIGN UP</h4>
                <input type="text" class="form-control mt-4" placeholder="Full Name*" name="fullname" required>
                <input type="date" class="form-control mt-4" placeholder="Date of Birth*" name="birthdate" required>
                <input type="text" class="form-control mt-4" placeholder="Picture URL" name="pictureurl">
                <select class="form-control mt-4" name="admissionyear" required>
                    <option disabled selected>Year of Admission*</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                </select>
                <input type="email" class="form-control mt-4" placeholder="Email*" name="email" required>
                <input type="password" class="form-control mt-4" placeholder="Password*" name="password" required>
                <input type="password" class="form-control mt-4" placeholder="Re-Password*" name="re-password" required>
                <button class="btn btn-lg btn-danger mt-4">SIGN UP</button>
                <div class="row justify-content-center">
                    <a href="login.php" class="text-muted mt-4 mb-2">Already have an account?</a>
                </div>
            </form>
        </div>
    </div>
    
    <footer id="footer"></footer>
    <script src="src/scripts/bootstrap.min.js"></script>
    <script src="src/scripts/scripts.js"></script>
</body>
</html>