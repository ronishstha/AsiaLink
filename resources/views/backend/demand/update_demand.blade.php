@extends('backend.layouts.index')
@section('content')
    <style>
        #fileupload-example-3::-webkit-file-upload-button {
            color: gray;
            border: none;
            height: 30px;
            border-radius: 3px;
            background: #fff;
            border: 1px solid #ccc;
        }
    </style>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Update Demand</h4>
                            <p class="category"></p>
                        </div>
                        <div class="card-content">
                            <form action="{{ route('backend.demand.post.update') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Title</label>
                                            <input type="text" class="form-control" name="title" id="title" value="{{ Request::old('title') ? Request::old('title') : isset($demand) ? $demand->title : '' }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Company</label>
                                            <select class="form-control" name="company" id="company">
                                                @if(count($companies) == 0)
                                                    <option value=null>No company available</option>
                                                @endif
                                                @foreach($companies as $company)
                                                    <option @if($demand->company->title == "$company->title") selected @endif>{{ $company->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Job Category</label>
                                            <select class="form-control" name="jobcategory" id="jobcategory">
                                                @if(count($jobcategories) == 0)
                                                    <option value=null>No jobcategory available</option>
                                                @endif
                                                @foreach($jobcategories as $jobcategory)
                                                    <option @if($demand->jobcategory->title == "$jobcategory->title") selected @endif>{{ $jobcategory->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Required No</label>
                                            <input type="text" class="form-control" name="required_no" id="required_no" value="{{ Request::old('required_no') ? Request::old('required_no') : isset($demand) ? $demand->required_no : '' }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Salary</label>
                                            <input type="text" class="form-control" name="salary" id="salary" value="{{ Request::old('salary') ? Request::old('salary') : isset($demand) ? $demand->salary : '' }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label>Description</label>
                                            <textarea row=20 class="form-control" name="description" id="description" >{{ Request::old('description')? Request::old('description') : isset($demand)? $demand->description : '' }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Status</label>
                                            <select class="form-control" name="status" id="status">
                                                <option @if($demand->status =="published") selected @endif>published</option>
                                                <option @if($demand->status =="unpublished") selected @endif>unpublished</option>
                                                <option @if($demand->status =="trash") selected @endif>trash</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="demand_id" value="{{ $demand->id }}">
                                <button type="submit" class="btn btn-primary pull-right">Edit</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
