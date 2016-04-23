<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Women Security Blog</title>

    <!-- Bootstrap Core CSS -->
	<!--<link  rel="shortcut icon" href="images/logo.ico" type="image/png"/>-->
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
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-head">
                    <h3 style="padding-left:10px">Be Safe</h3>
                </div>
                <div class="panel-body">
                    <img src="images/blog/1.png" style="float:left;width:300px;padding:5px;" class="img-responsive"/>
                    <p class="post-meta">Posted by Bharat Chhabra on 22 April, 2016</p>
                </div>
                <div class="panel-footer">
                    <a class="btn btn-warning" href="read.php?id=1>"/>Read Full Story</a>
                </div>
            </div>
        </div>
         <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-head">
                    <h3 style="padding-left:10px">Enough is enough</h3>
                </div>
                <div class="panel-body">
                    <img src="images/blog/2.jpg" style="float:left;width:300px;padding:5px;" class="img-responsive"/>
                    <p class="post-meta">Posted by Bharat Chhabra on 22 April, 2016</p>
                </div>
                <div class="panel-footer">
                    <a class="btn btn-warning" href="read.php?id=1>"/>Read Full Story</a>
                </div>
            </div>
        </div>
         <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-head">
                    <h3 style="padding-left:10px">Women Safety Secured</h3>
                </div>
                <div class="panel-body">
                    <img src="images/blog/3.jpg" style="float:left;width:300px;padding:5px;" class="img-responsive"/>
                    <p class="post-meta">Posted by Bharat Chhabra on 22 April, 2016</p>
                </div>
                <div class="panel-footer">
                    <a class="btn btn-warning" href="read.php?id=1>"/>Read Full Story</a>
                </div>
            </div>
        </div>
    </div>
     <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="https://twitter.com/pattefoundation" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://facebook.com/pattefoundation" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy;Women Security</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="bootstrap/js/clean-blog.min.js"></script>

</body>