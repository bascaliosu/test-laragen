<x-laragen::form wire:submit.prevent="submit" class="pt-3">                    <fieldset>
                                            @includeFirst([
                    'admin.crud-controller.ownercontroller.edit.name',
                    'admin.generated.crud-controller.ownercontroller.edit.name'
                ])
                @includeIf('admin.crud-controller.ownercontroller.edit.name_after')
                    </fieldset>
    
    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}        </button>
                <a href="{{ route('laragen.admin.owners.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>

</x-laragen::form>