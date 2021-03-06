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
                            <h4 class="title">Clients</h4>
                            <p class="category"></p>
                        </div>

                        <div class="card-content table-responsive">
                            <i class="material-icons create">note_add</i>
                            <a href="{{ route('backend.client.get.create') }}">Create Client</a>
                            <a href="{{ route('backend.client.delete.page') }}">
                                <i class="material-icons delete">delete
                                    @php
                                        $count = count($clients);
                                        $i = 0;
                                    @endphp
                                    @foreach($clients as $client)
                                        @php

                                            if($client->status == "trash"){
                                                $i += 1;
                                        }
                                        @endphp
                                    @endforeach
                                    @if($i != 0)
                                        <span class="noti-badge">{{ $i }}</span>
                                    @endif
                                </i>
                            </a>
                            @if(count($clients) == 0 || $count == $i)
                                <br><p align="center">No client available<p>
                            @else
                                <table class="table">
                                    <thead class="text-primary">
                                    <th>Title</th>
                                    <th>Edit</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                    </thead>
                                    <tbody>
                                    @foreach($clients as $client)
                                        @if($client->status == "published" || $client->status == "unpublished")
                                            <tr>
                                                <td><a href="{{ route('backend.client.single.client', ['client_slug' => $client->slug]) }}">{{ $client->title }}</a></td>
                                                <td><button class="btn-edit"><a href="{{ route('backend.client.get.update', ['client_id' => $client->id]) }}">Edit</a></button></td>
                                                <td><button class="btn-view"><a href="{{ route('backend.client.single.client', ['client_slug' => $client->slug])  }}">View</a></button></td>
                                                <td><button class="btn-delete"><a href="{{ route('backend.client.trash', ['client_id' => $client->id]) }}">Delete</a></button></td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>

                                </table>
                            @endif
                            {!! $clients->links() !!}
                            {{--<div class="pagination">--}}

                                {{--@if($clients->currentPage() !== 1)
                                    <a href ="{{ $clients->previousPageUrl() }}" class="paginate"><span class="fa fa-caret-left"></span></a>
                                @endif
                                @if($clients->currentPage() !== $clients->lastPage() && $clients->hasPages())
                                    <a href ="{{ $clients->nextPageUrl()}}"  class="paginate"><span class="fa fa-caret-right"></span></a>
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
