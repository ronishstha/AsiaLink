<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Client;
use App\User;

class ClientsController extends Controller
{
    public function getClient(){
        $clients = Client::orderBy('created_at', 'desc')->paginate(5);
        return view('backend.client.client', ['clients' => $clients]);
    }

    public function getCreateClient(){
        return view('backend.client.create_client');
    }

    public function postCreateClient(Request $request){
        $this->validate($request, [
            'title' => 'required'
        ]);

        $client = new Client();
        $file = $request->file('image');
        $uploadPath = storage_path() . '/app';
        $fileName = date("Y-m-d-H-i-s") . $file->getClientOriginalName();
        $file->move($uploadPath, $fileName);
        $client->image = $fileName;
        $slug = $request['title'];
        $client->title = $request['title'];
        $client->slug = str_slug($slug,'-');
        $client->status = $request['status'];
        $user = Auth::user();
        $user->clients()->save($client);
        return redirect()->route('backend.client')->with(['success' => 'Successfully created']);
    }

    public function getUpdate($client_id){
        $client = Client::findorFail($client_id);
        return view('backend.client.update_client', ['client' => $client]);
    }

    public function postUpdate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required',
            'description' => 'required'
        ]);
        $client = Client::findOrFail($request['client_id']);
        $old = $client->image;
        $file = $request->file('image');
        if($request->hasFile('image')){
            if(!empty($client->image)){
                unlink(storage_path() . "\\app\\" . $client->image);
            }
            $uploadPath = storage_path() . '/app';
            $fileName = date("Y-m-d-H-i-s") . $file->getClientOriginalName();
            $file->move($uploadPath, $fileName);
            $client->image = $fileName;
        }else{
            $client->image = $old;
        }
        $slug = $request['title'];
        $client->title = $request['title'];
        $client->slug = str_slug($slug,'-');
        $client->status = $request['status'];
        $user = Auth::user();
        $client->user_id = $user->id;
        $client->update();
        return redirect()->route('backend.client')->with(['success' => 'Successfully updated']);
    }

    public function getDelete($client_id){
        $client = Client::findOrFail($client_id);
        unlink(storage_path() . "\\app\\" . $client->image);
        $client->delete();
        return redirect()->route('backend.client.delete.page')->with(['success' => 'Successfully deleted']);
    }

    public function getTrash($client_id){
        $client = Client::findOrFail($client_id);
        $client->status = "trash";
        $client->update();
        return redirect()->route('backend.client')->with(['success' => 'Successfully moved to trash']);
    }

    public function getSingleClient($client_slug){
        $client = Client::where('slug', $client_slug)
            ->first();
        return view('backend.client.single_client', ['client' => $client]);

    }

    public function DeleteForever(){
        $clients = Client::all();
        return view('backend.client.trash_client', ['clients' => $clients ]);
    }

    public function Restore($client_id){
        $client = Client::findorFail($client_id);
        $client->status = "published";
        $client->update();
        return redirect()->route('backend.client');
    }

    public function getImage($filename){
        $file = Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }
}
