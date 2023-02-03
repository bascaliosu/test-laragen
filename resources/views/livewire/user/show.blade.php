<div>
    <table class="mt-6 w-full">
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.user.fields.id') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.usercontroller.show.id',
                        'admin.generated.crud-controller.usercontroller.show.id'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.usercontroller.show.id_after')
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.user.fields.name') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.usercontroller.show.name',
                        'admin.generated.crud-controller.usercontroller.show.name'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.usercontroller.show.name_after')
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.user.fields.email') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.usercontroller.show.email',
                        'admin.generated.crud-controller.usercontroller.show.email'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.usercontroller.show.email_after')
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.user.fields.email_verified_at') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.usercontroller.show.email_verified_at',
                        'admin.generated.crud-controller.usercontroller.show.email_verified_at'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.usercontroller.show.email_verified_at_after')
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.user.fields.password') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.usercontroller.show.password',
                        'admin.generated.crud-controller.usercontroller.show.password'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.usercontroller.show.password_after')
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.user.fields.created_at') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.usercontroller.show.created_at',
                        'admin.generated.crud-controller.usercontroller.show.created_at'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.usercontroller.show.created_at_after')
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.user.fields.updated_at') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.usercontroller.show.updated_at',
                        'admin.generated.crud-controller.usercontroller.show.updated_at'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.usercontroller.show.updated_at_after')
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.user.fields.deleted_at') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.usercontroller.show.deleted_at',
                        'admin.generated.crud-controller.usercontroller.show.deleted_at'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.usercontroller.show.deleted_at_after')
            </table>
</div>
