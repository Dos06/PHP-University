<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovation</title>
    <!-- Including HTMLs with JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
<body>
    <header id="header"></header>

    <div class="container-fluid px-0">
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="inno-back"></div>
            <div class="inno-title text-center">
                <h1>IITU Innovation Center</h1>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="slider-img d-block w-100" src="src/static/img/slider1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Have a startup idea?</h5>
                        <p>You have found the right place!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="slider-img d-block w-100" src="src/static/img/slider2.jfif" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>What is inside?</h5>
                        <p>We have a lot of cool stuff that you can use for free.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="slider-img d-block w-100" src="src/static/img/slider3.jfif" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Enjoy the cozy atmosphere</h5>
                        <p></p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center my-4">
                    <h2 class="display-4">About us</h2>
                    <p>
                        Functional innovative space with equipped workplaces, 
                        meeting rooms and a play area. 
                        <br>
                        Primarily for the business of 
                        tomorrow - fast-growing innovative companies of the future, technology 
                        projects aimed at the global market. 
                        <br>
                        In general, for all those who desperately 
                        need the right atmosphere for productive work. 
                        <br>
                        Meetings with mentors and investors, 
                        participation in contests, hackathons, bootcamps, conversations with the leaders 
                        of successful startups will help you effectively launch your project
                    </p>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer"></footer>
    <!-- <script src="src/scripts/scripts.js"></script> -->
    <!-- <script src="src/scripts/vendor/jquery-2.2.4.min.js"></script> -->
    <!-- bootstrap 4 js -->
    <script src="src/scripts/scripts.js"></script>
    <!-- others plugins -->
    <!-- <script src="src/scripts/owl.carousel.min.js"></script> -->
    <!-- <script src="src/scripts//nice-select-plugin.js"></script> -->
    <!-- <script src="src/scripts/jquery.slicknav.min.js"></script> -->
    <!-- <script src="src/scripts/jquery.zoomslider.min.js"></script> -->
    <!-- <script src="src/scripts/countdown.js"></script> -->
</body>
</html>