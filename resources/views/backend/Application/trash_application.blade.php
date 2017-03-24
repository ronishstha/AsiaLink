@extends('backend.layouts.index')

@section('style')
    <link href="{{ URL::asset('/assets/css/table.css') }}" rel="stylesheet"/>
@endsection

@section('content')
    @if(Session::has('success'))
        <section class="info-box fail">
            {{ Session::get('success') }}
        </section>
    @endif
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h4 class="title">Applicatoin Trash</h4>
                            <p class="category"></p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                @php
                                    $count = 0;
                                    $i = 0;
                                @endphp
                                @foreach($applications as $application)
                                    @php
                                        if($application->status == "trash"){
                                            $i += 1;
                                    }
                                    @endphp
                                @endforeach
                                @if($i == 0)
                                    <p>Nothing in trash</p>
                                @else
                                    <thead class="text-warning">
                                    <th>title</th>
                                    <th>application_form</th>
                                    <th>view</th>
                                    <th>deleted by</th>
                                    <th>restore</th>
                                    <th>delete</th>
                                    </thead>

                                    @foreach($applications as $application)
                                        @if($application->status == "trash")
                                            <tbody>
                                            <tr>
                                                <td>{{ $application->title }}</td>
                                                <td>{{ $application->user->name }}</td>
                                                <td>application_form.pdf</td>
                                                <td><button class="btn-view"><a href="{{ route('backend.application.single.application', ['application_slug' => $application->slug]) }}">View</a></button></td>
                                                <td><button class="btn-edit"><a href="{{ route('backend.application.restore', ['application_id' => $application->id]) }}">Restore</a></button></td>
                                                <td><button class="btn-delete"><a href="{{ route('backend.application.delete', ['application_id' => $application->id]) }}">Delete</a></button></td>
                                            </tr>
                                            </tbody>
                                        @endif
                                    @endforeach
                                 @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection