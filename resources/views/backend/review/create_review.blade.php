@extends('backend.layouts.index')

@section('style')
    <link href="{{ URL::asset('/assets/css/table.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('/assets/css/font-awesome.css') }}" rel="stylesheet"/>
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
        .overall{
            margin-left: 130px;
        }
        .star-rating{
            margin: 0 auto;
            width: 75%;
        }
        .star{
            color: #ccc;
            cursor: pointer;
            transition: all 0.2s linear;
            /*margin-left: -30px;*/
        }
        .star:first-of-type{
            /*margin-left: 30px;*/
        }
        .star-checked{
            color: gold;
        }
        .star-checked1{
            color: gold;
        }
        b.r{
            color: red;
        }
        b.g{
            color: green;
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
                            <h4 class="title">Create Review</h4>
                            <p class="category"></p>
                        </div>
                        <div class="card-content">
                            <form action="{{ route('backend.review.post.create') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Name</label>
                                            <input type="text" class="form-control" name="name" id="name" value="{{ Request::old('name') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="">
                                            <label id="fileupload-example-3-label" for="fileupload-example-3">Image</label>
                                            <input type="file" id="fileupload-example-3" name="image" value="{{ Request::old('image')}}"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Description</label>
                                            <textarea row=20 class="form-control" name="description" id="description">{{ Request::old('description') }}</textarea>
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

                                <input type="hidden" name="_token" value="{{ Session::token() }}"/>
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
