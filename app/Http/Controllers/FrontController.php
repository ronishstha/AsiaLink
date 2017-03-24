<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\Job;
use App\Client;
use App\Banner;

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
        return view ('frontend.clients', ['clients' => $clients]);
    }
}
