@extends('backend.layouts.index')

@section('style')
    <link href="{{ URL::asset('/assets/css/table.css') }}" rel="stylesheet"/>
@endsection

@section('content')
    @if(count($errors) > 0)
        <section class="info-box fail">
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        </section>
    @endif
    @if(Session::has('success'))
        <section class="info-box success">
            {{ Session::get('success') }}
        </section>
    @endif
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Job Categories</h4>
                            <p class="category"></p>
                        </div>

                        <div class="card-content table-responsive">
                            <i class="material-icons create">note_add</i>
                            <a href="{{ route('backend.jobcategory.get.create') }}">Create Job Category</a>
                            <a href="{{ route('backend.jobcategory.delete.page') }}">
                                <i class="material-icons delete">delete
                                    @php
                                        $count = count($jobcategories);
                                        $i = 0;
                                    @endphp
                                    @foreach($jobcategories as $jobcategory)
                                        @php

                                            if($jobcategory->status == "trash"){
                                                $i += 1;
                                        }
                                        @endphp
                                    @endforeach
                                    @if($i != 0)
                                        <span class="noti-badge">{{ $i }}</span>
                                    @endif
                                </i>
                            </a>
                            @if(count($jobcategories) == 0 || $count == $i)
                                <br><p align="center">No job category available<p>
                            @else
                                <table class="table">
                                    <thead class="text-primary">
                                    <th>Title</th>
                                    <th>Company</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    </thead>
                                    <tbody>
                                    @foreach($jobcategories as $jobcategory)
                                        @if($jobcategory->status == "published" || $jobcategory->status == "unpublished")
                                            <tr>
                                                <td>{{ $jobcategory->title }}</td>
                                                <td>{{ $jobcategory->company->title }}</td>
                                                <td><button class="btn-edit"><a href="{{ route('backend.jobcategory.get.update', ['jobcategory_id' => $jobcategory->id]) }}">Edit</a></button></td>
                                                <td><button class="btn-delete"><a href="{{ route('backend.jobcategory.trash', ['jobcategory_id' => $jobcategory->id]) }}">Delete</a></button></td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>

                                </table>
                            @endif
                            {!! $jobcategories->links() !!}
                            {{--<div class="pagination">--}}

                                {{--@if($jobcategories->currentPage() !== 1)
                                    <a href ="{{ $jobcategories->previousPageUrl() }}" class="paginate"><span class="fa fa-caret-left"></span></a>
                                @endif
                                @if($jobcategories->currentPage() !== $jobcategories->lastPage() && $jobcategories->hasPages())
                                    <a href ="{{ $jobcategories->nextPageUrl()}}"  class="paginate"><span class="fa fa-caret-right"></span></a>
                                    @endif--}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
