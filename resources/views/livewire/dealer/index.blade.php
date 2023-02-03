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
                                {{ trans('cruds.dealer.fields.status') }}                            </th>
                            @if(\View::exists('admin.crud-controller.dealercontroller.index.status_after_header'))
                                @includeIf('admin.crud-controller.dealercontroller.index.status_after_header')
                            @endif
                                                    <th class="w-28">
                                {{ trans('cruds.dealer.fields.status2') }}                            </th>
                            @if(\View::exists('admin.crud-controller.dealercontroller.index.status2_after_header'))
                                @includeIf('admin.crud-controller.dealercontroller.index.status2_after_header')
                            @endif
                                                    <th class="w-28">
                                {{ trans('cruds.dealer.fields.status3') }}                            </th>
                            @if(\View::exists('admin.crud-controller.dealercontroller.index.status3_after_header'))
                                @includeIf('admin.crud-controller.dealercontroller.index.status3_after_header')
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
                                            'admin.crud-controller.dealercontroller.index.status',
                                            'admin.generated.crud-controller.dealercontroller.index.status'
                                        ]
                                    )
                                    @includeIf('admin.crud-controller.dealercontroller.index.status_after')
                                </td>
                                @if(\View::exists('admin.crud-controller.dealercontroller.index.status_after_row'))
                                    @includeIf('admin.crud-controller.dealercontroller.index.status_after_row')
                                @endif
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.dealercontroller.index.status2',
                                            'admin.generated.crud-controller.dealercontroller.index.status2'
                                        ]
                                    )
                                    @includeIf('admin.crud-controller.dealercontroller.index.status2_after')
                                </td>
                                @if(\View::exists('admin.crud-controller.dealercontroller.index.status2_after_row'))
                                    @includeIf('admin.crud-controller.dealercontroller.index.status2_after_row')
                                @endif
                                                            <td>
                                    @includeFirst(
                                        [
                                            'admin.crud-controller.dealercontroller.index.status3',
                                            'admin.generated.crud-controller.dealercontroller.index.status3'
                                        ]
                                    )
                                    @includeIf('admin.crud-controller.dealercontroller.index.status3_after')
                                </td>
                                @if(\View::exists('admin.crud-controller.dealercontroller.index.status3_after_row'))
                                    @includeIf('admin.crud-controller.dealercontroller.index.status3_after_row')
                                @endif
                                                        <td>
                                <div class="form-group">
                                    
                                                                            <a href="{{ route('laragen.admin.dealers.show', ['dealer' => $item->id]) }}" class="btn btn-secondary">
                                            {{ trans('global.show') }}
                                        </a>
                                    
                                                                            <a href="{{ route('laragen.admin.dealers.edit', ['dealer' => $item->id]) }}" class="btn btn-secondary">
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
