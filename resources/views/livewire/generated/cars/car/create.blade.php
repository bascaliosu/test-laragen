<x-laragen::form wire:submit.prevent="submit" class="pb-7 bg-white shadow rounded px-7">
                    @includeIf('app.cars.car.create.fieldset.default-fieldset-9.before')
        <fieldset>

            
            <div class="flex-1 -mx-2">
                @includeIf('app.cars.car.create.fieldset.default-fieldset-9.content_before')
                                    @includeIf('app.cars.car.fields.create.name_before')
                    @includeFirst([
                                'app.cars.car.fields.create.name',
                                'app.generated.cars.car.fields.create.name'
                            ])
                    @includeIf('app.cars.car.fields.create.name_after')
                                @includeIf('app.cars.car.create.fieldset.default-fieldset-9.content_after')
            </div>

        </fieldset>
        @includeIf('app.cars.car.create.fieldset.default-fieldset-9.after')
    
    <div class="form-group">

        <x-laragen::button class="mr-2">        {{ trans('global.save') }}        </x-laragen::button>
                <a href="{{ route('laragen.admin.cars.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>

</x-laragen::form>
@includeIf('app.cars.car.create.footer')
