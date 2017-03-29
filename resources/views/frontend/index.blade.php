@extends('frontend.layouts.master')

@section('title')
    Home | AsiaLink Services
@endsection

@section('content')
    <section id="main-slider" class="no-margin">

        @php
        $banner_no = count($banners);
        $i = 0;
        @endphp
         <div class="carousel slide wet-asphalt">
            <ol class="carousel-indicators">

                {{--<li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
                <li data-target="#main-slider" data-slide-to="3"></li>
                <li data-target="#main-slider" data-slide-to="4"></li>--}}

                {{--@for($i = 0; $i < $banner_no; $i++)
                    <li data-target="#main-slider" data-slide-to="@php $i @endphp" @if( $i== 0) class="active" @endif></li>
                @endfor--}}

                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>

             {{-------------------------------dynamic banner--------------------------------------}}

         <div class="carousel-inner">
         @foreach($banners as $banner)
             @php
             if($banner->id == 1){
                 $banner_no = "active";
                 }
             else{
             $banner_no = "nth";
             }
             @endphp
             <div class="item {{ $banner_no }}" style="background-image: url(banner/{{ $banner->image }})">
                 <div class="container">
                     <div class="row">
                         <div class="col-sm-12">
                             <div class="carousel-content centered imscarouseltext">
                                 <h2 style="font-size:18px;" class="boxed animation animated-item-1">
                                     {!! $banner->description1 !!}
                                 </h2>
                                 <p style="font-size:15px; width:305px;" class="boxed animation animated-item-1">
                                     {!! $banner->description2 !!}
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div><!--/.item-->
         @endforeach
         </div>

         {{-----------------------static banner---------------------------------------------------------}}
            {{--<div class="carousel-inner">
                <div class="item active" style="background-image:url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered imscarouseltext">
                                    
                                        <h2 style="font-size:18px;" class="boxed animation animated-item-1">
                                            Helping YOU ...
                                        </h2> 
                                
                                          <p style="font-size:15px; width:270px;" class="boxed animation animated-item-1">
                                            ... find the best JOB GLOBALLY !
                                          </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                    <div class="carousel-content centered imscarouseltext">
                                        <h2 style="font-size:18px;" class="boxed animation animated-item-1">
                                           JOB that suits YOU ...
                                        </h2>
                                          <p style="font-size:15px; width:305px;" class="boxed animation animated-item-1">
                                            We understand the skills of people ...
                                          </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered imscarouseltext">
                                        <h2 style="font-size:18px;" class="boxed animation animated-item-1">
                                            Serving you ...
                                        </h2>
                                          <p style="font-size:15px; width:270px;" class="boxed animation animated-item-1">
                                            ... the BEST SERVICES across.
                                          </p>
                                </div>
                            </div>

                            <!-- ##############     VIDEO SPACE ############# -->

                            <!--
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="centered">
                                    <div class="embed-container">
                                        <iframe src="//player.vimeo.com/video/69421653?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </div> 
                            </div>  -->

                            <!-- ############## END OF VIDEO SPACE ############# -->

                        </div>
                    </div>
                </div>--}}<!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
      
     
    </section><!--/#main-slider-->





    <!-- ############## 3 SECTIONS ############### -->

    <section id="testimonial" class="alizarin">
        <div class="container">
            <div class="row midasiasection">

                <div class="col-md-3">


                      <i class="fa fa-spinner fa-3x fa-spin"></i>
                        <h1 aling="center"> Hot Jobs</h1>

                    <!-- ########### codes goes in here ####### -->


                            <div class="holder" style="background-color: lightgrey;border-radius: 3px;">
                                 <ul id="ticker01">
                                     @if(count($jobs) == 0)
                                         <li>No Hot Jobs places at the moment</li>
                                    @endif

                                     {{-------------------------------------dynamic hotjobs---------------------------------------------}}

                                         @foreach($jobs as $job)
                                             @if($job->status == "published")
                                                <li><span>{{  $job->updated_at }}</span><a href="{{ route('hot-jobs') }}">{{ $job->title }}</a></li>
                                             @endif
                                         @endforeach


                                 </ul>
                            </div>

               

                    <!-- ########### codes goes ends here ####### -->



                </div> <!-- end of col-md-3 -->

                <div class="col-sm-1">

                </div>

                <div class="col-md-5">

                    <i class="fa fa-shield fa-3x"></i>


                    <h1> Introduction</h1>

                        <p>
                            Asia Link Services is a leading professional HR recruitment agency and foreign employment consultancy since 199A.D. The Government of Nepal,

                            Department of Labor authorized our company to operate as recruiting agency with license no. 119/055/056. </p>

                        <p>
                            Asia Link Services has been genuinely successful in pursuing and developing a feasible business relationship with highly reputed overseas organization.

                            We mobilize unskilled to highly skilled/ professional Nepali manpower to different parts of the world especially Qatar, Malaysia, UAE, Japan, Kuwait,

                            Bahrain, Oman and Saudi Arabia.

                            Asia link management consists of young & dynamic entrepreneurs who have long experience record in the HR industry, consulting and marketing, which is back supported by dedicated staff team spirit. The team share common passion in delivering excellent services to its stakeholder enhancing International practices on selection, recruitment and

                            training of human resources. </p>

                        <p>
                            Our philosophy is based on the concept of quality and swiftness which could be best achieved by long experience and dedication in the respective business. We have well trained hard working individuals who provide best of the potential services.

                        </p>

                </div> <!-- end of col-md-6 -->


                <div class="col-md-3">
                   <div class="asialink-imgbuilding">
                        <img class="img-responsive" src="{{ URL::asset('images/asialink_building.png') }}" alt="Asialink Building" />
                   </div>

                   <div class="asialink_buildingtext" style="background-color: dimgrey;border-radius: 3px;color: black;">
                        <p style="font-color: black;"> The main building of AsiaLink Services is centrally located in the Capital easily accessible from different routes and points.</p>

                   </div>


                </div> <!-- end of col-md-3 -->
           
            </div> <!-- end of row -->
        </div><!-- end of container -->
    </section><!--/#testimonial-->





    <!-- ################ END HERE ######### -->



    <section id="services" class="clientsbg">
        <div class="container">


            <!-- ############ START OF NEW ROW ############ -->

            <div class="row">
                <div class="col-lg-12 scrolldiv">

                    <h3>Our Valuable Clients</h3>
                     <!--   <p> Our years of dedications and hardworks relates to the number of valuable clients earned.   </p> -->

                <!--    <div class="center"><h2> </h2> </div> -->
                    

                        <ul id="scroller">
                              <!--  <li><img src="http://logicbox.net/jquery/simplyscroll/assets/20080608_9N3H5GYL_tb.jpg" width="290" height="200" alt="Firehouse"></li> -->

                            {{------------------------------------Dynamic Content--------------------}}

                            @foreach($clients as $client)
                                @if($client->status == "published")
                                    <li><img src="{{ URL::asset('client/' . $client->image) }}" width="95" height="73" alt="Maapadma clients"></li>
                                @endif
                            @endforeach

                            {{-----------------------------------Static Content-------------------------------------}}

                            {{--<li><img src="images/clients/c1.jpg" width="95" height="73" alt="Maapadma clients"></li>
                                 <li><img src="images/clients/c2.jpg" width="95" height="73" alt="Maapadma clients"></li>
                                  <li><img src="images/clients/c3.jpg" width="95" height="73" alt="Maapadma clients"></li>
                                   <li><img src="images/clients/c4.jpg" width="95" height="73" alt="Maapadma clients"></li>
                                    <li><img src="images/clients/c5.jpg" width="95" height="73" alt="Maapadma clients"></li>
                                    <li><img src="images/clients/c6.jpg" width="95" height="73" alt="Maapadma clients"></li>
                                 <li><img src="images/clients/c7.jpg" width="95" height="73" alt="Maapadma clients"></li>
                                  <li><img src="images/clients/c8.jpg" width="95" height="73" alt="Maapadma clients"></li>
                                   <li><img src="images/clients/c9.jpg" width="95" height="73" alt="Maapadma clients"></li>
                                    <li><img src="images/clients/c10.jpg" width="95" height="73" alt="Maapadma clients"></li>--}}



                        </ul> <!-- end of scroller -->
                    </div><!-- end of col-lg-12 -->
            </div> <!-- end of row -->


            <!-- ############### END OF ROW ############## -->


        </div> <!-- end of container -->
    </section><!--/#services-->
@endsection

    
        <!-- ################ BOTTOM BAR ############# -->

