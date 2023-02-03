<x-laragen::form wire:submit.prevent="submit" class="pt-3">
                    <fieldset>
                                            @includeFirst([
                    'admin.crud-controller.dealercontroller.create.status',
                    'admin.generated.crud-controller.dealercontroller.create.status'
                ])
                @includeIf('admin.crud-controller.dealercontroller.create.status_after')
                                            @includeFirst([
                    'admin.crud-controller.dealercontroller.create.status2',
                    'admin.generated.crud-controller.dealercontroller.create.status2'
                ])
                @includeIf('admin.crud-controller.dealercontroller.create.status2_after')
                                            @includeFirst([
                    'admin.crud-controller.dealercontroller.create.status3',
                    'admin.generated.crud-controller.dealercontroller.create.status3'
                ])
                @includeIf('admin.crud-controller.dealercontroller.create.status3_after')
                    </fieldset>
    
    <div class="form-group">

        <x-laragen::button class="mr-2">            {{ trans('global.save') }}        </x-laragen::button>
                <a href="{{ route('laragen.admin.dealers.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>

</x-laragen::form>