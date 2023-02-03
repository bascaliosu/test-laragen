<div>
    <table class="mt-6 w-full">
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.owner.fields.id') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.ownercontroller.show.id',
                        'admin.generated.crud-controller.ownercontroller.show.id'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.ownercontroller.show.id_after')
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.owner.fields.created_at') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.ownercontroller.show.created_at',
                        'admin.generated.crud-controller.ownercontroller.show.created_at'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.ownercontroller.show.created_at_after')
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.owner.fields.updated_at') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.ownercontroller.show.updated_at',
                        'admin.generated.crud-controller.ownercontroller.show.updated_at'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.ownercontroller.show.updated_at_after')
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.owner.fields.name') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.ownercontroller.show.name',
                        'admin.generated.crud-controller.ownercontroller.show.name'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.ownercontroller.show.name_after')
            </table>
</div>
