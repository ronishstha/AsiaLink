<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\Job;
use App\Client;
use App\Banner;
use App\Review;
use App\Page;
use App\Customer;
use Mail;


class FrontController extends Controller
{
    public function getHome(){
        $jobs = Job::all();
        $banners = Banner::all();
        $clients = Client::all();
        return view('frontend.index', ['jobs' => $jobs, 'banners' => $banners, 'clients' => $clients]);
    }

    public function getApplication(){
        $applications = Application::all();
        return view('frontend.download', ['applications' => $applications]);
    }

    public function getJobs(){
        $jobs = Job::all();
        return view('frontend.hotjobs', ['jobs' => $jobs]);
    }

    public function getClients(){
        $clients = Client::all();
        $reviews = Review::all();
        return view ('frontend.clients', ['clients' => $clients, 'reviews' => $reviews]);
    }

    public function getJobs_Categories(){
        $reviews = Review::all();
        return view ('frontend.jobscategories', ['reviews' => $reviews]);
    }

    public function postMessage(Request $request){
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $email = $request['email'];
        $message = $request['message'];

        Mail::send('frontend.message', [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'message' => $message], function($msg) use($first_name, $email){
            $msg->from($email, $first_name);
            $msg->to('info@asialinkservices.com.np', 'Admin');
            $msg->subject('Message from User');
        });
        return redirect()->route('contacts')->with(['success' => 'Successfully posted']);
    }

    public function getAbout(){
        $page = Page::where('title', 'About Us')->first();
        return view('frontend.about-us', ['page' => $page]);
    }

    public function getMessages(){
        $page = Page::where('title', 'Messages')->first();
        return view('frontend.messages', ['page' => $page]);
    }

    public function getNepalese_Workers(){
        $page = Page::where('title', 'Nepalese_Workers')->first();
        return view('frontend.nepaleseworkers', ['page' => $page]);
    }

    public function getDocumentation(){
        $page = Page::where('title', 'Documentation')->first();
        return view('frontend.documentation', ['page' => $page]);
    }

    public function getSelection(){
        $page = Page::where('title', 'Selection')->first();
        return view('frontend.selection', ['page' => $page]);
    }

    public function getTerms(){
        $page = Page::where('title', 'Terms')->first();
        return view('frontend.terms', ['page' => $page]);
    }

    public function getNepal(){
        $page = Page::where('title', 'Nepal')->first();
        return view('frontend.nepal', ['page' => $page]);
    }

    public function getForm(){
        $jobs = Job::all();
        return view('frontend.online_form', ['jobs' => $jobs]);
    }

    public function postForm(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'nationality' => 'required',
            'religion' => 'required',
            'gender' => 'required',
            'passport_number' => 'required',
            'pp_issue_date' => 'required',
            'pp_expiry_date' => 'required',
            'blood_group' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'father_name' => 'required',
            'marital_status' => 'required',
            'tole' => 'required',
            'vdc_municipality' => 'required',
            'district' => 'required',
            'zone' => 'required',
            'country' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'academic_qualification' => 'required',
            'work_experience' => 'required',
            'photo' => 'required',
            'citizenship' => 'required',
            'passport' => 'required',
            'slc_certificate' => 'required',
            'slc_character' => 'required',
            'english_speaking' => 'required',
            'english_reading' => 'required',
            'malay_speaking' => 'required',
            'malay_reading' => 'required',
            'hindi_speaking' => 'required',
            'hindi_reading' => 'required',
            'job' => 'required'
        ]);

        $first_name = $request['first_name'];

        $email = $request['email'];
        $last_name = $request['last_name'];

       $middle_name = $request['middle_name'];
        $nationality = $request['nationality'];
        $religion = $request['religion'];
        $gender = $request['gender'];
        $passport_number = $request['$passport_number'];
        $pp_issue_date = $request['pp_issue_date'];
        $pp_expiry_date = $request['pp_expirty_date'];
        $blood_group = $request['blood_group'];
        $height = $request['height'];
        $weight = $request['weight'];
        $father_name = $request['father_name'];
        $mother_name = $request['mother_name'];
        $grandfather_name = $request['grandfather_name'];
        $marital_status = $request['marital_status'];
        $number_child = $request['number_child'];
        $spouse_name = $request['spouse_name'];
        $tole = $request['tole'];
        $ward = $request['ward'];
        $vdc_municipality = $request['vdc_municipality'];
        $district = $request['district'];
        $zone = $request['zone'];
        $country = $request['country'];
        $mobile = $request['mobile'];
        $landline = $request['landline'];

        $academic_qualification = $request['academic_qualification'];
        $work_experience = $request['work_experience'];
        $technical_training = $request['technical_training'];

        //files
        $photo = $request->file('photo');
        $citizenship = $request->file('citizenship');
        $passport = $request->file('passport');

        $experience_letter = $request->file('experience_letter');

        $ref_letter = $request->file('ref_letter');

        $slc_certificate = $request->file('slc_certificate');
        $slc_character = $request->file('slc_character');

        $inter_certificate = $request->file('inter_certificate');

        $inter_character = $request->file('inter_character');

        $bachelor_certificate = $request->file('bachelor_certificate');

        $bachelor_character = $request->file('bachelor_character');

        $master_certificate = $request->file('master_certificate');

        $master_character = $request->file('master_character');

        $recommendation_letter = $request->file('recommendation_letter');

        //end of files
        $english_speaking = $request['english_speaking'];
        $english_reading = $request['english_reading'];
        $malay_speaking = $request['malay_speaking'];
        $malay_reading = $request['malay_reading'];
        $hindi_speaking = $request['hindi_speaking'];
        $hindi_reading = $request['hindi_reading'];
        $job = $request['job'];

        Mail::send('frontend.form_message', [
            'first_name' => $first_name,
            'email' => $email,
            'last_name' => $last_name,
            'middle_name' => $middle_name,
            'nationality' => $nationality,
            'religion' => $religion,
            'gender' => $gender,
            'passport_number' => $passport_number,
            'pp_issue_date' => $pp_issue_date,
            'pp_expiry_date' => $pp_expiry_date,
            'blood_group' => $blood_group,
            'height' => $height,
            'weight' => $weight,
            'father_name' => $father_name,
            'mother_name' => $mother_name,
            'grandfather_name' => $grandfather_name,
            'marital_status' => $marital_status,
            'number_child' => $number_child,
            'spouse_name' => $spouse_name,
            'tole' => $tole,
            'ward' => $ward,
            'vdc_municipality' => $vdc_municipality,
            'district' => $district,
            'zone' => $zone,
            'country' => $country,
            'mobile' => $mobile,
            'landline' => $landline,

            'academic_qualification' => $academic_qualification,
            'work_experience' => $work_experience,
            'technical_training' => $technical_training,

            'photo' => $photo,
            'citizenship' => $citizenship,
            'passport' => $passport,
            'experience_letter' => $experience_letter,
            'ref_letter' => $ref_letter,
            'slc_certificate' => $slc_certificate,
            'slc_character' => $slc_character,
            'inter_certificate' => $inter_certificate,
            'inter_character' => $inter_character,
            'bachelor_certificate' => $bachelor_certificate,
            'bachelor_character' => $bachelor_character,
            'master_certificate' => $master_certificate,
            'master_character' => $master_character,
            'recommendation_letter' => $recommendation_letter,

            'english_speaking' => $english_speaking,
            'english_reading' => $english_reading,
            'malay_speaking' => $malay_speaking,
            'malay_reading' => $malay_reading,
            'hindi_speaking' => $hindi_speaking,
            'hindi_reading' => $hindi_reading,
            'job' => $job
        ], function ($msg) use (
            $first_name,
            $email,
            $photo,
            $citizenship,
            $passport,
            $experience_letter,
            $ref_letter,
            $slc_certificate,
            $slc_character,
            $inter_certificate,
            $inter_character,
            $bachelor_certificate,
            $bachelor_character,
            $master_certificate,
            $master_character,
            $recommendation_letter
        ) {
            $msg->from($email, $first_name);
            $msg->to('info@asialinkservices.com.np', 'AsiaLink');
            $msg->subject('New Online Application Received');

             $msg->attach($photo->getRealPath(), [
            'as' => $photo->getClientOriginalName(),
            'mime' => $photo->getMimeType()
        ]);

            $msg->attach($citizenship->getRealPath(), [
                'as' => $citizenship->getClientOriginalName(),
                'mime' => $citizenship->getMimeType()
            ]);

            $msg->attach($passport->getRealPath(), [
                 'as' => $passport->getClientOriginalName(),
                 'mime' => $passport->getMimeType()
            ]);

            if(!empty($experience_letter)){
                $msg->attach($experience_letter->getRealPath(), [
                    'as' => $experience_letter->getClientOriginalName(),
                    'mime' => $experience_letter->getMimeType()
                ]);
            }

            if(!empty($ref_letter)){
                $msg->attach($ref_letter->getRealPath(), [
                    'as' => $ref_letter->getClientOriginalName(),
                    'mime' => $ref_letter->getMimeType()
                ]);
            }

            $msg->attach($slc_certificate->getRealPath(), [
                'as' => $slc_certificate->getClientOriginalName(),
                'mime' => $slc_certificate->getMimeType()
            ]);

            $msg->attach($slc_character->getRealPath(), [
                'as' => $slc_character->getClientOriginalName(),
                'mime' => $slc_character->getMimeType()
            ]);

            if(!empty($inter_certificate)){
                $msg->attach($inter_certificate->getRealPath(), [
                    'as' => $inter_certificate->getClientOriginalName(),
                    'mime' => $inter_certificate->getMimeType()
                ]);
            }

            if(!empty($inter_character)){
                $msg->attach($inter_character->getRealPath(), [
                    'as' => $inter_character->getClientOriginalName(),
                    'mime' => $inter_character->getMimeType()
                ]);
            }
            if(!empty($bachelor_certificate)){
                $msg->attach($bachelor_certificate->getRealPath(), [
                    'as' => $bachelor_certificate->getClientOriginalName(),
                    'mime' => $bachelor_certificate->getMimeType()
                ]);
            }
            if(!empty($bachelor_character)){
                $msg->attach($bachelor_character->getRealPath(), [
                    'as' => $bachelor_character->getClientOriginalName(),
                    'mime' => $bachelor_character->getMimeType()
                ]);
            }

            if(!empty($master_certificate)){
                $msg->attach($master_certificate->getRealPath(), [
                    'as' => $master_certificate->getClientOriginalName(),
                    'mime' => $master_certificate->getMimeType()
                ]);
            }
            if(!empty($master_character)){
                $msg->attach($master_character->getRealPath(), [
                    'as' => $master_character->getClientOriginalName(),
                    'mime' => $master_character->getMimeType()
                ]);
            }
            if(!empty($recommendation_letter)){
                $msg->attach($recommendation_letter->getRealPath(), [
                    'as' => $recommendation_letter->getClientOriginalName(),
                    'mime' => $recommendation_letter->getMimeType()
                ]);
            }




        });
        return redirect()->route('apply-online')->with(['success' => 'Successfully posted']);
    }

}

