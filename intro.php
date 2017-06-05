<?php
$con = mysqli_connect("localhost","root","","dataform")
or die ("connection was not created"); //saved connection in variable


?>
<!-- first got to sort php and mysql -->
<!-- sort the front page with catelogue and imagery-->


<!DOCTYPE html>
<html lang="en">
<head>
<title> NEW UK UK MUSIC URBAN SITE </title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="latest.css">

</head>
<body id="index">

<div class="navbar-wrapper">
      <div class="container">

<nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
             <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="intro.php">NEW UK<span class="glyphicon glyphicon-grain" aria-hidden="true"></span>	 </a>
            </div>
        
		        
            </div>
          </div>
		         <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="review"><a href="review.php">Review</a></li>
                <li class="latest"><a href="latest.php">The Latest</a></li>
				<li class="videos"><a href="videos.php">Videos</a></li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="">Login</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Sign up</li>
                    <li><a href="registration.php">Registration page</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
		  </div>
        </nav>
		
		<div class="Container">
  <ul class="Carousel">
	<
    <li class="Items Front">
      <div class="item">
		<p> Trending Album </p>
        <img src="http://www.viperial5.co/uploads/albums/4295/reeko-squeeze-lns-5926d8490e023-500x500.jpg" alt="Chicago" style="width:100%;"></li>
	
    <li class="Items Left">2</li>
    <li class="Items Left2">3</li> 
    <li class="Items Right">4</li>
    <li class="Items Right2">5</li>  
  </ul>
</div>
</div>
    
<div class="jumbotron">
      <div class="container">
  <div class="row">
  
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/lights.jpg" target="_blank">
          <img src="http://s3.amazonaws.com/factmag-images/wp-content/uploads/2017/04/C8g31YyXsAAPKZd.jpg"" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/nature.jpg" target="_blank">
          <img src="http://hoodtapes.co.uk/wp-content/uploads/2016/09/Front-271x300.png" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/fjords.jpg" target="_blank">
          <img src="http://thefader-res.cloudinary.com/images/w_1440,c_limit,f_auto,q_auto:best/Nines_One_Foot_Out_q4wnev/nines-one-foot-out-review-xl-recordings.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
</div>

	
      <div class="col-md-5">
	        <div class="container">
	    <h2 class="latest"> Trending tracks</h2>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
         <img src="http://s3.amazonaws.com/factmag-images/wp-content/uploads/2017/04/C8g31YyXsAAPKZd.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3 class="header">J HUS</h3>
        </div>
      </div>

      <div class="item">
        <img src="http://www.viperial5.co/uploads/albums/4295/reeko-squeeze-lns-5926d8490e023-500x500.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3 class="header"> REEKO SQUEEZE</h3>
        </div>
      </div>
    
      <div class="item">
        <img src="http://is1.mzstatic.com/image/thumb/Music111/v4/f2/a3/ef/f2a3efbc-39f3-d60c-4c49-1705112ef592/source/170x170bb.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3 class="header">GUNNA DEE HUSTLERS MANUAL</h3>
			
        </div>
		</div>
      </div>
	  

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
  </div>
  
  
      <div class="col-md-5">
	  <span class="second">
	        <div class="container">
	    <h2 class="latest-videos"> Trending Videos</h2>

  <div id="myCarousel1" class="carousel slide" data-ride="carousel1">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel1" data-slide-to="1"></li>
      <li data-target="#myCarousel1" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
    <img src="http://is1.mzstatic.com/image/thumb/Music111/v4/f2/a3/ef/f2a3efbc-39f3-d60c-4c49-1705112ef592/source/170x170bb.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3 class="header">GUNNA DEE HUSTLERS MANUAL</h3>
        </div>
      </div>

      <div class="item">
        <img src="http://www.viperial5.co/uploads/albums/4295/reeko-squeeze-lns-5926d8490e023-500x500.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3 class="header"> REEKO SQUEEZE</h3>
        </div>
      </div>
    
      <div class="item">
        <img src="http://is1.mzstatic.com/image/thumb/Music111/v4/f2/a3/ef/f2a3efbc-39f3-d60c-4c49-1705112ef592/source/170x170bb.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3 class="header">GUNNA DEE HUSTLERS MANUAL</h3>
			
        </div>
		</div>
      </div>
	 	  

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel1" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
 </div>
 </div>
 
  </span>
 <script type= "text/javascript" src="latest.js"> </script>  
<script type= "text/javascript" src="intro.js"> </script>  
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap-tpls.min.js"></script>

<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>

