<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Job;
use App\User;

class JobsController extends Controller
{
    public function getJob(){
        $jobs = Job::orderBy('created_at', 'desc')->paginate(5);
        return view('backend.job.job', ['jobs' => $jobs]);
    }

    public function getCreateJob(){
        return view('backend.job.create_job');
    }

    public function postCreateJob(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'company' => 'required',
            'salary' => 'required',
            'location' => 'required',
            'country' => 'required',
            'requirement' => 'requirement',
            'required_no' => 'required'
        ]);

        $job = new Job();
        if(!empty(($request)->file('image'))){
            $file = $request->file('image');
            $uploadPath = public_path() . '/jobs';
            $fileName = date("Y-m-d-H-i-s") . $file->getClientOriginalName();
            $file->move($uploadPath, $fileName);
            $job->image = $fileName;
        }
        $slug = $request['title'];
        $job->title = $request['title'];
        $job->company = $request['company'];
        $job->location = $request['location'];
        $job->country = $request['country'];
        $job->required_no = $request['required_no'];
        $job->salary = $request['salary'];
        $job->requirement = $request['requirement'];
        $job->description = $request['description'];
        $job->slug = str_slug($slug,'-');
        $job->status = $request['status'];
        $user = Auth::user();
        $user->jobs()->save($job);
        return redirect()->route('backend.job')->with(['success' => 'Successfully created']);
    }

    public function getUpdate($job_id){
        $job = Job::findorFail($job_id);
        return view('backend.job.update_job', ['job' => $job]);
    }

    public function postUpdate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'company' => 'required',
            'salary' => 'required',
            'location' => 'required',
            'country' => 'required',
            'requirement' => 'required',
            'required_no' => 'required'
        ]);
        $job = Job::findOrFail($request['job_id']);
        $old = $job->image;
        $file = $request->file('image');
        if($request->hasFile('image')){
            if(!empty($job->image)){
                unlink(public_path() . "\\jobs\\" . $job->image);
            }
            $uploadPath = public_path() . '/jobs';
            $fileName = date("Y-m-d-H-i-s") . $file->getClientOriginalName();
            $file->move($uploadPath, $fileName);
            $job->image = $fileName;
        }else{
            $job->image = $old;
        }
        $slug = $request['title'];
        $job->title = $request['title'];
        $job->company = $request['company'];
        $job->location = $request['location'];
        $job->country = $request['country'];
        $job->required_no = $request['required_no'];
        $job->salary = $request['salary'];
        $job->requirement = $request['requirement'];
        $job->description = $request['description'];
        $job->slug = str_slug($slug,'-');
        $job->status = $request['status'];
        $user = Auth::user();
        $job->user_id = $user->id;
        $job->update();
        return redirect()->route('backend.job')->with(['success' => 'Successfully updated']);
    }

    public function getDelete($job_id){
        $job = Job::findOrFail($job_id);
        unlink(public_path() . "\\jobs\\" . $job->image);
        $job->delete();
        return redirect()->route('backend.job.delete.page')->with(['success' => 'Successfully deleted']);
    }

    public function getTrash($job_id){
        $job = Job::findOrFail($job_id);
        $job->status = "trash";
        $job->update();
        return redirect()->route('backend.job')->with(['success' => 'Successfully moved to trash']);
    }

    public function getSingleJob($job_slug){
        $job = Job::where('slug', $job_slug)
            ->first();
        return view('backend.job.single_job', ['job' => $job]);

    }

    public function DeleteForever(){
        $jobs = Job::all();
        return view('backend.job.trash_job', ['jobs' => $jobs ]);
    }

    public function Restore($job_id){
        $job = Job::findorFail($job_id);
        $job->status = "published";
        $job->update();
        return redirect()->route('backend.job');
    }
}
