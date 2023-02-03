<x-laragen::form wire:submit.prevent="submit" class="pt-3">
                    <fieldset>
                                            @includeFirst([
                    'admin.crud-controller.usercontroller.create.name',
                    'admin.generated.crud-controller.usercontroller.create.name'
                ])
                @includeIf('admin.crud-controller.usercontroller.create.name_after')
                                            @includeFirst([
                    'admin.crud-controller.usercontroller.create.email',
                    'admin.generated.crud-controller.usercontroller.create.email'
                ])
                @includeIf('admin.crud-controller.usercontroller.create.email_after')
                    </fieldset>
    
    <div class="form-group">

        <x-laragen::button class="mr-2">            {{ trans('global.save') }}        </x-laragen::button>
                <a href="{{ route('laragen.admin.users.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>

</x-laragen::form>