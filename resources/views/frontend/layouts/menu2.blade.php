
 <header class="navbar navbar-inverse menubarbg" role="banner">
   
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
              <!--  <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a> -->
            </div>

            <div class="collapse navbar-collapse">
              <!--  <ul class="nav navbar-nav navbar-right"> -->

                <ul class="nav navbar-nav navbar-left targetnav"> 

                    <li class="active"><a href="{{ route('home') }}">Home</a></li>
                  
                   
                   <!-- <li><a href="services.html">Activities</a></li> -->

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Know us <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">

                            <li><a href="{{ route('about-us') }}">About us</a></li>
                            <li><a href="{{ route('messages') }}">Messages</a></li>
                            
                            <li><a href="{{ route('licenses') }}">Licenses</a></li>
                            <li><a href="{{ route('nepalese-workers') }}">Nepalese Worker?</a></li>
                             
                            
                       
                        </ul>
                    </li>

                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recruitment <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('documentation') }}">Documentation</a></li>
                                    <li><a href="{{ route('selection') }}">Selection & Deployment</a></li>
                                    <li><a href="{{ route('terms') }}">Terms & Conditions</a></li>
                        </ul>
                    </li>



                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Job Seeker <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('hot-jobs') }}">Hot Jobs</a></li>
                            <li><a href="{{ route('apply-online') }}">Apply Online</a></li>
                            <li><a href="{{ route('download') }}">Download Forms</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('jobs-categories') }}">Jobs Categories </a></li>


                    <li><a href="{{ route('clients') }}">Clients</a></li>
                   
                  
                    
                    


                    <!--<li><a href="blog.html">Blog</a></li> -->

                    <li><a href="{{ route('nepal') }}">Nepal</a></li>

                    <li><a href="{{ route('contacts') }}">Contacts</a></li>
                </ul>


                  <!-- ########### SEARCH BUTTON ############## -->

                  <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>         

            <!-- ################## END OF SEARCH BUTTON IN HERE ############# -->




            </div>
        </div> <!-- end of container -->
    



    </header><!--/header-->
