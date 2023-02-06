<div>
    <table class="mt-6 w-full">
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.car.fields.id') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.carcontroller.show.id',
                        'admin.generated.crud-controller.carcontroller.show.id'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.carcontroller.show.id_after')
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.car.fields.created_at') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.carcontroller.show.created_at',
                        'admin.generated.crud-controller.carcontroller.show.created_at'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.carcontroller.show.created_at_after')
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.car.fields.updated_at') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.carcontroller.show.updated_at',
                        'admin.generated.crud-controller.carcontroller.show.updated_at'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.carcontroller.show.updated_at_after')
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.car.fields.name') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.carcontroller.show.name',
                        'admin.generated.crud-controller.carcontroller.show.name'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.carcontroller.show.name_after')
            </table>
</div>
