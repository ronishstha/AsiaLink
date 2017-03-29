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

                                {{--------------------------static online form----------------------------------------}}

                               {{-- <li> <a href="{{ URL::asset('application1.pdf') }}"> Application Form I </a> </li>--}}

                                {{------------------------------dynamic online form-------------------------------------}}

                                @if(count($applications) == 0 )
                                    <p>No Application Form Available</p>
                                @endif
                                @foreach($applications as $application)
                                    @if ($application->status == "published")
                                        <li><a href="{{ URL::asset($application->form) }}">{{ $application->title }}</a> </li>
                                    @endif
                                @endforeach
                            </ul>
                </div> <!-- end of asialink_downloadforms -->            
            </div> <!-- end of col-md-6 -->

      
   

       </div> <!-- end of row --> 
    </section><!--/#registration-->
@endsection
