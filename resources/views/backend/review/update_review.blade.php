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
                            <h4 class="title">Update Review</h4>
                            <p class="category"></p>
                        </div>
                        <div class="card-content">
                            <form action="{{ route('backend.review.post.update') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Name</label>
                                            <input type="text" class="form-control" name="name" id="name" value="{{ Request::old('name') ? Request::old('name') : isset($review) ? $review->name : '' }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label>Description</label>
                                            <textarea row=20 class="form-control" name="description" id="description" >{{ Request::old('description')? Request::old('description') : isset($review)? $review->description : '' }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Status</label>
                                            <select class="form-control" name="status" id="status">
                                                <option @if($review->status =="published") selected @endif>published</option>
                                                <option @if($review->status =="unpublished") selected @endif>unpublished</option>
                                                <option @if($review->status =="trash") selected @endif>trash</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="review_id" value="{{ $review->id }}">
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
