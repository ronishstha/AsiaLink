@extends('frontend.layouts.master')

@section('title')
    Download Application | AsiaLink Services
@endsection

@section('content')

    <section id="registration" class="container">
        <div class="row">
            <div class="col-md-6">
               <div class="asialink_downloadforms"> 
                   <h4> Download Forms</h4>
                        <p> You can download the forms in here</p>
                            <ul class="asialinkdownload_list">    
                                <li> <a href="forms/application1.pdf"> Application Form I </a> </li>
                                <li> Application Form II </li>

                            </ul>
                </div> <!-- end of asialink_downloadforms -->            
            </div> <!-- end of col-md-6 -->

      
   

       </div> <!-- end of row --> 
    </section><!--/#registration-->

    

    <?php include("includes/allinonebottombar.php");?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>