<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\Job;
use App\Client;
use App\Banner;
use App\Review;
use App\Page;
use App\Company;
use App\Demand;
use App\Jobcategory;
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
            $msg->to('stharonish@gmail.com', 'Admin');
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

    public function getForm($company_id){
        $company = Company::where('id', $company_id)->first();
        $jobcategories = Jobcategory::all();
        return view('frontend.online_form', ['company' => $company, 'jobcategories' => $jobcategories]);
    }

    public function getDemands(){
        $companies = Company::all();
        $demands = Demand::all();
        $jobcategories = Jobcategory::all();
        return view ('frontend.demands', ['companies' => $companies, 'demands' => $demands, 'jobcategories' => $jobcategories] );
    }

    public function findDemandName(Request $request){
        $data = Demand::select('title')->where('jobcategory_id',$request->id)->get();
        return response()->json($data);//then sent this data to ajax success
    }

    public function getSingle($demand_slug){
        $demand = Demand::where('slug', $demand_slug)->first();
        return view ('frontend.singledemand', ['demand' => $demand]);
    }

    public function postForm(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'nationality' => 'required',
            'passport_number' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'marital_status' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'photo' => 'required',
            'passport' => 'required',
            'jobcategory' => 'required'
        ]);

        $first_name = $request['first_name'];
        $email = $request['email'];
        $last_name = $request['last_name'];
        $middle_name = $request['middle_name'];
        $nationality = $request['nationality'];
        $religion = $request['religion'];
        $gender = $request['gender'];
        $passport_number = $request['passport_number'];
        $pp_issue_date = $request['pp_issue_date'];
        $pp_expiry_date = $request['pp_expirt_date'];
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

        $experience_letter1 = $request->file('experience_letter1');
        $experience_letter2 = $request->file('experience_letter2');
        $experience_letter3 = $request->file('experience_letter3');
        $experience_letter4 = $request->file('experience_letter4');

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
        $nepali_speaking = $request['nepali_speaking'];
        $nepali_reading = $request['nepali_reading'];
        $arabic_speaking = $request['arabic_speaking'];
        $arabic_reading = $request['arabic_reading'];
        $other_language = $request['other_language'];
        $category = $request['jobcategory'];
        $jobcat = Jobcategory::where('id', $category)->first();
        $company = $jobcat->company->title;
        $jobcategory = $jobcat->title;
        $demand = $request['demand'];

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
            'experience_letter1' => $experience_letter1,
            'experience_letter2' => $experience_letter2,
            'experience_letter3' => $experience_letter3,
            'experience_letter4' => $experience_letter4,
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
            'nepali_speaking' => $nepali_speaking,
            'nepali_reading' => $nepali_reading,
            'arabic_speaking' => $arabic_speaking,
            'arabic_reading' => $arabic_reading,
            'other_language' => $other_language,
            'jobcategory' => $jobcategory,
            'demand' => $demand,
            'company' => $company
        ], function ($msg) use (
            $first_name,
            $email,
            $photo,
            $citizenship,
            $passport,
            $experience_letter1,
            $experience_letter2,
            $experience_letter3,
            $experience_letter4,
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
            $msg->to('stharonish@gmail.com', 'AsiaLink');
            $msg->subject('New Online Application Received');

            if(!empty($photo)) {
                $msg->attach($photo->getRealPath(), [
                    'as' => $photo->getClientOriginalName(),
                    'mime' => $photo->getMimeType()
                ]);
            }

            if(!empty($citizenship)) {
                $msg->attach($citizenship->getRealPath(), [
                    'as' => $citizenship->getClientOriginalName(),
                    'mime' => $citizenship->getMimeType()
                ]);
            }

            if(!empty($passport)) {
                $msg->attach($passport->getRealPath(), [
                    'as' => $passport->getClientOriginalName(),
                    'mime' => $passport->getMimeType()
                ]);
            }

            if(!empty($experience_letter1)){
                $msg->attach($experience_letter1->getRealPath(), [
                    'as' => $experience_letter1->getClientOriginalName(),
                    'mime' => $experience_letter1->getMimeType()
                ]);
            }

            if(!empty($experience_letter2)){
                $msg->attach($experience_letter2->getRealPath(), [
                    'as' => $experience_letter2->getClientOriginalName(),
                    'mime' => $experience_letter2->getMimeType()
                ]);
            }

            if(!empty($experience_letter3)){
                $msg->attach($experience_letter3->getRealPath(), [
                    'as' => $experience_letter3->getClientOriginalName(),
                    'mime' => $experience_letter3->getMimeType()
                ]);
            }

            if(!empty($experience_letter4)){
                $msg->attach($experience_letter4->getRealPath(), [
                    'as' => $experience_letter4->getClientOriginalName(),
                    'mime' => $experience_letter4->getMimeType()
                ]);
            }

            if(!empty($ref_letter)){
                $msg->attach($ref_letter->getRealPath(), [
                    'as' => $ref_letter->getClientOriginalName(),
                    'mime' => $ref_letter->getMimeType()
                ]);
            }

            if(!empty($slc_certificate)) {
                $msg->attach($slc_certificate->getRealPath(), [
                    'as' => $slc_certificate->getClientOriginalName(),
                    'mime' => $slc_certificate->getMimeType()
                ]);
            }

            if (!empty($slc_character)) {
                $msg->attach($slc_character->getRealPath(), [
                    'as' => $slc_character->getClientOriginalName(),
                    'mime' => $slc_character->getMimeType()
                ]);
            }

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
        return redirect()->route('demands')->with(['success' => 'Successfully posted']);
    }

}

