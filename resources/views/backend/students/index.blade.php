@extends('backend.layouts.app')

@section('title', app_name() . ' | Students')

@section('breadcrumb-links')
    @include('backend.students.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                   Students</small>
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
                @include('backend.students.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Roll No.</th>                            
                            <th>phone_no</th>
                            <th>Address</th>
                            <th>Last Updated</th>
                            <th>@lang('labels.general.actions')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->class }}</td>
                                <td>{{ $student->roll_no }}</td>
                                <td>{{ $student->phone_no }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->updated_at->diffForHumans() }}</td>
                                <td class="btn-td">@include('backend.students.includes.actions', ['student' => $student])</td>
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
                    {!! $students->total() !!} students total
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $students->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
