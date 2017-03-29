<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Application;
use App\User;

class ApplicationsController extends Controller
{
    public function getApplication(){
        $applications = Application::orderBy('created_at', 'desc')->paginate(5);
        return view('backend.application.application', ['applications' => $applications]);
    }

    public function getCreateApplication(){
        return view('backend.application.create_application');
    }

    public function postCreateApplication(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'form'  => 'required'
        ]);

        $application = new Application();
        $file = $request->file('form');
        $uploadPath = public_path();
        $fileName = date("Y-m-d-H-i-s") . $file->getClientOriginalName();
        $file->move($uploadPath, $fileName);
        $application->form = $fileName;
        $slug = $request['title'];
        $application->title = $request['title'];
        $application->slug = str_slug($slug,'-');
        $application->status = $request['status'];
        $user = Auth::user();
        $user->applications()->save($application);
        return redirect()->route('backend.application')->with(['success' => 'Successfully created']);
    }

    public function getUpdate($application_id){
        $application = Application::findorFail($application_id);
        return view('backend.application.update_application', ['application' => $application]);
    }

    public function postUpdate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'form' => 'required'
        ]);
        $application = Application::findOrFail($request['application_id']);
        $old = $application->form;
        $file = $request->file('form');
        if($request->hasFile('form')){
            if(!empty($application->form)){
                unlink(public_path() . $application->form);
            }
            $uploadPath = public_path();
            $fileName = date("Y-m-d-H-i-s") . $file->getClientOriginalName();
            $file->move($uploadPath, $fileName);
            $application->form = $fileName;
        }else{
            $application->form = $old;
        }
        $slug = $request['title'];
        $application->title = $request['title'];
        $application->slug = str_slug($slug,'-');
        $application->status = $request['status'];
        $user = Auth::user();
        $application->user_id = $user->id;
        $application->update();
        return redirect()->route('backend.application')->with(['success' => 'Successfully updated']);
    }

    public function getDelete($application_id){
        $application = Application::findOrFail($application_id);
        unlink(public_path() . $application->form);
        $application->delete();
        return redirect()->route('backend.application.delete.page')->with(['success' => 'Successfully deleted']);
    }

    public function getTrash($application_id){
        $application = Application::findOrFail($application_id);
        $application->status = "trash";
        $application->update();
        return redirect()->route('backend.application')->with(['success' => 'Successfully moved to trash']);
    }

    public function getSingleApplication($application_slug){
        $application = Application::where('slug', $application_slug)
            ->first();
        return view('backend.application.single_application', ['application' => $application]);

    }

    public function DeleteForever(){
        $applications = Application::all();
        return view('backend.application.trash_application', ['applications' => $applications ]);
    }

    public function Restore($application_id){
        $application = Application::findorFail($application_id);
        $application->status = "published";
        $application->update();
        return redirect()->route('backend.application');
    }

    public function getImage($filename){
        $file = Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }
}
