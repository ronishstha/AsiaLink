@extends('frontend.layouts.master')

@section('title')
    Hot Jobs | AsiaLink Services
@endsection

@section('content')
  

    <section id="terms" class="container">

        <div class="row">
            <div class="col-sm-7">
                <div class="asialink_hotjobs">
                  <!-- <h3> HOT JOBS</h3> -->

                    @if(count($jobs) == 0)
                        <p>No Jobs Available</p>
                    @endif

                    @foreach ($jobs as $job)
                        @if ($job->status == "published")
                        <div class="row">
                            <div class="asialink_hotjobs1">
                                {{--<i class="fa fa-star fa-2x"></i> <i class="fa fa-star fa-2x"></i>--}}   {{----star rating-----}}

                                <h4>{{ $job->title }}</h4>
                                <h5>{{ $job->company }}</h5>
                                <h5>{{ $job->location }}, {{ $job->country }}</h5>
                                <h5> Required No: {{ $job->required_no }}</h5>
                                <h5>Salary: {{ $job->salary }}</h5>
                                <p>
                                    {!! $job->requirement !!}
                                </p>
                                <p>
                                    {!! $job->description !!}
                                </p>

                            </div> <!-- end of asialink_1 -->
                        </div> <!-- end of row -->
                        @endif
                    @endforeach

                    {{-----------------------------------------------------static jobs--------------------------------------}}

<!-- ############# 1ST ROW ############ -->
{{--                    <div class="row">
                        <div class="asialink_hotjobs1">
                            <i class="fa fa-star fa-2x"></i> <i class="fa fa-star fa-2x"></i>

                            <h4>Storekeeper</h4>
                                <h5> Al Shirawi Enterprises</h5>
                                    <h5> Dubai, U.A.E</h5>
                                        <h5> Required No: 10</h5>   
                                            <h5>Salary: AED 1500 per month</h5> 
                                            <p>
                                                This position will require facilitating the physical and time consuming aspects of storekeeping that allows the Storekeeper space to facilitate proper administration.
                                            </p>

                                            <p>
                                                All candidates will have strong organization skills, ability to work effectively in a difficult environment and be flexible in demanding situations. You will have proficiency in English and good interpersonal and team working skills. Your commitment to the values including gender equity in all that we do is essential.   
                                            </p>

                                             <span class="input-group-btn">
                                                <button class="btn btn-danger" type="button">Apply NOW</button>
                                            </span>


                        </div> <!-- end of asialink_1 -->        
                    </div> <!-- end of row -->                

<!-- ############### 2ND ROW 3  -->

                    <div class="row">
                        <div class="asialink_hotjobs2">
                            <i class="fa fa-star fa-2x"></i> <i class="fa fa-star fa-2x"></i> <i class="fa fa-star fa-2x"></i>

                            <h4>Sales</h4>
                                <h5> AlShaya Enterprises </h5>
                                    <h5> Dubai, U.A.E</h5>
                                        <h5> Required No: 10</h5>   
                                            <h5>Salary: AED 1500 per month</h5> 
                                            <p>
                                                This position will require facilitating the physical and time consuming aspects of storekeeping that allows the Storekeeper space to facilitate proper administration.
                                            </p>

                                            <p>
                                                All candidates will have strong organization skills, ability to work effectively in a difficult environment and be flexible in demanding situations. You will have proficiency in English and good interpersonal and team working skills. Your commitment to the values including gender equity in all that we do is essential.   
                                            </p>

                                             <span class="input-group-btn">
                                                <button class="btn btn-danger" type="button">Apply NOW</button>
                                            </span>


                        </div> <!-- end of asialink_1 -->        
                    </div> <!-- end of row -->        


                <!-- ############# 3RD ROW ############ -->
                    <div class="row">
                        <div class="asialink_hotjobs1">
                            <i class="fa fa-star fa-2x"></i> <i class="fa fa-star fa-2x"></i>

                            <h4>Cleaners</h4>
                                <h5> Dolphin Facilities</h5>
                                    <h5> Doha, Qatar</h5>
                                        <h5> Required No: 10</h5>   
                                            <h5>Salary: AED 1500 per month</h5> 
                                            <p>
                                                This position will require facilitating the physical and time consuming aspects of storekeeping that allows the Storekeeper space to facilitate proper administration.
                                            </p>

                                            <p>
                                                All candidates will have strong organization skills, ability to work effectively in a difficult environment and be flexible in demanding situations. You will have proficiency in English and good interpersonal and team working skills. Your commitment to the values including gender equity in all that we do is essential.   
                                            </p>

                                             <span class="input-group-btn">
                                                <button class="btn btn-danger" type="button">Apply NOW</button>
                                            </span>


                        </div> <!-- end of asialink_1 -->        
                    </div> --}}<!-- end of row -->


                </div> <!-- end of asialink_documentation -->    
            </div> <!-- end of col-sm7 -->

            <div class="col-sm-5">
                <div class="asialink_hotjobsimg">
                    <img class="img-responsive" src="{{ URL::asset('images/security.png') }}" alt="Asia Link Services" />

                </div>

                <div class="asialink_hotjobsimgtext">
                    <h4>

                        Research indicates that Nepalese employees have three prime needs: Interesting work, recognition for doing a good job, and being let in on things that are going on in the company.
                     </h4>

                </div>  <!-- end of asialink_hotjobsimg text -->    

            </div> <!-- end of col-sm-5 -->    


    </div> <!-- end of row -->
      
       
    </section><!--/#terms-->
@endsection