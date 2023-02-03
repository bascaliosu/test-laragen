<div>
    <table class="mt-6 w-full">
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.dealer.fields.status') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.dealercontroller.show.status',
                        'admin.generated.crud-controller.dealercontroller.show.status'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.dealercontroller.show.status_after')
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.dealer.fields.status2') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.dealercontroller.show.status2',
                        'admin.generated.crud-controller.dealercontroller.show.status2'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.dealercontroller.show.status2_after')
                    <tr>
                <th class="text-left">
                    {{ trans('cruds.dealer.fields.status3') }}                </th>
                <td>
                    @includeFirst(
                        [
                        'admin.crud-controller.dealercontroller.show.status3',
                        'admin.generated.crud-controller.dealercontroller.show.status3'
                        ]
                    )
                </td>
            </tr>
            @includeIf('admin.crud-controller.dealercontroller.show.status3_after')
            </table>
</div>
