@extends('frontend.layouts.master')

@section('title')
    Demands | AsiaLink Services
@endsection

@section('content')
    
    <section id="title" class="imsbg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Demands</h1>
                    <p>I.M.S Manpower is competent enough to supply the demands of all kinds of human resources across the globe, hence making the right place for the right candidate and the employers. </p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Demands</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title--> 

    <section id="portfolio" class="container">
        <ul class="portfolio-filter">
            <li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
          <!--  <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Licenses</a></li> -->
            <li><a class="btn btn-default" href="#" data-filter=".html">Demands</a></li>
        <!--    <li><a class="btn btn-default" href="#" data-filter=".wordpress">Wordpress</a></li> -->
        </ul><!--/#portfolio-filter-->

        <ul class="portfolio-items col-3">

            <!--
            <li class="portfolio-item apps">
                <div class="item-inner">
                    <img src="{{ URL::asset('images/portfolio/thumb/item5.jpg') }}" alt="">
                    <h5>Black Eagle Technical Services LLC</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/licensefull/item5.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            
            <li class="portfolio-item joomla html bootstrap">
                <div class="item-inner">
                    <img src="{{ URL::asset('images/portfolio/demandsthumb/item6.jpg') }}" alt="">
                    <h5>Elite Security, Abu Dhabi, U.A.E</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="{{ URL::asset('images/portfolio/demandsfull/item6.jpg') }}" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->


             <li class="portfolio-item joomla html bootstrap">
                <div class="item-inner">
                    <img src="{{ URL::asset('images/portfolio/demandsthumb/item7.jpg') }}" alt="">
                    <h5>Emirates Transport, Abu Dhabi, U.A.E</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="{{ URL::asset('images/portfolio/demandsfull/item7.jpg') }}" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->

              <li class="portfolio-item joomla html bootstrap">
                <div class="item-inner">
                    <img src="{{ URL::asset('images/portfolio/demandsthumb/item8.jpg') }}" alt="">
                    <h5>Innovations Building Maintennca LLC, Dubai, U.A.E</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="{{ URL::asset('images/portfolio/demandsfull/item8.jpg') }}" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            
            <li class="portfolio-item joomla html bootstrap">
                <div class="item-inner">
                    <img src="{{ URL::asset('images/portfolio/demandsthumb/item9.jpg') }}" alt="">
                    <h5>Dubai Royal Palace Hospitality LLC, Dubai, U.A.E</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="{{ URL::asset('images/portfolio/demandsfull/item9.jpg') }}" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->

            <li class="portfolio-item joomla html bootstrap">
                <div class="item-inner">
                    <img src="{{ URL::asset('images/portfolio/demandsthumb/item10.jpg') }}" alt="">
                    <h5>Avari Dubai Hotel, Dubai, U.A.E</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="{{ URL::asset('images/portfolio/demandsfull/item10.jpg') }}" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->

             <li class="portfolio-item joomla html bootstrap">
                <div class="item-inner">
                    <img src="{{ URL::asset('') }}images/portfolio/demandsthumb/item11.jpg" alt="">
                    <h5>Emirates Cab, Dubai, U.A.E</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="{{ URL::asset('images/portfolio/demandsfull/item11.jpg') }}" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->




            <!--
            <li class="portfolio-item joomla wordpress apps">
                <div class="item-inner">
                    <img src="{{ URL::asset('images/portfolio/thumb/item4.jpg') }}" alt="">
                    <h5>Permanent Account Number (PAN)</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/licensefull/item4.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>          
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->

            <!--
            <li class="portfolio-item joomla html">
                <div class="item-inner">
                    <img src="{{ URL::asset('images/portfolio/thumb/item5.jpg') }}" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/item5.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>          
                    </div>    
                </div>       
            </li><!--/.portfolio-item-->

            <!--
            <li class="portfolio-item wordpress html">
                <div class="item-inner">
                    <img src="{{ URL::asset('images/portfolio/thumb/item6.jpg') }}" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/item6.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>           
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
        </ul> <!-- ### main ul ######## -->
        
    </section><!--/#portfolio-->
@endsection

