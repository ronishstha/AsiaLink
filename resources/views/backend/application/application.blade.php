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
                            <h4 class="title">Applications</h4>
                            <p class="category"></p>
                        </div>

                        <div class="card-content table-responsive">
                            <i class="material-icons create">note_add</i>
                            <a href="{{ route('backend.application.get.create') }}">Create Application</a>
                            <a href="{{ route('backend.application.delete.page') }}">
                                <i class="material-icons delete">delete
                                    @php
                                        $count = count($applications);
                                        $i = 0;
                                    @endphp
                                    @foreach($applications as $application)
                                        @php

                                            if($application->status == "trash"){
                                                $i += 1;
                                        }
                                        @endphp
                                    @endforeach
                                    @if($i != 0)
                                        <span class="noti-badge">{{ $i }}</span>
                                    @endif
                                </i>
                            </a>
                            @if(count($applications) == 0 || $count == $i)
                                <br><p align="center">No application available<p>
                            @else
                                <table class="table">
                                    <thead class="text-primary">
                                    <th>Title</th>
                                    <th>Application</th>
                                    <th>Edit</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                    </thead>
                                    <tbody>
                                    @foreach($applications as $application)
                                        @if($application->status == "published" || $application->status == "unpublished")
                                            <tr>
                                                <td><a href="{{ route('backend.application.single.application', ['application_slug' => $application->slug]) }}">{{ $application->title }}</a></td>
                                                <td><a href="{{ URL::asset($application->form) }}">{{$application->title}}</a></td>
                                                <td><button class="btn-edit"><a href="{{ route('backend.application.get.update', ['application_id' => $application->id]) }}">Edit</a></button></td>
                                                <td><button class="btn-view"><a href="{{ route('backend.application.single.application', ['application_slug' => $application->slug])  }}">View</a></button></td>
                                                <td><button class="btn-delete"><a href="{{ route('backend.application.trash', ['application_id' => $application->id]) }}">Delete</a></button></td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>

                                </table>
                            @endif
                            {!! $applications->links() !!}
                            {{--<div class="pagination">--}}

                                {{--@if($applications->currentPage() !== 1)
                                    <a href ="{{ $applications->previousPageUrl() }}" class="paginate"><span class="fa fa-caret-left"></span></a>
                                @endif
                                @if($applications->currentPage() !== $applications->lastPage() && $applications->hasPages())
                                    <a href ="{{ $applications->nextPageUrl()}}"  class="paginate"><span class="fa fa-caret-right"></span></a>
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
