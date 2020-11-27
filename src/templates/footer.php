
<nav class="navbar navbar-expand-sm footer white">
    <div class="container">
        <div class="row w-100 py-5">
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <form class="form-inline my-2 my-lg-0 mx-auto" action="${pageContext.request.contextPath}/setCookieLanguage" method="post">
                    <select class="form-control mr-sm-2" name="language" required>
                        <option class="form-control" disabled selected>Choose Language</option>
                        <option class="form-control" value="">English</option>
                        <option class="form-control" value="">Russian</option>
                    </select>
                    <button class="btn btn-outline-success my-2 my-sm-0">Change</button>
                </form>

                <form class="form-inline my-2 my-lg-0 mx-auto" action="/setCookieTheme" method="post">
                    <select class="form-control mr-sm-2" name="theme" required>
                        <option class="form-control" disabled selected>Choose Theme</option>
                        <option class="form-control" value="">Standard</option>
                        <option class="form-control" value="">Dark</option>
                        <option class="form-control" value="">Light</option>
                    </select>
                    <button class="btn btn-outline-success my-2 my-sm-0">Change</button>
                </form>
            </div> -->

        
            <div class="col-xl-5 mb-5">
                <div class="col-sm-12 text-left">
                    <h3 class="red">INTERNATIONAL</h3>
                    <h3 class="red">UNIVERSITY</h3>
                    
                    <p>Expound the actual teachings of the great explorer of the truth master human happiness one rejects dislikes avoids pleasure</p>
                    
                </div>
                
                <div class="col-sm-6 social-link d-flex justify-content-between">
                    <a class="navbar-brand" href="https://www.facebook.com/iitukz/">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="navbar-brand" href="https://www.instagram.com/iitu_kz/?hl=ru">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="navbar-brand" href="https://vk.com/iitukz">
                        <i class="fab fa-vk"></i>
                    </a>
                    <a class="navbar-brand" href="https://twitter.com/iitukz">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>

            <div class="col-xl-2 mb-5 ">
                <h4>Important Links</h4>
                <nav>
                    <li class="nav-link"><a href="index.php" class="white-link"><i class="fas fa-angle-right mr-2"></i>Home</a></li>
                    <li class="nav-link"><a href="admission.php" class="white-link"><i class="fas fa-angle-right mr-2"></i>Specialties</a></li>
                    <li class="nav-link"><a href="admission.php" class="white-link"><i class="fas fa-angle-right mr-2"></i>Dates</a></li>
                    <li class="nav-link"><a href="innovation.php" class="white-link"><i class="fas fa-angle-right mr-2"></i>Innovation</a></li>
                </nav>
            </div>

            <div class="col-xl-5">
                <div id="map" class="w-100"></div>
                <div class="row col-sm-12 mt-4 justify-content-between">
                    <div class="col-sm-6 d-flex justify-content-center my-2">
                        <div class="row">
                            <i class="fas fa-phone-alt my-auto mr-2"></i>
                            <div class="ml-3">
                                <div class="row">
                                    <h6 class="my-auto">+7 (777) 777 77 77</h6>
                                </div>
                                <div class="row">
                                    <h6 class="my-auto">+7 (777) 666 66 66</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex justify-content-center my-2">
                        <div class="row">
                            <i class="fas fa-map-marker-alt my-auto mr-2"></i>
                            <div class="ml-3">
                                <div class="row">
                                    <h6 class="my-auto">Almaty, Kazakhstan</h6>
                                </div>
                                <div class="row">
                                    <h6 class="my-auto">Manas St 34/1</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</nav>
    

<script>
    function initMap() {
			var uluru = {lat: 43.2349457, lng: 76.909527};
			var map = new google.maps.Map(
				document.getElementById('map'), {zoom: 10, center: uluru});
			var marker = new google.maps.Marker({position: uluru, map: map});
		}
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKRJyaWMT-jvx36xRhFvMB_RaBl7uyIJQ&callback=initMap">
</script>

