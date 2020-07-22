<div class="col">
    <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th>Profile Picture</th>
                <td><img src="{{ asset($student->profile_pic) }}" class="user-profile-image w-25" /></td>
            </tr>

            <tr>
                <th>Name</th>
                <td>{{ $student->name }}</td>
            </tr>

            <tr>
                <th>Father Name</th>
                <td>{{ $student->father_name }}</td>
            </tr>
            <tr>
                <th>Mother Name</th>
                <td>{{ $student->mother_name }}</td>
            </tr>
            <tr>
                <th>Class</th>
                <td>{{ $student->class }}</td>
            </tr>
            <tr>
                <th>Roll No.</th>
                <td>{{ $student->roll_no }}</td>
            </tr>
            <tr>
                <th>Phone No.</th>
                <td>{{ $student->phone_no }}</td>
            </tr>

            
            <tr>
                <th>Address</th>
                <td>{{ $student->address }}</td>
            </tr>

           
        </table>
    </div>
</div><!--table-responsive-->
