@extends('frontend.layouts.master')

@section('style')
    <link href="{{ URL::asset('/assets/css/table.css') }}" rel="stylesheet"/>
@endsection

@section('title')
    OnlineForm | AsiaLink Services
@endsection

@section('content')
    @if(count($errors) > 0)
        <section class="info-box fail">
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        </section>
    @endif
    @if(Session::has('success'))
        <section class="info-box success">
            {{ Session::get('success') }}
        </section>
    @endif
    <section id="about-us" class="container">
        <form name="apply_form" action="{{ route('form') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="job">Job Category</label>
                        <select class="form-control jobcategory" name="jobcategory" id="jobcategory">
                            <option value="0" disabled="true" selected="true">Select a jobcategory</option>
                            @foreach($jobcategories as $jobcategory)
                                @if($jobcategory->company_id == $company->id)
                                <option value="{{ $jobcategory->id }}">{{ $jobcategory->title }}</option>
                                @endif
                            @endforeach
                            <option>other..</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="demand">Demand</label>
                        <select class="form-control demand" name="demand" id="demand">
                            <option value="0" disabled="true" selected="true">-</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Applicant Details</div>
                        <div class="panel-body">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="first_name">First Name:</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ Request::old('first_name') }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="middle_name">Middle Name:</label>
                                    <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{ Request::old('middle_name') }}" >
                                </div>
                            </div>  <div class="col-md-4">
                                <div class="form-group">
                                    <label for="last_name">Last Name:</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ Request::old('last_name') }}" required>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nationality">Nationality:</label>
                                    <select class="form-control" id="nationality" name="nationality">
                                        <option value="Nepali">Nepali</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="religion">Religion:</label>
                                    <select class="form-control" id="religion" name="religion">
                                        <option value="">Choose</option>
                                        <option value="Hinduism">Hinduism</option>
                                        <option value="Buddhism">Buddhism</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Christianity">Christianity</option>
                                        <option value="Jainism">Jainism</option>
                                        <option value="Sikhism">Sikhism</option>
                                    </select>
                                </div>
                            </div>  <div class="col-md-4">
                                <div class="form-group">
                                    <label for="gender">Gender:</label>
                                    <select class="form-control" id="gender" name="gender">
                                        <option value="">Choose</option>
                                        <option value="m">Male</option>
                                        <option value="f">Female</option>
                                        <option value="o">Other</option>
                                    </select>
                                </div>
                            </div>


                            {{--<div class="col-md-4">
                                <div class="form-group">
                                    <label for="passport_number">Passport Number:</label>
                                    <input type="text" class="form-control" id="passport_number" name="passport_number" value="{{ Request::old('passport_number') }}">
                                </div>
                            </div>--}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="passport_number">Passport Number:</label>
                                    <input type="text" class="form-control" id="passport_number" name="passport_number" value="{{ Request::old('passport_number') }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pp_issue_date">Passport Issue Date:</label>
                                    <input type="text" class="form-control" id="pp_issue_date" name="pp_issue_date" value="{{ Request::old('pp_issue_date') }}" >

                                </div>
                            </div>  <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pp_expiry_date">Passport Expiry Date:</label>
                                    <input type="text" class="form-control" id="pp_expiry_date" name="pp_expiry_date" value="{{ Request::old('pp_expiry_date') }}" >

                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="blood_group">Blood Group:</label>
                                    <select class="form-control" id="blood_group" name="blood_group"> <option value="o-">O-</option><option value="o+">O+</option><option value="a-">A-</option><option value="a+">A+</option><option value="b-">B-</option><option value="b+">B+</option><option value="ab+">AB+</option><option value="ab-">AB-</option></select></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="height">Height (eg. 5' 10"):</label>
                                    <input type="text" class="form-control" id="height" name="height" value="{{ Request::old('height') }}"  >

                                </div>
                            </div>  <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pp_expiry_date">Weight (Approx. in kg):</label>
                                    <input type="text" class="form-control" id="weight" name="weight" value="{{ Request::old('weight') }}" >

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">Family Details</div>
                        <div class="panel-body">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="father_name">Father's Name:</label>
                                    <input type="text" class="form-control" id="father_name" name="father_name" value="{{ Request::old('father_name') }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="mother_name">Mother's Name:</label>
                                    <input type="text" class="form-control" id="mother_name" name="mother_name" value="{{ Request::old('mother_name') }}" required>
                                </div>
                            </div>  <div class="col-md-4">
                                <div class="form-group">
                                    <label for="grandfather_name">Grand Father's Name:</label>
                                    <input type="text" class="form-control" id="grandfather_name" name="grandfather_name" value="{{ Request::old('grandfather_name') }}" >
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="marital_status">Marital Status:</label>
                                    <select class="form-control" id="marital_status" name="marital_status" required>
                                        <option value="single">Single</option>
                                        <option value="engaged">Engaged</option>
                                        <option value="married">Married</option>
                                        <option value="widowed">Widowed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="spouse_name">Spouse Name:</label>
                                    <input type="text" class="form-control" id="spouse_name" name="spouse_name" value="{{ Request::old('spouse_name') }}"  >

                                </div>
                            </div>  <div class="col-md-4">
                                <div class="form-group">
                                    <label for="number_child">Children Number:</label>
                                    <input type="text" class="form-control" id="number_child" name="number_child" value="{{ Request::old('number_child') }}"  >

                                </div>
                            </div>





                        </div>
                    </div>

{{----------------------------------------changes required-------------------------------------------------------------------}}

                    <div class="panel panel-primary">
                        <div class="panel-heading">Address Details</div>
                        <div class="panel-body">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tole">Tole Name:</label>
                                    <input type="text" class="form-control" id="tole" name="tole" value="{{ Request::old('tole') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ward">Ward Number:</label>
                                    <input type="text" class="form-control" id="ward" name="ward" value="{{ Request::old('ward') }}"  >
                                </div>
                            </div>  <div class="col-md-4">
                                <div class="form-group">
                                    <label for="vdc_municipality">VDC/Municipality:</label>
                                    <input type="text" class="form-control" id="vdc_municipality" name="vdc_municipality" value="{{ Request::old('vdc_municipality') }}" >
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="district">District:</label>
                                    <input type="text" class="form-control" id="district" name="district" value="{{ Request::old('district') }}" >

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="zone">Zone:</label>
                                    <input type="text" class="form-control" id="zone" name="zone" value="{{ Request::old('zone') }}" >

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="country">Country:</label>
                                    <input type="text" class="form-control" id="country" name="country" value="{{ Request::old('country') }}" >

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">Contact Details</div>
                        <div class="panel-body">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="mobile_num">Mobile Number:</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile" value="{{ Request::old('mobile') }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="landline_num">Landline Number:</label>
                                    <input type="text" class="form-control" id="landline" name="landline" value="{{ Request::old('landline') }}"  >
                                </div>
                            </div>  <div class="col-md-4">
                                <div class="form-group">
                                    <label for="contact_email">Contact Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ Request::old('email') }}" >
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Qualifications/Trainings</div>
                        <div class="panel-body">

                            <div class="form-group">
                                <label for="academic_qualification">Academic Qualifications (Add each in different line)</label>
                                <textarea class="form-control" cols="30" rows="3" id="academic_qualification" name="academic_qualification">{{ Request::old('academic_qualification') }}</textarea></div>

                            <div class="form-group">
                                <label for="work_experience">Work Experience (Add each in different line)</label>
                                <textarea class="form-control" cols="30" rows="3" id="work_experience" name="work_experience">{{ Request::old('work_experience') }}</textarea></div>

                            <div class="form-group">
                                <label for="technical_training">Technical Training (Add each in different line)</label>
                                <textarea class="form-control" cols="30" rows="3" id="technical_training" name="technical_training">{{ Request::old('"technical_training') }}</textarea></div>
                        </div>
                    </div>


                    <div class="panel panel-primary">
                        <div class="panel-heading">Documents</div>
                        <div class="panel-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <input type="file" name="photo" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="citizenship">Citizenship</label>
                                    <input type="file" name="citizenship" class="form-control">



                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="passport">Scanned Passport</label>
                                    <input type="file" name="passport" class="form-control" required>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ref_letter">Reference Letter</label>
                                    <input type="file" name="ref_letter" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="experience_letter1">Experience Letter 1</label>
                                    <input type="file" name="experience_letter1" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="experience_letter2">Experience Letter 2</label>
                                    <input type="file" name="experience_letter2" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="experience_letter3">Experience Letter 3</label>
                                    <input type="file" name="experience_letter3" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="experience_letter4">Experience Letter 4</label>
                                    <input type="file" name="experience_letter4" class="form-control">
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="panel panel-primary">
                        <div class="panel-heading">Certificates</div>
                        <div class="panel-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="slc_certificate">SLC Certificate</label>
                                    <input type="file" name="slc_certificate" id="slc_certificate" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="slc_character">SLC Character Cerficate</label>
                                    <input type="file" name="slc_character" id="slc_character" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inter_cert">+2/Inter Certificate</label>
                                    <input type="file" name="inter_certificate" id="inter_certificate"class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inter_character">+2/Inter Character Certificate</label>
                                    <input type="file" name="inter_character" id="inter_character" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bachelor_certificate">Bachelor Certificate</label>
                                    <input type="file" name="bachelor_certificate" id="bachelor_certificate" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bachelor_character">Bachelor Character Certificate</label>
                                    <input type="file" name="bachelor_character" id="bachelor_character" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="master_certificate">Master Certificate</label>
                                    <input type="file" name="master_certificate" id="master_certificate" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="master_character">Master Character Certificate</label>
                                    <input type="file" name="master_character" id="master_character" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="recommendation_letter">Recommendation letter</label>
                                    <input type="file" name="recommendation_letter" name="recommendation_letter" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Language Skills</div>
                        <div class="panel-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile_num">English Speaking:</label><br/>
                                        <input type="radio" name="english_speaking" id="english_speaking" value="V.Good"> V.Good
                                        <input type="radio" name="english_speaking" id="english_speaking" value="Good"> Good
                                        <input type="radio" name="english_speaking" id="english_speaking" value="Fair"> Fair
                                        <input type="radio" name="english_speaking" id="english_speaking" value="Poor"> Poor
                                </div>
                            </div><div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile_num">English Reading:</label><br/>
                                        <input type="radio" name="english_reading" id="english_reading" value="V.Good"> V.Good
                                        <input type="radio" name="english_reading" id="english_reading" value="Good"> Good
                                        <input type="radio" name="english_reading" id="english_reading" value="Fair"> Fair
                                        <input type="radio" name="english_reading" id="english_speaking" value="Poor"> Poor
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile_num">Malay Speaking:</label><br/>
                                    <input type="radio" name="malay_speaking" id="malay_speaking" value="V.Good"> V.Good
                                    <input type="radio" name="malay_speaking" id="malay_speaking" value="Good"> Good
                                    <input type="radio" name="malay_speaking" id="malay_speaking" value="Fair"> Fair
                                    <input type="radio" name="malay_speaking" id="malay_speaking" value="Poor"> Poor
                                </div></div><div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile_num">Malay Reading:</label><br/>
                                    <input type="radio" name="malay_reading" id="malay_reading" value="V.Good"> V.Good
                                    <input type="radio" name="malay_reading" id="malay_reading" value="Good"> Good
                                    <input type="radio" name="malay_reading" id="malay_reading" value="Fair"> Fair
                                    <input type="radio" name="malay_reading" id="malay_reading" value="Poor"> Poor
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile_num">Hindi Speaking:</label><br/>
                                    <input type="radio" name="hindi_speaking" id="hindi_speaking" value="V.Good"> V.Good
                                    <input type="radio" name="hindi_speaking" id="hindi_speaking" value="Good"> Good
                                    <input type="radio" name="hindi_speaking" id="hindi_speaking" value="Fair"> Fair
                                    <input type="radio" name="hindi_speaking" id="hindi_speaking" value="Poor"> Poor
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile_num">Hindi Reading:</label><br/>
                                        <input type="radio" name="hindi_reading" id="hindi_reading" value="V.Good"> V.Good
                                        <input type="radio" name="hindi_reading" id="hindi_reading" value="Good"> Good
                                        <input type="radio" name="hindi_reading" id="hindi_reading" value="Fair"> Fair
                                        <input type="radio" name="hindi_reading" id="hindi_reading" value="Poor"> Poor
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile_num">Nepali Speaking:</label><br/>
                                    <input type="radio" name="nepali_speaking" id="nepali_speaking" value="V.Good"> V.Good
                                    <input type="radio" name="nepali_speaking" id="nepali_speaking" value="Good"> Good
                                    <input type="radio" name="nepali_speaking" id="nepali_speaking" value="Fair"> Fair
                                    <input type="radio" name="nepali_speaking" id="nepali_speaking" value="Poor"> Poor
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile_num">Nepali Reading:</label><br/>
                                    <input type="radio" name="nepali_reading" id="nepali_reading" value="V.Good"> V.Good
                                    <input type="radio" name="nepali_reading" id="nepali_reading" value="Good"> Good
                                    <input type="radio" name="nepali_reading" id="nepali_reading" value="Fair"> Fair
                                    <input type="radio" name="nepali_reading" id="nepali_reading" value="Poor"> Poor
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile_num">Arabic Speaking:</label><br/>
                                    <input type="radio" name="arabic_speaking" id="arabic_speaking" value="V.Good"> V.Good
                                    <input type="radio" name="arabic_speaking" id="arabic_speaking" value="Good"> Good
                                    <input type="radio" name="arabic_speaking" id="arabic_speaking" value="Fair"> Fair
                                    <input type="radio" name="arabic_speaking" id="arabic_speaking" value="Poor"> Poor
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile_num">Arabic Reading:</label><br/>
                                    <input type="radio" name="arabic_reading" id="arabic_reading" value="V.Good"> V.Good
                                    <input type="radio" name="arabic_reading" id="arabic_reading" value="Good"> Good
                                    <input type="radio" name="arabic_reading" id="arabic_reading" value="Fair"> Fair
                                    <input type="radio" name="arabic_reading" id="arabic_reading" value="Poor"> Poor
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <label for="mobile_num">Other Language:</label><br/>
                                    <input type="text" class="form-control" name="other_language" id="other" value="{{ Request::old('other_language') }}"/>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-default btn_green">Apply Now</button>
                </div>
            </form>

    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        /*$(document).ready(function(){

         // Javascript method's body can be found in assets/js/demos.js
         demo.initDashboardPageCharts();

         });*/
        $(document).ready(function(){

            $(document).on('change','.jobcategory',function(){
                /* console.log("hmm its change");*/

                var jobcategory_id=$(this).val();
                // console.log(cat_id);
                var div=$(this).parent();

                var op=" ";

                $.ajax({
                    type:'get',
                    url:'{!!URL::to('findDemandName')!!}',
                    data:{'id':jobcategory_id},
                    success:function(data){
                        console.log('success');

                        console.log(data);
                        var length = Object.keys(data).length;
                        console.log(length);

                        for(var i = 0; i < length; i++){
                            op+='<option value="'+data[i].title+'">'+data[i].title+'</option>';
                        }

                        $('.demand').html(op);

                        div.find('.demand').html(" ");
                        div.find('.demand').append(op);
                    },
                    error:function(){

                    }
                });
            });
        });
    </script>

    <!-- end of section -->

@endsection