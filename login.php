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
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <?php if(isset($_SESSION['logged'])){
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
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h1>Login</h1>
                                    <?php if(isset($_GET['error']) && $_GET['error']==1){?><span class="alert" style="color:#fff;">Member ID/Password is incorrect.</span><?php } ?>
                                </div>
                            </div>
                            <div class="form-bottom" style="margin-top:40px">
                                <form role="form" action="home.php" method="post" class="login-form">
                                    <div class="form-group" style="margin-bottom:20px;margin-top:-15px">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input type="text" name="username" placeholder="Username" class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="password" placeholder="Password" class="form-password form-control" id="form-password">
                                    </div>
                                    <input type="submit" name="submit" class="btn btn-block btn-warning" value="Sign In">
                                </form>
                            </div>
                        </div>
                    </div>            


        <!-- Javascript -->
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
</body>
</html>    