<div>
    <table class="mt-6 w-full">
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.car-type.fields.id') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.cartypecontroller.show.id',
                        'admin.generated.crud-controller.cartypecontroller.show.id'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.cartypecontroller.show.id_after')
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.car-type.fields.created_at') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.cartypecontroller.show.created_at',
                        'admin.generated.crud-controller.cartypecontroller.show.created_at'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.cartypecontroller.show.created_at_after')
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.car-type.fields.updated_at') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.cartypecontroller.show.updated_at',
                        'admin.generated.crud-controller.cartypecontroller.show.updated_at'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.cartypecontroller.show.updated_at_after')
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.car-type.fields.name') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.cartypecontroller.show.name',
                        'admin.generated.crud-controller.cartypecontroller.show.name'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.cartypecontroller.show.name_after')
            </table>
</div>
