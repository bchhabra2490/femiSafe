

<html>

<head>

    <title>Women Security Blog</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link href="bootstrap/css/clean-blog.min.css" rel="stylesheet">
    <!--<link href="bootstrap/css/blog-post.css" rel="stylesheet">-->
    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <nav class="navbar navbar-custom1 navbar-fixed-top" role="navigation" style="background-color:#ff8000">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" id="ham" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" style="background-color:#fff"></span>
                    <span class="icon-bar" style="background-color:#fff"></span>
                    <span class="icon-bar" style="background-color:#fff"></span>
                </button>
                <a class="navbar-brand" href="index.php" id="brand">Women Security</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                    <li>
                        <a href="videos.php">Videos</a>
                    </li>
                    <?php if(isset($_SESSION['username'])){
                    ?>
                    <li>
                         <a href="home.php"><?php echo ucfirst($_SESSION['username']);?></a>
                    </li>
                    <li role="presentation">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a style="color:#333;" href="logout.php">Log Out</a></li>
                          <li><a style="color:#333;" href="#">Change Password</a></li>
                        </ul>
                    </li>                   
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container" style="margin-top:100px">
    	<?php
    		if($_SESSION['level']==1){
    			$sql='select * from cases where status="0"';
    			$result=mysqli_query($db,$sql) or die(mysqli_error($db));
    			$count=mysql_num_rows($result);
    			echo '<h3>Total '.$count.' case(s) pending.</h3>';
    			while(mysql_fetch_assoc($result)){
    				echo '<div class="col-sm-12" style="margin-top:10px"><small>Pending</small><br><p>'.$case_details.'</p></div>';
    			}
    		}else{
    			?>
    			<div class="col-sm-12">
    				<h4>Submit the details of Case.</h4>
	    			<form role="form" action="caseSubmit.php" method="post" class="login-form">
    	            	<div class="form-group">
        	        		<label class="sr-only" for="form-password">Details</label>
           	                <textarea name="details" class="form-password form-control" >Submit the case details</textarea>
           	    	    </div>
                    	<input type="submit" name="submit" class="btn btn-block btn-warning" value="Submit">
                	</form>
                </div>
                <?php
            }
            ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>