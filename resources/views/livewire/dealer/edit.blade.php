<x-laragen::form wire:submit.prevent="submit" class="pt-3">                    <fieldset>
                                            @includeFirst([
                    'admin.crud-controller.dealercontroller.edit.status',
                    'admin.generated.crud-controller.dealercontroller.edit.status'
                ])
                @includeIf('admin.crud-controller.dealercontroller.edit.status_after')
                                            @includeFirst([
                    'admin.crud-controller.dealercontroller.edit.status2',
                    'admin.generated.crud-controller.dealercontroller.edit.status2'
                ])
                @includeIf('admin.crud-controller.dealercontroller.edit.status2_after')
                                            @includeFirst([
                    'admin.crud-controller.dealercontroller.edit.status3',
                    'admin.generated.crud-controller.dealercontroller.edit.status3'
                ])
                @includeIf('admin.crud-controller.dealercontroller.edit.status3_after')
                    </fieldset>
    
    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}        </button>
                <a href="{{ route('laragen.admin.dealers.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>

</x-laragen::form>