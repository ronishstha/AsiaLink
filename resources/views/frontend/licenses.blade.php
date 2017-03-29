@extends('frontend.layouts.master')

@section('title')
    Licenses | AsiaLink Services
@endsection

@section('content')
    <section id="portfolio" class="container">
        <ul class="portfolio-filter">
            <li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Licenses</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".html">Demands</a></li>
        <!--    <li><a class="btn btn-default" href="#" data-filter=".wordpress">Wordpress</a></li> -->
        </ul><!--/#portfolio-filter-->

        <ul class="portfolio-items col-3">
            <li class="portfolio-item joomla bootstrap">
                <div class="item-inner">
                    <img src="{{ URL::asset('images/portfolio/thumb/item1.jpg') }}" alt="">
                    <h5>Ministry of Labour & Transport Management</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="{{ URL::asset('images/portfolio/licensefull/item1.jpg') }}" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item joomla bootstrap">
                <div class="item-inner">
                    <img src="{{ URL::asset('images/portfolio/thumb/item2.jpg') }}" alt="">
                    <h5>Ministry of Industries Trade & Supply</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="{{ URL::asset('images/portfolio/licensefull/item2.jpg') }}" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item joomla bootstrap">
                <div class="item-inner">
                    <img src="{{ URL::asset('') }}images/portfolio/thumb/item3.jpg" alt="">
                    <h5>Permanent Account Number (PAN)</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="{{ URL::asset('images/portfolio/licensefull/item3.jpg') }}" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            
            <li class="portfolio-item joomla bootstrap">
                <div class="item-inner">
                    <img src="{{ URL::asset('images/portfolio/thumb/item4.jpg') }}" alt="">
                    <h5>Certificate of Registration - ISO 9001:2008</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="{{ URL::asset('images/portfolio/licensefull/item4.jpg') }}" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->

            <li class="portfolio-item joomla html">
                <div class="item-inner">
                    <img src="{{ URL::asset('images/portfolio/demandsthumb/demand1.jpg') }}" alt="">
                    <h5>NAFCO DEMAND</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="{{ URL::asset('images/portfolio/demandstfull/demand1.jpg') }}" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                    </div>           
                </div>           
            </li>



            
            <li class="portfolio-item joomla html">
                <div class="item-inner">
                    <img src="{{ URL::asset('images/portfolio/demandsthumb/demand2.jpg') }}" alt="">
                    <h5>Brookfield BM</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="{{ URL::asset('images/portfolio/demandsfull/demand2.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                    </div>    ') }}
                </div>       
            </li><!--/.portfolio-item-->



            <li class="portfolio-item joomla html">
                <div class="item-inner">
                    <img src="{{ URL::asset('images/portfolio/demandsthumb/demand3.jpg') }}" alt="">
                    <h5>China Harbour Engineering</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="{{ URL::asset('images/portfolio/demandsfull/demand3.jpg" rel="prettyPhoto') }}"><i class="icon-eye-open"></i></a>
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->

            <li class="portfolio-item joomla html">
                <div class="item-inner">
                    <img src="{{ URL::asset('images/portfolio/demandsthumb/demand4.jpg') }}" alt="">
                    <h5>China Harbour Engineering</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="{{ URL::asset('images/portfolio/demandsfull/demand4.jpg') }}" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->


        </ul> <!-- ### main ul ######## -->
        
    </section><!--/#port

    @endsection

