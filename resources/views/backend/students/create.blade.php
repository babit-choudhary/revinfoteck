@extends('backend.layouts.app')

@section('title', "Create Student")
@section('breadcrumb-links')
    @include('backend.students.includes.breadcrumb-links')
@endsection

@section('content')
    {{ html()->form('POST', route('admin.students.store'))->class('form-horizontal needs-validation')->open() }}
     <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Student Management
                            <small class="text-muted">Create Student</small>
                        </h4>
                    </div><!--col-->
                </div><!--row-->
           
                <hr>
            @include('backend.students.form')
             </div><!--card-body-->
            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('admin.students.index'), __('buttons.general.cancel')) }}
                    </div><!--col-->

                    <div class="col text-right">
                        {{ form_submit(__('buttons.general.crud.create')) }}
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-footer-->
        </div><!--card-->
    {{ html()->form()->close() }}
    <script>
 
            // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict';

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add('was-validated');
      }, false);
    });
})();
    </script>
@endsection
