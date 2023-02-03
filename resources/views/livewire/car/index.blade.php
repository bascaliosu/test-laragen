<div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-x-auto">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                                                    <th class="w-28">
                                {{ trans('cruds.car.fields.id') }}                            </th>
                            @if(\View::exists('admin.crud-controller.carcontroller.index.id_after_header'))
                                @includeIf('admin.crud-controller.carcontroller.index.id_after_header')
                            @endif
                                                    <th class="w-28">
                                {{ trans('cruds.car.fields.created_at') }}                            </th>
                            @if(\View::exists('admin.crud-controller.carcontroller.index.created_at_after_header'))
                                @includeIf('admin.crud-controller.carcontroller.index.created_at_after_header')
                            @endif
                                                    <th class="w-28">
                                {{ trans('cruds.car.fields.updated_at') }}                            </th>
                            @if(\View::exists('admin.crud-controller.carcontroller.index.updated_at_after_header'))
                                @includeIf('admin.crud-controller.carcontroller.index.updated_at_after_header')
                            @endif
                                                    <th class="w-28">
                                {{ trans('cruds.car.fields.name') }}                            </th>
                            @if(\View::exists('admin.crud-controller.carcontroller.index.name_after_header'))
                                @includeIf('admin.crud-controller.carcontroller.index.name_after_header')
                            @endif
                                                    <th class="w-28">
                                {{ trans('cruds.car.fields.car_owner') }}                            </th>
                            @if(\View::exists('admin.crud-controller.carcontroller.index.car_owner_id_after_header'))
                                @includeIf('admin.crud-controller.carcontroller.index.car_owner_id_after_header')
                            @endif
                                                    <th class="w-28">
                                {{ trans('cruds.car.fields.type') }}                            </th>
                            @if(\View::exists('admin.crud-controller.carcontroller.index.type_id_after_header'))
                                @includeIf('admin.crud-controller.carcontroller.index.type_id_after_header')
                            @endif
                                                <th class="w-28">{{ trans('global.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($items as $item)
                        <tr>
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.carcontroller.index.id',
                                            'admin.generated.crud-controller.carcontroller.index.id'
                                        ]
                                    )
                                    @includeIf('admin.crud-controller.carcontroller.index.id_after')
                                </td>
                                @if(\View::exists('admin.crud-controller.carcontroller.index.id_after_row'))
                                    @includeIf('admin.crud-controller.carcontroller.index.id_after_row')
                                @endif
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.carcontroller.index.created_at',
                                            'admin.generated.crud-controller.carcontroller.index.created_at'
                                        ]
                                    )
                                    @includeIf('admin.crud-controller.carcontroller.index.created_at_after')
                                </td>
                                @if(\View::exists('admin.crud-controller.carcontroller.index.created_at_after_row'))
                                    @includeIf('admin.crud-controller.carcontroller.index.created_at_after_row')
                                @endif
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.carcontroller.index.updated_at',
                                            'admin.generated.crud-controller.carcontroller.index.updated_at'
                                        ]
                                    )
                                    @includeIf('admin.crud-controller.carcontroller.index.updated_at_after')
                                </td>
                                @if(\View::exists('admin.crud-controller.carcontroller.index.updated_at_after_row'))
                                    @includeIf('admin.crud-controller.carcontroller.index.updated_at_after_row')
                                @endif
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.carcontroller.index.name',
                                            'admin.generated.crud-controller.carcontroller.index.name'
                                        ]
                                    )
                                    @includeIf('admin.crud-controller.carcontroller.index.name_after')
                                </td>
                                @if(\View::exists('admin.crud-controller.carcontroller.index.name_after_row'))
                                    @includeIf('admin.crud-controller.carcontroller.index.name_after_row')
                                @endif
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.carcontroller.index.car_owner_id',
                                            'admin.generated.crud-controller.carcontroller.index.car_owner_id'
                                        ]
                                    )
                                    @includeIf('admin.crud-controller.carcontroller.index.car_owner_id_after')
                                </td>
                                @if(\View::exists('admin.crud-controller.carcontroller.index.car_owner_id_after_row'))
                                    @includeIf('admin.crud-controller.carcontroller.index.car_owner_id_after_row')
                                @endif
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.carcontroller.index.type_id',
                                            'admin.generated.crud-controller.carcontroller.index.type_id'
                                        ]
                                    )
                                    @includeIf('admin.crud-controller.carcontroller.index.type_id_after')
                                </td>
                                @if(\View::exists('admin.crud-controller.carcontroller.index.type_id_after_row'))
                                    @includeIf('admin.crud-controller.carcontroller.index.type_id_after_row')
                                @endif
                                                        <td>
                                <div class="form-group">
                                    
                                                                            <a href="{{ route('laragen.admin.cars.show', ['car' => $item->id]) }}" class="btn btn-secondary">
                                            {{ trans('global.show') }}
                                        </a>
                                    
                                                                            <a href="{{ route('laragen.admin.cars.edit', ['car' => $item->id]) }}" class="btn btn-secondary">
                                            {{ trans('global.edit') }}
                                        </a>
                                    
                                                                            <button class="btn btn-danger mr-2" type="submit" wire:click="delete({{ $item->id }})">
                                            {{ trans('global.delete') }}
                                        </button>
                                                                    </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-body">
            <div class="pt-3">
                {{ $items->links() }}
            </div>
        </div>
    </div>
</div>

    @push('scripts')
        <script>
            Livewire.on('deleteNotAllowed', e => {
                alert('Delete not allowed, check related rows.');
            })
        </script>
    @endpush
