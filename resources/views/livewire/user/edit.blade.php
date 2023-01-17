<form wire:submit.prevent="submit" class="pt-3" novalidate>
                    <fieldset>
                            @includeFirst(
                    [
                        'admin.crud-controller.usercontroller.edit.name',
                        'admin.generated.crud-controller.usercontroller.edit.name'
                    ]
                )
                            @includeFirst(
                    [
                        'admin.crud-controller.usercontroller.edit.email',
                        'admin.generated.crud-controller.usercontroller.edit.email'
                    ]
                )
                            @includeFirst(
                    [
                        'admin.crud-controller.usercontroller.edit.user_id',
                        'admin.generated.crud-controller.usercontroller.edit.user_id'
                    ]
                )
                    </fieldset>
    
    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('laragen{{ strtolower($crudController->model->table_name) }}.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
