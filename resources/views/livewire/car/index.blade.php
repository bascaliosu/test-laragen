<div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                                                    <th class="w-28">
                                {{ trans('cruds.application.fields.id') }}
                            </th>
                                                    <th class="w-28">
                                {{ trans('cruds.application.fields.created_at') }}
                            </th>
                                                    <th class="w-28">
                                {{ trans('cruds.application.fields.updated_at') }}
                            </th>
                                                    <th class="w-28">
                                {{ trans('cruds.application.fields.name') }}
                            </th>
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
                                </td>
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.carcontroller.index.created_at',
                                            'admin.generated.crud-controller.carcontroller.index.created_at'
                                        ]
                                    )
                                </td>
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.carcontroller.index.updated_at',
                                            'admin.generated.crud-controller.carcontroller.index.updated_at'
                                        ]
                                    )
                                </td>
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.carcontroller.index.name',
                                            'admin.generated.crud-controller.carcontroller.index.name'
                                        ]
                                    )
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
    </div>
</div>
