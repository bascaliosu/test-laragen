<x-laragen::form wire:submit.prevent="submit" class="pt-3">                    <fieldset>
                                            @includeFirst([
                    'admin.crud-controller.usercontroller.edit.name',
                    'admin.generated.crud-controller.usercontroller.edit.name'
                ])
                @includeIf('admin.crud-controller.usercontroller.edit.name_after')
                                            @includeFirst([
                    'admin.crud-controller.usercontroller.edit.email',
                    'admin.generated.crud-controller.usercontroller.edit.email'
                ])
                @includeIf('admin.crud-controller.usercontroller.edit.email_after')
                    </fieldset>
    
    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}        </button>
                <a href="{{ route('laragen.admin.users.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>

</x-laragen::form>