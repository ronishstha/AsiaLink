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
                            <h4 class="title">Demands</h4>
                            <p class="category"></p>
                        </div>

                        <div class="card-content table-responsive">
                            <i class="material-icons create">note_add</i>
                            <a href="{{ route('backend.demand.get.create') }}">Create Demand</a>
                            <a href="{{ route('backend.demand.delete.page') }}">
                                <i class="material-icons delete">delete
                                    @php
                                        $count = count($demands);
                                        $i = 0;
                                    @endphp
                                    @foreach($demands as $demand)
                                        @php

                                            if($demand->status == "trash"){
                                                $i += 1;
                                        }
                                        @endphp
                                    @endforeach
                                    @if($i != 0)
                                        <span class="noti-badge">{{ $i }}</span>
                                    @endif
                                </i>
                            </a>
                            @if(count($demands) == 0 || $count == $i)
                                <br><p align="center">No demand available<p>
                            @else
                                <table class="table">
                                    <thead class="text-primary">
                                    <th>Title</th>
                                    <th>Edit</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                    </thead>
                                    <tbody>
                                    @foreach($demands as $demand)
                                        @if($demand->status == "published" || $demand->status == "unpublished")
                                            <tr>
                                                <td><a href="{{ route('backend.demand.single.demand', ['demand_slug' => $demand->slug]) }}">{{ $demand->title }}</a></td>
                                                <td><button class="btn-edit"><a href="{{ route('backend.demand.get.update', ['demand_id' => $demand->id]) }}">Edit</a></button></td>
                                                <td><button class="btn-view"><a href="{{ route('backend.demand.single.demand', ['demand_slug' => $demand->slug])  }}">View</a></button></td>
                                                <td><button class="btn-delete"><a href="{{ route('backend.demand.trash', ['demand_id' => $demand->id]) }}">Delete</a></button></td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>

                                </table>
                            @endif
                            {!! $demands->links() !!}
                            {{--<div class="pagination">--}}

                                {{--@if($demands->currentPage() !== 1)
                                    <a href ="{{ $demands->previousPageUrl() }}" class="paginate"><span class="fa fa-caret-left"></span></a>
                                @endif
                                @if($demands->currentPage() !== $demands->lastPage() && $demands->hasPages())
                                    <a href ="{{ $demands->nextPageUrl()}}"  class="paginate"><span class="fa fa-caret-right"></span></a>
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
