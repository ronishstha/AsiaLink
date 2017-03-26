@extends('frontend.layouts.master')

@section('title')
    NepaleseWorkers | AsiaLink Services
@endsection

@section('content')


    <section id="about-us" class="container">
        @if($page->status == "published")
            {!! $page->content !!}
        @endif
        {{--<div class="row">


            <div class="col-sm-6 asialink_aboutusheader">
                <h1>Why Nepalese Workers ?</h1>
                <p style="text-align:justify;">

                    Nepalese professionals and skilled workers are considered by many as among the most hard working, efficient and loyal workers in the world.</P>

                 <p style="text-align:justify;">
                    Over the years, Nepalese have journeyed to many parts of the world to work as professionals, skilled, semi-skilled and technical workers. Nine million Nepalese are spread around the world working in every imaginable job, thus sometimes earning the distinction as a global worker. In a nutshell, the demand for Nepalese workers stem from some widely-recognized attributes.

                </p>


                <ul class="asialinknepalese_list">
                       <li> <span style="font-weight:bold">Strong will to succeed.</span> Generally able to rise up to the occasion when given responsibilities category. </li>
                       <li><span style="font-weight:bold"> Family Oriented. </span>Considers work as sacrifices he does to offer a better life to the family.</li>
                       <li> <span style="font-weight:bold">Good Work Ethics.</span> Possesses an inherent capacity for hard work, diligent and well-disciplined.</li>
                       <li><span style="font-weight:bold"> Good team player.</span> Is generally friendly and has a positive outlook in his relationship with other people and co-workers</li>
                       <li> <span style="font-weight:bold">Innovative Worker.</span> Many possess diverse skills and are easily trainable. Ha penchant for finding solutions to problems and challenges.</li>
                       <li> <span style="font-weight:bold">People-Oriented. </span>Can easily adjust to foreign culture and work environment. Has a sound temperament and can cope with the demands and pressure of his work.</li>
                       <li><span style="font-weight:bold"> Warm and Caring.</span> Excel and is recognized worldwide for professions and competencies that require people oriented service and care.</li>

                </ul>

            </div><!--/.col-sm-5-->
            <div class="col-sm-6">

                    <div class="maapadmabuilding">

                        <img style="padding-left:100px;"class="img-responsive" src="{{ URL::asset('images/chef.png') }}" alt="Asia Link Services" />

                        <p style="margin-top:20px;padding-left:70px;">
                           A world class skilled Nepalese cuisine Chef.
                        </p>



                    </div> <!-- end of maapadma building -->

            </div><!--/.col-sm-5-->


        </div><!--/.row-->


        <div class="gap">

        </div>--}}

    </section>--}}<!--/#about-us-->
@endsection