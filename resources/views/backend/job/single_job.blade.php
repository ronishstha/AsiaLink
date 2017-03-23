@extends('backend.layouts.index')
@section('content')
    <style>
        .btn-edit{
            background-color: dodgerblue;
            border: none;
            border-radius: 3px;
            height: 25px;
        }
        .btn-edit a{
            color: ghostwhite;
        }
        .btn-delete{
            background-color: #e53935;
            border: none;
            border-radius: 3px;
            height: 25px;
        }
        .btn-delete a{
            color: ghostwhite;
        }
        .single-button{
            width: 100px;
            margin-left:auto;
            margin-right: auto;
        }
    </style>
    <div class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h4 class="title" align="center">{{ ucfirst($job->title) }} | Last modified by: {{ $job->user->name }}</h4>
                            <p class="category" align="center">Last updated on
                                    {{ $job->updated_at }}
                            </p>
                        </div>
                        <div class="card-content table-responsive">
                            <p align="center">{!! $job->description  !!}</p>

                            @if(Storage::disk('job')->has($job->image))
                                <section class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <img src="{{ route('backend.job.image', ['filename' => $job->image]) }}" alt="" class="img-responsive" style="border-radius: 2px;">
                                    </div>
                                </section>
                                <br>
                            @endif

                            <div class="single-button">
                            <button class="btn-edit"><a href="{{ route('backend.job.get.update', ['job_id' => $job->id]) }}">Edit</a></button>
                            <button class="btn-delete"><a href="{{ route('backend.job.trash', ['job_id' => $job->id]) }}">Delete</a></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection