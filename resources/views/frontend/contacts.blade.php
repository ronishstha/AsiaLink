@extends('frontend.layouts.master')

@section('title')
    Clients | AsiaLink Services
@endsection

@section('content')
    <section id="contact-page" class="container">

        <div class="row">
                <div class="col-sm-6">
                    <h1>Contact Us</h1>
                    <p>
                        P.O Box No.: 21574 <br />
                        Manpower Bazar, Airport <br />
                        Kathmandu, Nepal <br />
                        P: (977) 1-4112801   | F: (977) 1-4112802  <br />
                        E: info@asialinkservices.com | asialink119@gmail.com
                    </p>
                </div>

        </div>        

        <div class="row">
            <div class="col-sm-8 asialink_contacts">
                <h4>Please fill in the form and We shall get back to you shortly.</h4>
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Email address">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                        </div>
                    </div>
                </form>
            </div><!--/.col-sm-8-->
            <div class="col-sm-4">
                <h4>Locate us</h4>
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d7065.161401876344!2d85.34922316859385!3d27.69935147533147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x39eb19869793bff7%3A0xf2f77266b222365a!2sSinamangal%2C+Kathmandu+44600!3m2!1d27.6991378!2d85.35109039999999!5e0!3m2!1sen!2snp!4v1436633670241" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>


            </div><!--/.col-sm-4-->
        </div>
    </section><!--/#contact-page-->

   
@endsection