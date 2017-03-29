@extends('frontend.layouts.master')

@section('title')
    Apply Online | AsiaLink Services
@endsection

@section('content')

    <section id="registration" class="container">
        <div class="row">
        <div class="col-md-6">
            <h3 style="padding-bottom: 20px;" class="media-heading">Online Application</h3>
                                    <form role="form" class="wowload fadeInRight">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control"  placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="Phone" class="form-control"  placeholder="Phone">
                                        </div>  

                                         <div class="form-group">
                                            <input type="address" class="form-control"  placeholder="Address">
                                        </div>  

                                        <div class="form-group">
                                            <input type="passport" class="form-control"  placeholder="Passport Number">
                                        </div>  


                                        <!-- ######### OPTIONS FORM ############ -->

                                         <div class="form-group">
                                            <div class="row">
                                            <div class="col-xs-6">
                                            <select class="form-control">
                                              <option>Experiences</option>
                                              <option>Less than 1 year</option>
                                              <option>2 years</option>
                                              <option>4 years</option>
                                              <option>5 years</option>
                                            </select>
                                            </div>        
                                            <div class="col-xs-6">
                                            <select class="form-control">
                                              <option>Qualification</option>
                                              <option>SLC</option>
                                              <option>HSEB</option>
                                              <option>Bachelors</option>
                                              <option>Masters</option>
                                            </select>
                                            </div></div>
                                        </div>

                                         <div class="form-group">
                                            <textarea class="form-control"  placeholder="Message" rows="4"></textarea>
                                        </div>
                                        <button class="btn btn-default">Submit</button>


                                  </form>   <!-- END OF FORM -->


        </div> <!-- end of col-md-6 -->

        <!-- ################ IMAGES GOES IN HERE ################### -->

            <div class="col-md-3">

                <img class="img-responsive" src="{{ URL::asset('images/lady.png') }}" alt="" />

            </div> <!-- end of col-md-6 -->

            <div class="col-md-3">

                <div class="applyonlinetitle">
                
                    <h2> Latest Jobs. </h2>

                         <ul>
                                <li> General Labourers </li>
                                <li> Heavy Vehicle Drivers </li>
                                <li> Sales (Male / Female) </li>
                                <li> Cleaners</li>
                                <li> Admin Clerks </li>
                                <li> Typist </li>
                                <li> Store Keepers </li>
                                <li> Mesh Boys</li>
                                <li> Domestic Workers </li>
                                <li> Light Vehicle Drivers </li>
                                <li> Nurse </li>
                                <li> Personal Assistant</li>

                        </ul> 

                        <p> To apply, Please fill in the form  or you can directly email your resume at: info@asialinkservices.com or call at: : (977) 1 - 4112801. </p>

                        <p> <strong>We believe in equal rights opportunities.</strong></p>

                </div> <!-- end of applyonline -->

            </div> <!-- end of col-md-2 -->

        <!-- ################# END OF IMAGES ################### -->

       </div> <!-- end of row --> 
    </section><!--/#registration-->

@endsection