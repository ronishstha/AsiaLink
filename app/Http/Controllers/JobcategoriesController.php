<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Jobcategory;
use App\User;
use App\Company;

class JobcategoriesController extends Controller
{
    public function getJobcategory(){
        $jobcategories = Jobcategory::orderBy('created_at', 'desc')->paginate(5);
        return view('backend.jobcategory.jobcategory', ['jobcategories' => $jobcategories]);
    }

    public function getCreateJobcategory(){
        $companies = Company::all();
        return view('backend.jobcategory.create_jobcategory', ['companies' => $companies]);
    }

    public function postCreateJobcategory(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'company' => 'required',
        ]);
        $jobcategory = new Jobcategory();
        $slug = $request['title'];
        $jobcategory->title = $request['title'];
        $jobcategory->slug = str_slug($slug,'-');
        $jobcategory->status = $request['status'];
        $user = Auth::user();
        $organization = $request['company'];
        $company = Company::where('title', $organization)->first();
        $jobcategory->user()->associate($user);
        $jobcategory->company()->associate($company);
        $jobcategory->save();
        return redirect()->route('backend.jobcategory')->with(['success' => 'Successfully created']);
    }

    public function getUpdate($jobcategory_id){
        $jobcategory = Jobcategory::findorFail($jobcategory_id);
        $companies = Company::all();
        return view('backend.jobcategory.update_jobcategory', ['jobcategory' => $jobcategory, 'companies' => $companies]);
    }

    public function postUpdate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'company' => 'required',
        ]);
        $jobcategory = Jobcategory::findOrFail($request['jobcategory_id']);
        $slug = $request['title'];
        $jobcategory->title = $request['title'];
        $organization = $request['company'];
        $jobcategory->slug = str_slug($slug,'-');
        $jobcategory->status = $request['status'];
        $company = Company::where('title', $organization)->first();
        $jobcategory->company_id = $company->id;
        $user = Auth::user();
        $jobcategory->user_id = $user->id;
        $jobcategory->update();
        return redirect()->route('backend.jobcategory')->with(['success' => 'Successfully updated']);
    }

    public function getDelete($jobcategory_id){
        $jobcategory = Jobcategory::findOrFail($jobcategory_id);
        $jobcategory->delete();
        return redirect()->route('backend.jobcategory.delete.page')->with(['success' => 'Successfully deleted']);
    }

    public function getTrash($jobcategory_id){
        $jobcategory = Jobcategory::findOrFail($jobcategory_id);
        $jobcategory->status = "trash";
        $jobcategory->update();
        return redirect()->route('backend.jobcategory')->with(['success' => 'Successfully moved to trash']);
    }

    public function getSingleJobcategory($jobcategory_slug){
        $jobcategory = Jobcategory::where('slug', $jobcategory_slug)
            ->first();
        return view('backend.jobcategory.single_jobcategory', ['jobcategory' => $jobcategory]);

    }

    public function DeleteForever(){
        $jobcategories = Jobcategory::all();
        return view('backend.jobcategory.trash_jobcategory', ['jobcategories' => $jobcategories ]);
    }

    public function Restore($jobcategory_id){
        $jobcategory = Jobcategory::findorFail($jobcategory_id);
        $jobcategory->status = "published";
        $jobcategory->update();
        return redirect()->route('backend.jobcategory');
    }
}
