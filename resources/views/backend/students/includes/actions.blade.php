
    <div class="btn-group" role="group" aria-label="@lang('labels.backend.access.users.user_actions')">
        <a href="{{ route('admin.students.show', $student) }}" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.view')" class="btn btn-info">
            <i class="fas fa-eye"></i>
        </a>

        <a href="{{ route('admin.students.edit', $student) }}" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.edit')" class="btn btn-primary">
            <i class="fas fa-edit"></i>
        </a>

        <a href="{{ route('admin.students.destroy', $student) }}"
                       data-method="delete"
                       data-trans-button-cancel="@lang('buttons.general.cancel')"
                       data-trans-button-confirm="@lang('buttons.general.crud.delete')"
                       data-trans-title="@lang('strings.backend.general.are_you_sure')"
                       class="btn btn-danger"> <i class="fas fa-trash"></i></a>
        </div>
    </div>

