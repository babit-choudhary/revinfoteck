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
                        @foreach($teacher->students as $student)
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
                    {!! $teacher->students->count() !!} students total
                </div>
            </div><!--col-->
        </div><!--row-->
