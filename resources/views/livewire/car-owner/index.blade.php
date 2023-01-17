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
                                {{ trans('cruds.application.fields.{{ $crudControllerView->linkedModelIsRelation() ? $crudControllerView->linkedModel->name : $crudControllerView->linkedModel->column_name }}') }}
                            </th>
                                                    <th class="w-28">
                                {{ trans('cruds.application.fields.{{ $crudControllerView->linkedModelIsRelation() ? $crudControllerView->linkedModel->name : $crudControllerView->linkedModel->column_name }}') }}
                            </th>
                                                    <th class="w-28">
                                {{ trans('cruds.application.fields.{{ $crudControllerView->linkedModelIsRelation() ? $crudControllerView->linkedModel->name : $crudControllerView->linkedModel->column_name }}') }}
                            </th>
                                                    <th class="w-28">
                                {{ trans('cruds.application.fields.{{ $crudControllerView->linkedModelIsRelation() ? $crudControllerView->linkedModel->name : $crudControllerView->linkedModel->column_name }}') }}
                            </th>
                                            </tr>
                </thead>
                <tbody>
                    @forelse($items as $item)
                        <tr>
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.carownercontroller.index.id',
                                            'admin.generated.crud-controller.carownercontroller.index.id'
                                        ]
                                    )
                                </td>
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.carownercontroller.index.created_at',
                                            'admin.generated.crud-controller.carownercontroller.index.created_at'
                                        ]
                                    )
                                </td>
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.carownercontroller.index.updated_at',
                                            'admin.generated.crud-controller.carownercontroller.index.updated_at'
                                        ]
                                    )
                                </td>
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.carownercontroller.index.nume',
                                            'admin.generated.crud-controller.carownercontroller.index.nume'
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
