<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Asia Link Servcices</title>
    <link href="{{ URL::asset('css/bootstrap.min.css') }} rel="stylesheet">
    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('ss/main.css') }}c" rel="stylesheet">


    <!-- ############### USERDEFINED CSS SYTLES ############ -->
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet">

    <!-- ################## FONT AWESOME (NOT USED AT THE MOMENT) ############### -->
 <!--   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->





    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
 <!--   <link rel="shortcut icon" href="images/ico/favicon.ico"> -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('images/ico/apple-touch-icon-144-precomposed.png ') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->
    <body>
       
       <header>
          <div class="container">
            <!-- <nav class="navbar navbar-default"> -->
              <nav class="navbar">
              <div class="container-fluid asiamenubg">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.php">Home</a>
                </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li> -->

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About us <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Messages</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Licenses</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>

         <li><a href="jobscategories.php">Jobs Categories </a></li>

                     <li><a href="demands.php">Demands </a></li>

                    <li><a href="applyone.php">Apply Online</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Procedures <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu ">
                            
                            
                                    <li><a href="documentation.php">Documentation</a></li>
                                    <li><a href="recruitment.php">Recruitment Process</a></li>
                                    <li><a href="terms.php">Terms & Conditions</a></li>
                            
                            


                          
                        </ul>
                    </li>
                    <!--<li><a href="blog.html">Blog</a></li> -->
                    <li><a href="nepal.php">Nepal</a></li>
                    <li><a href="contacts.php">Contact</a></li>




      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

            </div>  <!-- end of container -->
       </header> <!-- end of header -->
    </body>
</html>
