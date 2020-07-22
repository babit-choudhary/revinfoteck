@extends('backend.layouts.app')

@section('title', app_name() . ' | Teachers')

@section('breadcrumb-links')
    @include('backend.teachers.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                   Teachers</small>
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
                @include('backend.teachers.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Phone No.</th>
                            <th>Address</th>
                            <th>Last Updated</th>
                            <th>@lang('labels.general.actions')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teachers as $teacher)
                            <tr>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->subject }}</td>
                                <td>{{ $teacher->phone_no }}</td>
                                <td>{{ $teacher->address }}</td>
                                <td>{{ $teacher->updated_at->diffForHumans() }}</td>
                                <td class="btn-td">@include('backend.teachers.includes.actions', ['teacher' => $teacher])</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    {!! $teachers->total() !!} teachers total
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $teachers->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
