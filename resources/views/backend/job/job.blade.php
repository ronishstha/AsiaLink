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
                            <h4 class="title">Jobs</h4>
                            <p class="category"></p>
                        </div>

                        <div class="card-content table-responsive">
                            <i class="material-icons create">note_add</i>
                            <a href="{{ route('backend.job.get.create') }}">Create Banner</a>
                            <a href="{{ route('backend.job.delete.page') }}">
                                <i class="material-icons delete">delete
                                    @php
                                        $count = count($jobs);
                                        $i = 0;
                                    @endphp
                                    @foreach($jobs as $job)
                                        @php

                                            if($job->status == "trash"){
                                                $i += 1;
                                        }
                                        @endphp
                                    @endforeach
                                    @if($i != 0)
                                        <span class="noti-badge">{{ $i }}</span>
                                    @endif
                                </i>
                            </a>
                            @if(count($jobs) == 0 || $count == $i)
                                <br><p align="center">No job available<p>
                            @else
                                <table class="table">
                                    <thead class="text-primary">
                                    <th>Title</th>
                                    <th>Edit</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                    </thead>
                                    <tbody>
                                    @foreach($jobs as $job)
                                        @if($job->status == "published" || $job->status == "unpublished")
                                            <tr>
                                                <td><a href="{{ route('backend.job.single.job', ['job_id' => $job->id]) }}">{{ $job->title }}</a></td>
                                                <td><button class="btn-edit"><a href="{{ route('backend.job.get.update', ['job_id' => $job->id]) }}">Edit</a></button></td>
                                                <td><button class="btn-view"><a href="{{ route('backend.job.single.job', ['job_slug' => $job->slug])  }}">View</a></button></td>
                                                <td><button class="btn-delete"><a href="{{ route('backend.job.trash', ['job_id' => $job->id]) }}">Delete</a></button></td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>

                                </table>
                            @endif
                            {!! $jobs->links() !!}
                            {{--<div class="pagination">--}}

                                {{--@if($jobs->currentPage() !== 1)
                                    <a href ="{{ $jobs->previousPageUrl() }}" class="paginate"><span class="fa fa-caret-left"></span></a>
                                @endif
                                @if($jobs->currentPage() !== $jobs->lastPage() && $jobs->hasPages())
                                    <a href ="{{ $jobs->nextPageUrl()}}"  class="paginate"><span class="fa fa-caret-right"></span></a>
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
