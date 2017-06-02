<?php

?>
<!-- first got to sort php and mysql -->
<!-- sort the front page with catelogue and imagery-->
<!DOCTYPE html>
<html>
<head>
<title> GAINE GREEN UK MUSIC URBAN SITE </title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<link rel="stylesheet" type="text/css" href="review.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-animate.js"></script>

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
              <a class="navbar-brand" href="intro.php">GAINE GREEN<span class="glyphicon glyphicon-grain" aria-hidden="true"></span>	 </a>
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
                    <li><a href="#">Sign in</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Sign up</li>
                    <li><a href="registration.php">Registration page</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
		  
        </nav>
<h1>Hide the DIV: <input type="checkbox" ng-model="myCheck"></h1>

<div class="ang" ng-hide="myCheck">

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
 
<script>
var app = angular.module('myApp', ['ngAnimate']);
</script>


<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
</html>
