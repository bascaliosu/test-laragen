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
                                            'admin.crud-controller.usercontroller.index.id',
                                            'admin.generated.crud-controller.usercontroller.index.id'
                                        ]
                                    )
                                </td>
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.usercontroller.index.name',
                                            'admin.generated.crud-controller.usercontroller.index.name'
                                        ]
                                    )
                                </td>
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.usercontroller.index.email',
                                            'admin.generated.crud-controller.usercontroller.index.email'
                                        ]
                                    )
                                </td>
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.usercontroller.index.email_verified_at',
                                            'admin.generated.crud-controller.usercontroller.index.email_verified_at'
                                        ]
                                    )
                                </td>
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.usercontroller.index.password',
                                            'admin.generated.crud-controller.usercontroller.index.password'
                                        ]
                                    )
                                </td>
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.usercontroller.index.created_at',
                                            'admin.generated.crud-controller.usercontroller.index.created_at'
                                        ]
                                    )
                                </td>
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.usercontroller.index.updated_at',
                                            'admin.generated.crud-controller.usercontroller.index.updated_at'
                                        ]
                                    )
                                </td>
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.usercontroller.index.deleted_at',
                                            'admin.generated.crud-controller.usercontroller.index.deleted_at'
                                        ]
                                    )
                                </td>
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.usercontroller.index.user_id',
                                            'admin.generated.crud-controller.usercontroller.index.user_id'
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
