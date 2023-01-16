<form wire:submit.prevent="submit" class="pt-3" novalidate>
                    <fieldset>
                            @includeFirst(
                    [
                        'admin.crud-controller.usercontroller.create.name',
                        'admin.generated.crud-controller.usercontroller.create.name'
                    ]
                )
                            @includeFirst(
                    [
                        'admin.crud-controller.usercontroller.create.email',
                        'admin.generated.crud-controller.usercontroller.create.email'
                    ]
                )
                            @includeFirst(
                    [
                        'admin.crud-controller.usercontroller.create.user_id',
                        'admin.generated.crud-controller.usercontroller.create.user_id'
                    ]
                )
                    </fieldset>
    
    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('laragenusers.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
