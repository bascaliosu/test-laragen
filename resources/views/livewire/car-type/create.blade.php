<x-laragen::form wire:submit.prevent="submit" class="pt-3">
                    <fieldset>
                                            @includeFirst([
                    'admin.crud-controller.cartypecontroller.create.name',
                    'admin.generated.crud-controller.cartypecontroller.create.name'
                ])
                @includeIf('admin.crud-controller.cartypecontroller.create.name_after')
                    </fieldset>
    
    <div class="form-group">

        <x-laragen::button class="mr-2">            {{ trans('global.save') }}        </x-laragen::button>
                <a href="{{ route('laragen.admin.car_types.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>

</x-laragen::form>