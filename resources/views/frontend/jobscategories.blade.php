@extends('frontend.layouts.master')

@section('title')
    Job Categories | AsiaLink Services
@endsection

@section('content')
   
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="center gap">
                        <h2>What we provide</h2>
                        <p>Establishing Nepali workers as the most competent and honest workforce.</p>
                    </div>                
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                             <i class="icon-star icon-md"></i> 


                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Hotels & Restaurants </h3>
                            <p>
                                    Waiters / Waitress/ Hostess  <br />
                                    Kitchen Commis I / II / III<br />
                                    Room Attendants / Bell Boys <br />
                                    Kitchen Stewards /Asst. Cooks <br />
                                    Electrician/A/C Mechanic/ Mechanic/Plumber/Carpenter/Painter <br />
                                    Cashiers/Accounts Assistants/ Auditors <br />
                                    F & B Captains <br />
                                    Chef-de-partie & Sous Chef  <br />
                                    Secretary/Business Centre Asst. <br />
                                    Pastry Man/Baker Confectioner <br />
                                    Cook continental Chinese, Indian <br />
                                    Dishwasher / Laundry 
                                                                        
                            </p>

                            <p> <img style="padding-top:20px;" class="img-rounded" src="{{ URL::asset('') }}images/jobs/hotel.jpg" height="250" width="250" /></p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-road icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Construction Sector</h3>
                            <p>
                                    Engineers  <br />
                                    Supervisors <br /> 
                                    Quality Surveyor<br />
                                    Safety Officer<br />
                                    Foreman / Plumber / Carpentry <br />
                                    Heavy Equipment Operators <br />
                                    Heavy / Light Driver <br />
                                    Concerte Pump Operator <br />
                                    Mason - Tile / Block / Plaster  <br />
                                    Painter - Spray / Roller <br />
                                    Scaffolder <br />
                                    Helper <br />
                                    Car Washer & many more.
                            </p>

                             <p> <img style="padding-top:20px;" class="img-rounded" src="{{ URL::asset('images/jobs/construction.jpg') }}" height="250" width="250" /></p>


                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-shopping-cart icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Sales & Marketing</h3>
                            <p>
                                    Managers  <br />
                                    Sales Executives <br /> 
                                    Sales Supervisor<br />
                                    Accountant<br />
                                   Cashier / Sales Men <br />
                                    Helper  <br />
                                    Sales Lady <br />
                                    Sales Cashier <br />
                                    Cleaners  <br />
                                    Painter - Spray / Roller <br />
                                    Trolley Boys <br />
                                    Sales Boys / Girls <br />
                                    Many more.
                            </p>

                             <p> <img style="padding-top:20px;" class="img-rounded" src="{{ URL::asset('images/jobs/sales.jpg') }}" height="250" width="250" /></p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div><!--/.row-->
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-key icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Security Sector</h3>
                            <p>

                                    Watch Man <br />
                                    secuirty Officer <br /> 
                                    Security Supervisor<br />
                                    Security Guard (Male / Female) <br />
                                   Body Guard & many more <br />
                            </p>

                             <p> <img style="padding-top:20px;" class="img-rounded" src="{{ URL::asset('images/jobs/security.jpg') }}" height="275" width="250" /></p>

                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-globe icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Service Sector</h3>
                            <p>
                                     Teacher <br />
                                    Barber <br /> 
                                    Beautician<br />
                                    Cleaners (Male / Female) <br />
                                   Care Giver / House Maid <br />
                            </p>
                            <p> <img style="padding-top:20px;" class="img-rounded" src="{{ URL::asset('images/jobs/caregiver.jpg') }}" height="275" width="250" /></p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-ok-sign icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Office Staff</h3>
                            <p>
                                Chartered Accountant <br />
                                Accountant / Asst. Accoutant<br /> 
                                  Computer Operator  <br />
                                    Office Boy<br />
                                   Receptionist <br />
                            </p>

                            <p> <img style="padding-top:20px;" class="img-rounded" src="{{ URL::asset('images/jobs/staff.jpg') }}" height="275" width="250" /></p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
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
                        <div class="col-md-6 ">
                            <blockquote>
                                <p>I.M.S Manpower has been providing human resouce to us for years. We have no complains in any ways. They have the best team in recruiting right people in the right place. We wish them all the best. </p>
                                <small>Mr. Girish Raman, <cite title="Source Title">MD, Alpine Facilties Management</cite></small>
                            </blockquote>
                        </div>
                        <div class="col-md-6">
                            <blockquote>
                                <p>Recruiting people abroad  had always been hectic with some news laws been imposed in different nationalities. Choosing I.M.S Manpower has always been a  better decision for us since all the  process and procedures in recruitment and legal issues are settled by the expertise at Asia Link Services.</p>
                                <small>Mr. Zaafir Ali Khan, <cite title="Source Title">GM, IIBM</cite></small>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#services-->
@section