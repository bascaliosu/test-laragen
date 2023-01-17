<form wire:submit.prevent="submit" class="pt-3" novalidate>
                    <fieldset>
                            @includeFirst(
                    [
                        'admin.crud-controller.carownercontroller.edit.nume',
                        'admin.generated.crud-controller.carownercontroller.edit.nume'
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
