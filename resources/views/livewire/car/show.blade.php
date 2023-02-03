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
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.car.fields.car_owner_id') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.carcontroller.show.car_owner_id',
                        'admin.generated.crud-controller.carcontroller.show.car_owner_id'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.carcontroller.show.car_owner_id_after')
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.car.fields.type_id') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.carcontroller.show.type_id',
                        'admin.generated.crud-controller.carcontroller.show.type_id'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.carcontroller.show.type_id_after')
            </table>
</div>
