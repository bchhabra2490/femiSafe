<?php
	session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="description" content="">
    	<meta name="author" content="">
   		<title>Women Security</title>

    	<!-- Bootstrap Core CSS -->
		<!--<link  rel="shortcut icon" href="images/logo.ico" type="image/png"/>-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    	<!-- Custom CSS -->
    	<link href="bootstrap/css/clean-blog.min.css" rel="stylesheet">
    	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    	<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<script src="http://code.responsivevoice.org/responsivevoice.js"></script>
		<style>
			 #map {
        height: 100%;
      }
		</style>
        <script>
       		function showmap(){
       			var map = new google.maps.Map(document.getElementById('map'), {
          			zoom: 13,
          			center: {lat: 34.04924594193164, lng: -118.24104309082031}
        		});

		        var trafficLayer = new google.maps.TrafficLayer();
    		    trafficLayer.setMap(map);
        	}
            function helpText(position){
            	 
            	var i=0;
            	while(i<5){
	                responsiveVoice.speak("I need help. My Location is "+Math.round(position.coords.latitude,3)+" degree north and "+Math.round(position.coords.longitude,3)+" degree east. Please help me.");
	            	i++;
	            }
            }
            function getLocation() {
    			if (navigator.geolocation) {
        			navigator.geolocation.getCurrentPosition(helpText);
    			} else {
       				x.innerHTML = "Geolocation is not supported by this browser.";
    			}
			}
			function getLocation1() {
    			if (navigator.geolocation) {
        			navigator.geolocation.getCurrentPosition(showmap);
    			} else {
       				x.innerHTML = "Geolocation is not supported by this browser.";
    			}
			}
        </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeg99ycewtXk7BfhY0tkDOt82ModfKUng&callback=initMap">
    </script>
	</head>
	<body style="background-color:#eee">
		<nav class="navbar navbar-custom1 navbar-fixed-top" role="navigation" style="background-color:#ff8000">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php" id="brand">Women Security</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!--<div>
                <ul class="nav navbar-nav">
                   	<li>
                        <a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>-->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--call button-->
    	<div class="container" style="margin-top:100px">
		    <div class="col-sm-6" style="margin-top:10px">
			    <a class="btn btn-default btn-block btn-large" href="tel:+919780443873" onclick="getLocation()">Call Near By Police Station</a>
			</div>
			<div class="col-sm-6" style="margin-top:10px">
			    <a class="btn btn-default btn-block btn-large" href="tel:+919780443873" onclick="getLocation()">Call Your Relatives</a>
			</div>
			<?php

			if(!isset($_SESSION['username'])){
				?>
			<div class="col-sm-6" style="margin-top:10px">
			    <a class="btn btn-default btn-block btn-large" href="login.php">Login <i class="fa fa-sign-in" aria-hidden="true"></i></a>
			</div>
			<?php
		}else{
			?>

			<div class="col-sm-6" style="margin-top:10px">
			    <a class="btn btn-default btn-block btn-large" href="logout.php">Logout <i class="fa fa-sign-in" aria-hidden="true"></i></a>
			</div>
			<?php
				}
			?>
			<div class="col-sm-6" style="margin-top:10px">
			    <a class="btn btn-default btn-block btn-large" href="signup.php">Sign Up<i class="fa fa-user-plus" aria-hidden="true"></i></a>
			</div>
			<div class="col-sm-6" style="margin-top:10px">
			   <a type="button" class="btn btn-default btn-block btn-large" data-toggle="modal" data-target="#myModal">Find Nearby Police Stations</a>
			</div>

			<div class="col-sm-6" style="margin-top:10px">
			    <a class="btn btn-default btn-block btn-large" href="blog.php">Blog <i class="fa fa-rss-square" aria-hidden="true"></i></a>
			</div>
			<div class="col-sm-6" style="margin-top:10px">
			    <a class="btn btn-default btn-block btn-large" href="videos.php">Videos <i class="fa fa-video-camera" aria-hidden="true"></i></a>
			</div>
			<div class="col-sm-6" style="margin-top:10px">
			    <a class="btn btn-default btn-block btn-large" onclick="showmap()">See the Traffic on Road</a>
			</div>
			<div class="col-sm-12">
				<div id="map" style="width:100%;height:50%;margin-top:30px"></div>
			</div>
			<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">NearBy Police Stations</h4>
      </div>
      <div class="modal-body">
        <p>Data Not Available</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
		</div>	
		<script src="bootstrap/js/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>	