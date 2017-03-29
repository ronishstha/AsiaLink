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
                            <h4 class="title" align="center">{{ ucfirst($demand->title) }} | Last modified by: {{ $demand->user->name }}</h4>
                            <p class="category" align="center">Last updated on
                                    {{ $demand->updated_at }}
                            </p>
                        </div>
                        <div class="card-content table-responsive">
                            <p align="center"><strong>Company:</strong> {{ $demand->company->title }}</p>
                            <p align="center"><strong>Location:</strong> {{ $demand->company->location }}</p>
                            <p align="center"><strong>Country:</strong> {{ $demand->company->country }}</p>
                            <p align="center"><strong>Job Category:</strong> {{ $demand->jobcategory->title }}</p>
                            <p align="center"><strong>Required No:</strong> {{ $demand->required_no }}</p>
                            <p align="center"><strong>Salary:</strong> {{ $demand->salary }}</p>

                            @if(!empty($demand->description))
                            <p align="center"><strong>Description</strong></p>
                            <p align="center">{!! $demand->description  !!}</p>
                            @endif

                            <div class="single-button">
                            <button class="btn-edit"><a href="{{ route('backend.demand.get.update', ['demand_id' => $demand->id]) }}">Edit</a></button>
                            <button class="btn-delete"><a href="{{ route('backend.demand.trash', ['demand_id' => $demand->id]) }}">Delete</a></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection