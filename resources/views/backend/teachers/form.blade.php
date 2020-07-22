

                <div class="row mt-4 mb-4">
                <div class="col-md-6 mb-4">
                 <div style="display: flex;">
                    <div>
                        <img class="imgPreview user-profile-image" 
                         width="80" src="{{asset($teacher->profile_pic ?? old('profile_pic')) }}" onerror="this.onerror=null;this.src='https://www.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028.jpg?s=80&d=mm&r=g';">
                    </div>
                    <div style="margin-left: 15px; flex-grow: 1">
                        <p>Choose a file</p>
                        <input id="photo" type="file">
                        <input id="profile_pic" name="profile_pic" type="hidden" value="{{$teacher->profile_pic ?? old('profile_pic')}}">
                        <input type="hidden" name="id" value="required|image|mimes:png,jpg,jpeg|max:500" path="teacher">
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
                                    ->value($teacher->name ?? old('name'))
                                    ->autofocus() }}
                                     
                            </div><!--col-->
                        </div><!--form-group-->

                       <div class="form-group row">
                            {{ html()->label(__('Email'))->class('col-md-2 form-control-label')->for('email') }}

                            <div class="col-md-6">
                                {{ html()->email('email')
                                    ->class('form-control')
                                    ->placeholder("Enter Email")
                                    ->required()
                                    ->value($teacher->email ?? old('email'))
                                    ->autofocus() }}
                                     
                            </div><!--col-->
                        </div><!--form-group-->
                          <div class="form-group row">
                            {{ html()->label(__('DOB'))->class('col-md-2 form-control-label')->for('dob') }}

                            <div class="col-md-6">
                                {{ html()->date('dob')
                                    ->class('form-control dob')
                                    ->placeholder("Enter date of birth")
                                    ->attribute('maxlength', 100)
                                    ->attribute('max', \Carbon\Carbon::now()->format('Y-m-d'))
                                    ->required()
                                    ->value($teacher->dob ?? old('dob'))
                                    ->autofocus() }}
                                     
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label(__('Subject'))->class('col-md-2 form-control-label')->for('subject') }}

                            <div class="col-md-6">
                                {{ html()->text('subject')
                                    ->class('form-control')
                                    ->placeholder("Enter Subject")
                                    ->attribute('maxlength', 100)
                                    ->required()
                                    ->value($teacher->subject ?? old('subject'))
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
                                    ->value($teacher->phone_no ?? old('phone_no'))
                                    ->autofocus() }}
                                     
                            </div><!--col-->
                        </div><!--form-group-->
                          <div class="form-group row">
                            {{ html()->label(__('Qualification'))->class('col-md-2 form-control-label')->for('qualification') }}

                            <div class="col-md-6">
                                {{ html()->text('qualification')
                                    ->class('form-control')
                                    ->placeholder("Enter Qualification")
                                    ->attribute('maxlength', 100)
                                    ->required()
                                    ->value($teacher->qualification ?? old('qualification'))
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
                                    ->value($teacher->address ?? old('address'))
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
                         var imageUrl = window.URL.createObjectURL(photo)
                                    $('.imgPreview').attr('src', imageUrl);

                        if(!res.success){alert(res.error);return false;}
                        $('input[name="profile_pic"]').val(res.path);
                        
                    }
                })
            })
        });
      
    </script>
