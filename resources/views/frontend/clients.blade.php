@extends('frontend.layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/hover/style_common.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/hover/style1.css') }}" />
@endsection

@section('title')
    Clients | AsiaLink Services
@endsection

@section('content')
    <section id="services">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="center gap">
                        <h2>Our Valued Clients</h2>
                        <p>Our years of dedication and hardwork has led to a numerous successful clients.</p>
                    </div>                
                </div>
            </div>

            <div class="row">

                    <div class="col-md-1"> </div>

                    <div class="col-md-11">
                        @if(count($clients) == 0)
                            <div class="view view-first">
                                <img src="{{  URL::asset('abudhabi.jpg') }}" />
                                <div class="mask">
                                    <h2>No Clients Available</h2>
                                    <!-- <p>A small traditional village in the lap of the Himalayas.</p>
                                     <a href="#" class="info">Read More</a> -->
                                </div>
                            </div>

                        {{--------------------------------static clients-------------------------}}

                   {{-- <div class="view view-first">
                        <img src="{{ URL::asset('images/package/1.jpg') }}" />
                        <div class="mask">
                            <h2>CHEC</h2>
                            <p>China Harbour Engineering Company</p>
                         <!--   <a href="#" class="info">Read More</a> -->
                        </div>
                    </div>  

                    <div class="view view-first">
                        <img src="{{ URL::asset('images/package/2.jpg') }}" />
                        <div class="mask">
                            <h2>KAEFER</h2>
                            <!--<p> The Capital of Nepal and the most crowded city with mulitnational culture.</p>
                            <a href="#" class="info">Read More</a> -->
                        </div>
                    </div> 

                    <div class="view view-first">
                        <img src="{{ URL::asset('images/package/3.jpg') }}" />
                        <div class="mask">
                            <h2>Fahad Bin Abdulla Ready Mix</h2>
                           <!-- <p>The city of tradtiions.</p>
                            <a href="#" class="info">Read More</a> -->
                        </div>
                    </div> 


                    <div class="view view-first">
                        <img src="{{ URL::asset('images/package/4.jpg') }}" />
                        <div class="mask">
                            <h2>Brookfield Multiplex</h2>
                          <!--  <p>The city of Art and Architecture and Artists.</p>
                            <a href="#" class="info">Read More</a> -->
                        </div>
                    </div> 


                      <div class="view view-first">
                        <img src="{{ URL::asset('') }}" />
                        <div class="mask">images/package/5.jpg
                            <h2>MedGulf Construction Co.</h2>
                         <!--   <p>The land of wildlife.</p>
                            <a href="#" class="info">Read More</a> -->
                        </div>
                    </div> 

                     <div class="view view-first">
                        <img src="{{ URL::asset('images/package/6.jpg') }}" />
                        <div class="mask">
                            <h2>Qatar Insulation Factory</h2>
                        <!--   <p>Gautam Buddha's Birthplace traditionally covered.</p>
                            <a href="#" class="info">Read More</a> -->
                        </div>
                    </div> 

                     <div class="view view-first">
                        <img src="{{ URL::asset('images/package/7.jpg') }}" />
                        <div class="mask">
                            <h2>Q-Tec Engineering W.L.L</h2>
                           <!-- <p>Gateway to Mt. Everest. "The highest mountain in the world."</p>
                            <a href="#" class="info">Read More</a> -->
                        </div>
                    </div> 

                       <div class="view view-first">
                        <img src="{{ URL::asset('images/package/8.jpg') }}" />
                        <div class="mask">
                            <h2>Q-Tec Facilities W.L.L</h2>
                         <!--   <p>The cool and the most popular treks.</p>
                            <a href="#" class="info">Read More</a> -->
                        </div>
                    </div> 


                    <div class="view view-first">
                        <img src="{{ URL::asset('images/package/9.jpg') }}" />
                        <div class="mask">
                            <h2>NAFFCO</h2>
                           <!-- <p>A small traditional village in the lap of the Himalayas.</p>
                            <a href="#" class="info">Read More</a> -->
                        </div>
                    </div>--}}
                    @endif

                        {{-----------------------------------dyanmic clients------------------------------}}

                        @foreach($clients as $client)
                            @if($client->status == "published")
                                <div class="view view-first">
                                    <img src="{{ URL::asset('client/' . $client->image) }}" />
                                    <div class="mask">
                                        <h2>{{ $client->title }}</h2>
                                        <!-- <p>A small traditional village in the lap of the Himalayas.</p>
                                         <a href="#" class="info">Read More</a> -->
                                    </div>
                                </div>
                            @endif
                        @endforeach
                 </div>   <!-- end of col-md-10 -->



                <!-- ############## HOVER EFFECT ENDS IN HERE ################ --> 

                
            </div><!--/.row-->
            <hr>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="center">
                        <h2>What our clients say</h2>
                        <p>We value our clients providing the most dedicated and sincere human resource. </p>
                    </div>
                    <div class="gap"></div>
                    <div class="row asialink_jobcate">

                        {{---------------------------------------dynamic reviews---------------------------------}}

                        @foreach($reviews as $review)
                            @if($review->status == "published")
                            <div class="col-md-6">
                                <blockquote>
                                    {!! $review->description !!}
                                    <small><cite title="Source Title">{{ $review->name }}</cite></small>
                                </blockquote>
                            </div>
                            @endif
                        @endforeach

                        {{-----------------------------------------static reviews------------------------------------------}}

                        {{--<div class="col-md-6">
                            <blockquote>
                                <p>Asia Link Services has been providing human resouce to us for years. We have no complains in any ways. They have the best team in recruiting right people in the right place. We wish them all the best. </p>
                                <small>Mr. Girish Raman, <cite title="Source Title">MD, Alpine Facilties Management</cite></small>
                            </blockquote>
                        </div>
                        <div class="col-md-6">
                            <blockquote>
                                <p>Recruiting people abroad  had always been hectic with some news laws been imposed in different nationalities. Choosing Asia Link Services has always been a  better decision for us since all the  process and procedures in recruitment and legal issues are settled by the expertise at Asia Link Services.</p>
                                <small>Mr. Zaafir Ali Khan, <cite title="Source Title">GM, IIBM</cite></small>
                            </blockquote>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#services-->

   

@endsection