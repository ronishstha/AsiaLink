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
                            <h4 class="title">Company</h4>
                            <p class="category"></p>
                        </div>

                        <div class="card-content table-responsive">
                            <i class="material-icons create">note_add</i>
                            <a href="{{ route('backend.company.get.create') }}">Create Company</a>
                            <a href="{{ route('backend.company.delete.page') }}">
                                <i class="material-icons delete">delete
                                    @php
                                        $count = count($companies);
                                        $i = 0;
                                    @endphp
                                    @foreach($companies as $company)
                                        @php

                                            if($company->status == "trash"){
                                                $i += 1;
                                        }
                                        @endphp
                                    @endforeach
                                    @if($i != 0)
                                        <span class="noti-badge">{{ $i }}</span>
                                    @endif
                                </i>
                            </a>
                            @if(count($companies) == 0 || $count == $i)
                                <br><p align="center">No company available<p>
                            @else
                                <table class="table">
                                    <thead class="text-primary">
                                    <th>Title</th>
                                    <th>Edit</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                    </thead>
                                    <tbody>
                                    @foreach($companies as $company)
                                        @if($company->status == "published" || $company->status == "unpublished")
                                            <tr>
                                                <td><a href="{{ route('backend.company.single.company', ['company_slug' => $company->slug]) }}">{{ $company->title }}</a></td>
                                                <td><button class="btn-edit"><a href="{{ route('backend.company.get.update', ['company_id' => $company->id]) }}">Edit</a></button></td>
                                                <td><button class="btn-view"><a href="{{ route('backend.company.single.company', ['company_slug' => $company->slug])  }}">View</a></button></td>
                                                <td><button class="btn-delete"><a href="{{ route('backend.company.trash', ['company_id' => $company->id]) }}">Delete</a></button></td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>

                                </table>
                            @endif
                            {!! $companies->links() !!}
                            {{--<div class="pagination">--}}

                                {{--@if($companies->currentPage() !== 1)
                                    <a href ="{{ $companies->previousPageUrl() }}" class="paginate"><span class="fa fa-caret-left"></span></a>
                                @endif
                                @if($companies->currentPage() !== $companies->lastPage() && $companies->hasPages())
                                    <a href ="{{ $companies->nextPageUrl()}}"  class="paginate"><span class="fa fa-caret-right"></span></a>
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
