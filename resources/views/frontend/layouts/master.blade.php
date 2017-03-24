<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title') </title>
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">


    <!-- ############### USERDEFINED CSS SYTLES ############ -->
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet">

    @yield('style')



    <!-- <link href="css/hotjobs_hover.css" rel="stylesheet">  -->



    <!-- for news scroller -->
    <link href="{{ URL::asset('css/news2/news2.css') }}" rel="stylesheet">


    <!-- end of news scroller -->


    <!-- ########### font awesome fonts ######## -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


    <!--############ END OF FONT AWESOME FONTS ######## -->








    <!-- ################## FONT AWESOME (NOT USED AT THE MOMENT) ############### -->
    <!--   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->

    <!--[if lt IE 9]>
    <script src="{{ URL::asset('js/html5shiv.js') }}"></script>
    <script src="{{ URL::asset('js/respond.min.js') }}"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ URL::asset('images/ico/favicon.ico') }}">


    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('images/ico/apple-touch-icon-57-precomposed.png') }}">

    <!--<script type="text/javascript" src="/js/common.js"></script>-->

    <!-- ##################### HORIZONTAL SCROLL FOR CLIENTS ############## -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
    </script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.simplyscroll.js') }}"></script>
    <script type="text/javascript" src="js/jquery.simplyscroll.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('js/jquery.simplyscroll.css') }}" media="all" type="text/css">
    <link rel="stylesheet" href=js/jquery.simplyscroll.css" media="all" type="text/css">
    <script type="text/javascript">
        (function($) {
            $(function() {
                $("#scroller").simplyScroll();
            });
        })(jQuery);
    </script>


</head><!--/head-->
<body>




<!-- ###################### HEADER IN HERE ################ -->

@include('frontend.layouts.header')


<!-- ################# HEADER ENDS IN HERE ############### -->




<!-- ############ HEADER SECTION STARTS IN HERE ############## -->

@include('frontend.layouts.menu2')


<!-- ############## HEADER SECTION ENDS IN HERE ############ -->


@yield('content')



<!-- ################ BOTTOM BAR ############# -->

<section id="bottom">
    <div class="container">
        <div class="row">

            @include('frontend.layouts.bottombar')


        </div> <!-- row -->
    </div>
</section><!--/#bottom-->




<!-- ################## END OF BOTTOM BAR ############# -->


<!-- ############ BOTTOMBAR MENU ########### -->



<section id="bottommidbartarget">
    <div class="container">

        <div class="row">

            @include('frontend.layouts.bottombarmenu')

        </div>
    </div>



</section>




<!-- ################# END OF BOTTOMBAR MENU ############ -->

@include('frontend.layouts.footer')



<script src="{{ URL::asset('js/jquery.js') }}"></script>
<script src="js/jquery.js"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="js/bootstrap.min.js"></script>
<script src="{{ URL::asset('js/jquery.prettyPhoto.js') }}"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="{{ URL::asset('js/main.js') }}js/main.js"></script>
<script src="js/main.js"></script>
<script src="{{ URL::asset('js/news2/news2.js') }}"></script>
<script src="js/news2/news2.js"></script>

</body>
</html>