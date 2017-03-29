@extends('backend.layouts.index')
@section('content')
    <style>
        .rating{
            margin: 0 auto;
            width: 50%;
        }
        .btn-edit{
            background-color: dodgerblue;
            border: none;
            border-radius: 3px;
            height: 25px;
        }
        .overall{
            margin-left: 130px;

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
        .img_left{
            float:left;
        }
        .img_comment{
            margin: 0 auto;
            width: 70%;
        }
        .text_right{
            margin-left: -600px;
        }

    </style>
    <div class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h4 class="title" align="center">{{ ucfirst($review->name) }} | Last modified by: {{ $review->user->name }}</h4>
                            <p class="category" align="center">Last updated on
                                    {{ $review->updated_at }}
                            </p>
                        </div>
                        <div class="card-content table-responsive">
                            <div class="row">
                                <div class="col-md-7">
                                    <p>{!! $review->description  !!}</p>
                                </div>
                            </div>

                            <div class="single-button">
                            <button class="btn-edit"><a href="{{ route('backend.review.get.update', ['review_id' => $review->id]) }}">Edit</a></button>
                            <button class="btn-delete"><a href="{{ route('backend.review.trash', ['review_id' => $review->id]) }}">Delete</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection