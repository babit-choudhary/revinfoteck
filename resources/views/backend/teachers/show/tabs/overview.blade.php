<div class="col">
    <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th>Profile Picture</th>
                <td><img src="{{ asset($teacher->profile_pic) }}" class="user-profile-image w-25" /></td>
            </tr>

            <tr>
                <th>Name</th>
                <td>{{ $teacher->name }}</td>
            </tr>

            <tr>
                <th>Email</th>
                <td>{{ $teacher->email }}</td>
            </tr>
            <tr>
                <th>Phone No.</th>
                <td>{{ $teacher->phone_no }}</td>
            </tr>

            <tr>
                <th>Subject</th>
                <td>{{ $teacher->subject }}</td>
            </tr>
            <tr>
                <th>Education Qualification</th>
                <td>{{ $teacher->qualification }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $teacher->address }}</td>
            </tr>

           
        </table>
    </div>
</div><!--table-responsive-->
