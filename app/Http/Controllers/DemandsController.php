<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Demand;
use App\User;
use App\Jobcategory;
use App\Company;

class DemandsController extends Controller
{
    public function getDemand(){
        $demands = Demand::orderBy('created_at', 'desc')->paginate(5);
        return view('backend.demand.demand', ['demands' => $demands]);
    }

    public function getCreateDemand(){
        $companies = Company::all();
        $jobcategories = Jobcategory::all();
        return view('backend.demand.create_demand', ['companies' => $companies, 'jobcategories' => $jobcategories]);
    }

    public function findJobcategoryName(Request $request){
        $data = Jobcategory::select('title')->where('company_id',$request->id)->get();
        return response()->json($data);//then sent this data to ajax success
    }

    public function postCreateDemand(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'company' => 'required',
            'salary' => 'required',
            'jobcategory' => 'required',
            'required_no' => 'required'
        ]);

        $demand = new Demand();
        $slug = $request['title'];
        $demand->title = $request['title'];
        $demand->required_no = $request['required_no'];
        $demand->salary = $request['salary'];
        $demand->description = $request['description'];
        $demand->slug = str_slug($slug,'-');
        $demand->status = $request['status'];
        $organization = $request['company'];
        $category = $request['jobcategory'];
        $company = Company::where('id', $organization)->first();
        $jobcategory = Jobcategory::where('title', $category)->first();
        $user = Auth::user();
        $demand->user()->associate($user);
        $demand->company()->associate($company);
        $demand->jobcategory()->associate($jobcategory);
        $demand->save();
        return redirect()->route('backend.demand')->with(['success' => 'Successfully created']);
    }

    public function getUpdate($demand_id){
        $demand = Demand::findorFail($demand_id);
        $companies = Company::all();
        $jobcategories = Jobcategory::all();
        return view('backend.demand.update_demand', ['demand' => $demand, 'companies' => $companies, 'jobcategories' => $jobcategories]);
    }

    public function postUpdate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'company' => 'required',
            'salary' => 'required',
            'jobcategory' => 'required',
            'required_no' => 'required'
        ]);
        $demand = Demand::findOrFail($request['demand_id']);
        $slug = $request['title'];
        $demand->title = $request['title'];
        $demand->required_no = $request['required_no'];
        $demand->salary = $request['salary'];
        $demand->description = $request['description'];
        $demand->slug = str_slug($slug,'-');
        $demand->status = $request['status'];
        $organization = $request['company'];
        $category = $request['jobcategory'];
        $company = Company::where('id', $organization)->first();
        $jobcategory = Jobcategory::where('title', $category)->first();
        $user = Auth::user();
        $demand->user_id = $user->id;
        $demand->company_id = $company;
        $demand->jobcategory_id = $jobcategory->id;
        $demand->update();
        return redirect()->route('backend.demand')->with(['success' => 'Successfully updated']);
    }

    public function getDelete($demand_id){
        $demand = Demand::findOrFail($demand_id);
        $demand->delete();
        return redirect()->route('backend.demand.delete.page')->with(['success' => 'Successfully deleted']);
    }

    public function getTrash($demand_id){
        $demand = Demand::findOrFail($demand_id);
        $demand->status = "trash";
        $demand->update();
        return redirect()->route('backend.demand')->with(['success' => 'Successfully moved to trash']);
    }

    public function getSingleDemand($demand_slug){
        $demand = Demand::where('slug', $demand_slug)
            ->first();
        return view('backend.demand.single_demand', ['demand' => $demand]);

    }

    public function DeleteForever(){
        $demands = Demand::all();
        return view('backend.demand.trash_demand', ['demands' => $demands ]);
    }

    public function Restore($demand_id){
        $demand = Demand::findorFail($demand_id);
        $demand->status = "published";
        $demand->update();
        return redirect()->route('backend.demand');
    }
}
