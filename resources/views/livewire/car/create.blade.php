<x-laragen::form wire:submit.prevent="submit" class="pt-3">
                    <fieldset>
                                            @includeFirst([
                    'admin.crud-controller.carcontroller.create.prenume',
                    'admin.generated.crud-controller.carcontroller.create.prenume'
                ])
                @includeIf('admin.crud-controller.carcontroller.create.prenume_after')
                    </fieldset>
    
    <div class="form-group">

        <x-laragen::button class="mr-2">            {{ trans('global.save') }}        </x-laragen::button>
                <a href="{{ route('laragen.admin.cars.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>

</x-laragen::form>