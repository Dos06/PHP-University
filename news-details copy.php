<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Details</title>
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
    <div class="container">
        <div class="row col-12 m-0">

            <div class="post-news-details mt-5">
                <!-- TODO POST -->
                <div class="jumbotron container-fluid shadow">
                    <div class="container">
                        <img class="col-sm-12" style="max-width: 100%; border-radius: 3%;" src="https://cdn.cnn.com/cnnnext/dam/assets/201017212456-05-donald-trump-1017-wisconsin-exlarge-169.jpg">
                        <h1 class="display-4 mt-3"><b>This is Biden's shortest path to the White House</b></h1>
                        <h3 style="color: crimson;">Politics</h3>
                        <p class="lead">
                            Two weeks before Election Day, Joe Biden appears well-positioned to finish the job that Democrats above all hired him to do: Rebuild the party's blue wall in the Rust Belt.
                            Biden's principal asset in the 2020 Democratic primaries was the widespread sense among party voters that he was best qualified among the contenders to win back the defecting White voters, especially those without college degrees, who allowed Donald Trump to capture Michigan, Wisconsin and Pennsylvania in 2016 -- and with them the presidency.
                            <br><br>
                            "He's settled in at a level that makes him formidable in terms of creating an Electoral College bloc that includes for sure Pennsylvania, Michigan and Wisconsin, but also Minnesota, while competing readily for Ohio and Iowa," says veteran Democratic pollster Stanley B. Greenberg. Unless Trump can reverse Biden's advantages in the key Rust Belt battlegrounds, Greenberg argues, the former vice president "has locked up the presidency. ... You have an impossible Electoral College advantage with the states he's ahead of in the Rust Belt."
                            Trump stunned Democrats in 2016 when he captured Michigan, Wisconsin and Pennsylvania, despite trailing in the polls then too, behind an unexpected surge of turnout from his core group of non-college-educated Whites, especially those in small-town and rural communities. Apart from Michigan, where Trump's relentless attacks on Democratic Gov. Gretchen Whitmer during the coronavirus pandemic have weakened his position, few in either party rule out the possibility of Trump surprising again in the Rust Belt, even if polls are more favorable for Biden now than Clinton then.
                            
                        </p>
                    </div>
                </div>

                <div class="sub-comment"></div>
			
                <div class="comment-box box mb-4">
                    <div class="comment-btn">
                        <input type="textarea" class="comment form-control shadow container-fluid p-4" rows="10" cols="30" placeholder="Add a comment...">
                    </div>
                </div>
            </div>

            <div class="add-comment container-fluid p-4 mb-4">
                <div class="box">
                    <div class="add-comment-img">
                        <img src="http://nicesnippets.com/demo/man03.png">
                    </div>
                    <div class="add-comment-text">
                        <textarea rows="5" class="example-textarea p-3"></textarea>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <div class="add-comment-text-btn text-center">
                    <button class="btn btn-dark post-comment-btn mt-2">Post Comment</button>
                    <button class="btn btn-secondary cancel-btn mt-2">Cancel</button>
                </div>
            </div>

        </div>
    </div>
    
    <footer id="footer"></footer>

    <script>
        $(".comment").click(function() {
            $(".comment").hide();
        }); 
        
        $(".cancel-btn").click(function() {
            $(".comment").show();
        });
        
        $('.comment').click(function() {
            $(".add-comment").slideToggle();
        });
        
        $('.post-comment-btn').click(function() {
            var data = $('.example-textarea').val();
            if(!data){
                alert("Plese Enter a comment, after that click the \"Post\" button.");
            }else{
                $('.example-textarea').val('');
                $(".sub-comment").append('<div class="example"><div class="comment-img"><img src="http://nicesnippets.com/demo/man03.png" class="example"></div><div class="comment"><p>'+ data +'</p></div><div style="clear:both;"></div></div><hr>');
            }
        });
        
        $(".cancel-btn").click(function() {
            $(".add-comment").hide();
        });
    </script>

    <script src="src/scripts/bootstrap.min.js"></script>
    <script src="src/scripts/scripts.js"></script>
</body>
</html>