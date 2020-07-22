

                <div class="row mt-4 mb-4">
                <div class="col-md-6 mb-4">
                 <div style="display: flex;">
                    <div>
                        <img class="imgPreview user-profile-image" 
                         width="80" src="{{asset($student->profile_pic ?? old('profile_pic')) }}" onerror="this.onerror=null;this.src='https://www.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028.jpg?s=80&d=mm&r=g';">
                    </div>
                    <div style="margin-left: 15px; flex-grow: 1">
                        <p>Choose a file</p>
                        <input id="photo" type="file">
                        <input id="profile_pic" name="profile_pic" type="hidden" value="{{$student->profile_pic ?? old('profile_pic')}}">
                        <input type="hidden" name="id" value="required|image|mimes:png,jpg,jpeg|max:500" path="student">
                        <br>
                        <div class="progress">
                            <div class="progress-bar" 
                                 role="progressbar" aria-valuemin="0"
                                 aria-valuemax="100">

                            </div>
                        </div>
                    </div>
                </div>
                </div>
                    <div class="col-md-12">
                        <div class="form-group row">
                            {{ html()->label(__('Name'))->class('col-md-2 form-control-label')->for('name') }}

                            <div class="col-md-6">
                                {{ html()->text('name')
                                    ->class('form-control')
                                    ->placeholder("Enter Name")
                                    ->attribute('maxlength', 50)
                                    ->required()
                                    ->value($student->name ?? old('name'))
                                    ->autofocus() }}
                                     
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            {{ html()->label(__('Teacher'))->class('col-md-2 form-control-label')->for('teacher_id') }}

                            <div class="col-md-6">
                            {!! html()->select('teacher_id', $teachers, $student->teacher_id ?? old('teacher_id'), ["class"=>'form-control','required'=>true]) !!}
                               
                                     
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            {{ html()->label(__('Father Name'))->class('col-md-2 form-control-label')->for('father_name') }}

                            <div class="col-md-6">
                                {{ html()->text('father_name')
                                    ->class('form-control')
                                    ->placeholder("Enter Father Name")
                                    ->attribute('maxlength', 50)
                                    ->required()
                                    ->value($student->father_name ?? old('father_name'))
                                    ->autofocus() }}
                                     
                            </div><!--col-->
                        </div><!--form-group-->
                         <div class="form-group row">
                            {{ html()->label(__('Mother Name'))->class('col-md-2 form-control-label')->for('mother_name') }}

                            <div class="col-md-6">
                                {{ html()->text('mother_name')
                                    ->class('form-control')
                                    ->placeholder("Enter Mother Name")
                                    ->attribute('maxlength', 50)
                                    ->required()
                                    ->value($student->mother_name ?? old('mother_name'))
                                    ->autofocus() }}
                                     
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            {{ html()->label(__('Class'))->class('col-md-2 form-control-label')->for('class') }}

                            <div class="col-md-6">
                                {{ html()->text('class')
                                    ->class('form-control')
                                    ->placeholder("Enter Class Name")
                                    ->attribute('maxlength', 50)
                                    ->required()
                                    ->value($student->class ?? old('class'))
                                    ->autofocus() }}
                                     
                            </div><!--col-->
                        </div><!--form-group-->

                       <div class="form-group row">
                            {{ html()->label(__('Roll No.'))->class('col-md-2 form-control-label')->for('roll_no') }}

                            <div class="col-md-6">
                                {{ html()->text('roll_no')
                                    ->class('form-control')
                                    ->placeholder("Enter Roll No.")
                                    ->attribute('maxlength', 100)
                                    ->required()
                                    ->value($student->roll_no ?? old('roll_no'))
                                    ->autofocus() }}
                                     
                            </div><!--col-->
                        </div><!--form-group-->
                          <div class="form-group row">
                            {{ html()->label(__('DOB'))->class('col-md-2 form-control-label')->for('dob') }}

                            <div class="col-md-6">
                                {{ html()->date('dob')
                                    ->class('form-control dob')
                                    ->placeholder("Enter date of birth")
                                    ->attribute('max', \Carbon\Carbon::now()->format('Y-m-d'))
                                    ->required()
                                    ->value($student->dob ?? old('dob'))
                                    ->autofocus() }}
                                     
                            </div><!--col-->
                        </div><!--form-group-->

                 
                        <div class="form-group row">
                            {{ html()->label(__('Phone No.'))->class('col-md-2 form-control-label')->for('phone_no') }}

                            <div class="col-md-6">
                                {{ html()->text('phone_no')
                                    ->class('form-control')
                                    ->placeholder("Enter Phone No.")
                                    ->attribute('maxlength', 100)
                                    ->required()
                                    ->value($student->phone_no ?? old('phone_no'))
                                    ->autofocus() }}
                                     
                            </div><!--col-->
                        </div><!--form-group-->
                        
                           <div class="form-group row">
                            {{ html()->label(__('Address'))->class('col-md-2 form-control-label')->for('address') }}

                            <div class="col-md-6">
                                {{ html()->textarea('address')
                                    ->class('form-control')
                                    ->placeholder("Enter Address")
                                    ->attribute('maxlength', 300)
                                    ->required()
                                    ->value($student->address ?? old('address'))
                                    ->autofocus() }}
                                     
                            </div><!--col-->
                        </div><!--form-group-->

                        
                    </div><!--col-->
                </div><!--row-->
            
                <script>
        $(function () {
            $.ajaxSetup({
                headers: {'X-CSRF-Token': '{{csrf_token()}}'}
            })
            var validation = $('input[name="id"]').val();
            var path = $('input[name="id"]').attr('path');
            $('#photo').change(function () {
                var photo = $(this)[0].files[0];
                var formData = new FormData();
                formData.append('photo', photo);
                formData.append('path', path);
                formData.append('validation', validation);

                $.ajax({
                    xhr: function () {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function (evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);
                                console.log(percentComplete);
                                $('.progress-bar').css('width', percentComplete + '%');
                                if (percentComplete === 100) {
                                    console.log('completed 100%')

                                    var imageUrl = window.URL.createObjectURL(photo)
                                    $('.imgPreview').attr('src', imageUrl);
                                    setTimeout(function () {
                                        $('.progress-bar').css('width', '0%');
                                    }, 2000)
                                }
                            }
                        }, false);
                        return xhr;
                    },
                    url: '{{route('file-upload')}}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (res) {

                        if(!res.success){alert(res.error);return false;}
                        $('input[name="profile_pic"]').val(res.path);
                         var imageUrl = window.URL.createObjectURL(photo)
                                    $('.imgPreview').attr('src', imageUrl);
                        
                    }
                })
            })
        });
       
    </script>
