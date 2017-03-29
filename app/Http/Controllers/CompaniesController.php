<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Company;
use App\User;

class CompaniesController extends Controller
{
    public function getCompany(){
        $companies = Company::orderBy('created_at', 'desc')->paginate(5);
        return view('backend.company.company', ['companies' => $companies]);
    }

    public function getCreateCompany(){
        return view('backend.company.create_company');
    }

    public function postCreateCompany(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'location' => 'required',
            'country' => 'required'
        ]);

        $company = new Company();
        $slug = $request['title'];
        $company->title = $request['title'];
        $company->location = $request['location'];
        $company->country = $request['country'];
        $company->description = $request['description'];
        $company->slug = str_slug($slug,'-');
        $company->status = $request['status'];
        $user = Auth::user();
        $user->companies()->save($company);
        return redirect()->route('backend.company')->with(['success' => 'Successfully created']);
    }

    public function getUpdate($company_id){
        $company = Company::findorFail($company_id);
        return view('backend.company.update_company', ['company' => $company]);
    }

    public function postUpdate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'location' => 'required',
            'country' => 'required'
        ]);
        $company = Company::findOrFail($request['company_id']);
        $slug = $request['title'];
        $company->title = $request['title'];
        $company->location = $request['location'];
        $company->country = $request['country'];
        $company->description = $request['description'];
        $company->slug = str_slug($slug,'-');
        $company->status = $request['status'];
        $user = Auth::user();
        $company->user_id = $user->id;
        $company->update();
        return redirect()->route('backend.company')->with(['success' => 'Successfully updated']);
    }

    public function getDelete($company_id){
        $company = Company::findOrFail($company_id);
        $company->delete();
        return redirect()->route('backend.company.delete.page')->with(['success' => 'Successfully deleted']);
    }

    public function getTrash($company_id){
        $company = Company::findOrFail($company_id);
        $company->status = "trash";
        $company->update();
        return redirect()->route('backend.company')->with(['success' => 'Successfully moved to trash']);
    }

    public function getSingleCompany($company_slug){
        $company = Company::where('slug', $company_slug)
            ->first();
        return view('backend.company.single_company', ['company' => $company]);

    }

    public function DeleteForever(){
        $companies = Company::all();
        return view('backend.company.trash_company', ['companies' => $companies ]);
    }

    public function Restore($company_id){
        $company = Company::findorFail($company_id);
        $company->status = "published";
        $company->update();
        return redirect()->route('backend.company');
    }
}
