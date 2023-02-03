<x-laragen::form wire:submit.prevent="submit" class="pt-3">                    <fieldset>
                                            @includeFirst([
                    'admin.crud-controller.carcontroller.edit.name',
                    'admin.generated.crud-controller.carcontroller.edit.name'
                ])
                @includeIf('admin.crud-controller.carcontroller.edit.name_after')
                                            @includeFirst([
                    'admin.crud-controller.carcontroller.edit.car_owner_id',
                    'admin.generated.crud-controller.carcontroller.edit.car_owner_id'
                ])
                @includeIf('admin.crud-controller.carcontroller.edit.car_owner_id_after')
                                            @includeFirst([
                    'admin.crud-controller.carcontroller.edit.type_id',
                    'admin.generated.crud-controller.carcontroller.edit.type_id'
                ])
                @includeIf('admin.crud-controller.carcontroller.edit.type_id_after')
                    </fieldset>
    
    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}        </button>
                <a href="{{ route('laragen.admin.cars.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>

</x-laragen::form>