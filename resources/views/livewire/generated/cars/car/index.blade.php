<div>
    <div wire:loading.delay>
        Loading...
    </div>
    @includeIf('app.cars.car.index.before_content')
    <div class="-my-2 -mx-6 overflow-x-auto lg:-mx-7">
        <div class="inline-block min-w-full py-2 align-middle px-6 lg:px-8">
            <div class="overflow-hidden shadow rounded">
                <table class="laragen-table">
                    <thead>
                    <tr>
                                                    @includeIf('app.cars.car.index.id_before_header')
                            <th>
                                {{ trans('cruds.car.fields.id') }}                            </th>
                            @includeIf('app.cars.car.index.id_after_header')
                                                    @includeIf('app.cars.car.index.created_at_before_header')
                            <th>
                                {{ trans('cruds.car.fields.created_at') }}                            </th>
                            @includeIf('app.cars.car.index.created_at_after_header')
                                                    @includeIf('app.cars.car.index.updated_at_before_header')
                            <th>
                                {{ trans('cruds.car.fields.updated_at') }}                            </th>
                            @includeIf('app.cars.car.index.updated_at_after_header')
                                                    @includeIf('app.cars.car.index.name_before_header')
                            <th>
                                {{ trans('cruds.car.fields.name') }}                            </th>
                            @includeIf('app.cars.car.index.name_after_header')
                                                <th style="width: 120px">{{ trans('global.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($items as $item)
                        @includeIf('app.cars.car.index.before_row', ['item' => $item])
                        <tr>
                                                            @includeIf('app.cars.car.fields.index.id_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.cars.car.fields.index.id',
                                            'app.generated.cars.car.fields.index.id'
                                        ]
                                    )
                                    @includeIf('app.cars.car.fields.index.id_after')
                                </td>
                                @includeIf('app.cars.car.fields.index.id_after_column')
                                                            @includeIf('app.cars.car.fields.index.created_at_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.cars.car.fields.index.created_at',
                                            'app.generated.cars.car.fields.index.created_at'
                                        ]
                                    )
                                    @includeIf('app.cars.car.fields.index.created_at_after')
                                </td>
                                @includeIf('app.cars.car.fields.index.created_at_after_column')
                                                            @includeIf('app.cars.car.fields.index.updated_at_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.cars.car.fields.index.updated_at',
                                            'app.generated.cars.car.fields.index.updated_at'
                                        ]
                                    )
                                    @includeIf('app.cars.car.fields.index.updated_at_after')
                                </td>
                                @includeIf('app.cars.car.fields.index.updated_at_after_column')
                                                            @includeIf('app.cars.car.fields.index.name_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.cars.car.fields.index.name',
                                            'app.generated.cars.car.fields.index.name'
                                        ]
                                    )
                                    @includeIf('app.cars.car.fields.index.name_after')
                                </td>
                                @includeIf('app.cars.car.fields.index.name_after_column')
                                                        <td>
                                <div class="form-group">
                                    
                                    @if(!$hideDefaultActions)

                                    
                                    
                                        
                                        <x-laragen::button variant="text" size="xs" icon="fa-light fa-pencil" href="{{ route('laragen.admin.cars.edit', ['car' => $item->id]) }}"></x-laragen::button>                                    
                                    
                                    @endif
                                    @includeIf('app.cars.car.index.actions')
                                </div>
                            </td>
                        </tr>
                        @includeIf('app.cars.car.index.after_row', ['item' => $item])
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-5 pagination">
                {{ $items->onEachSide(1)->links() }}
            </div>
        </div>
    </div>

    @includeIf('app.cars.car.index.after_content')
</div>


@includeIf('app.cars.car.index.footer')
