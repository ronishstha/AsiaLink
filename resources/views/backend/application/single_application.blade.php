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
                            <h4 class="title" align="center">{{ ucfirst($application->title) }} | Last modified by: {{ $application->user->name }}</h4>
                            <p class="category" align="center">Last updated on
                                    {{ $application->updated_at }}
                            </p>
                        </div>
                        <div class="card-content table-responsive">
                            <a href="{{ URL::asset($application->form) }}">{{$application->title}}</a>

                            <div class="single-button">
                            <button class="btn-edit"><a href="{{ route('backend.application.get.update', ['application_id' => $application->id]) }}">Edit</a></button>
                            <button class="btn-delete"><a href="{{ route('backend.application.trash', ['application_id' => $application->id]) }}">Delete</a></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection