@extends('backend.layouts.index')

@section('style')
    <link href="{{ URL::asset('/assets/css/table.css') }}" rel="stylesheet"/>
@endsection

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
    @if(count($errors) > 0)
        <section class="info-box fail">
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        </section>
    @endif
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Create Job</h4>
                            <p class="category"></p>
                        </div>
                        <div class="card-content">
                            <form action="{{ route('backend.job.post.create') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Title</label>
                                            <input type="text" class="form-control" name="title" id="title" value="{{ Request::old('title') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Company</label>
                                            <input type="text" class="form-control" name="company" id="company" value="{{ Request::old('company') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Location</label>
                                        <input type="text" class="form-control" name="location" id="location" value="{{ Request::old('location') }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Country</label>
                                        <input type="text" class="form-control" name="country" id="country" value="{{ Request::old('country') }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Required No</label>
                                        <input type="text" class="form-control" name="required_no" id="required_no" value="{{ Request::old('required_no') }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Salary</label>
                                        <input type="text" class="form-control" name="salary" id="salary" value="{{ Request::old('salary') }}">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="">
                                            <label id="fileupload-example-3-label" for="fileupload-example-3">Image</label>
                                            <input type="file" id="fileupload-example-3" name="image" value="{{ Request::old('image') }}"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label>Requirement</label>
                                            <textarea row=20 class="form-control" name="requirement" id="requirement" value="{{ Request::old('requirement') }}"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label>Description</label>
                                            <textarea row=20 class="form-control" name="description" id="description" value="{{ Request::old('description') }}"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Status</label>
                                            <select class="form-control" name="status" id="status">
                                                <option>published</option>
                                                <option>unpublished</option>
                                                <option>trash</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right">Create</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
