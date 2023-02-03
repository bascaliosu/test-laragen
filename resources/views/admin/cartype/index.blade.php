<x-layouts.app>
    <x-slot:title>
        <h1>
            {{ trans('cruds.car-type.title_multiple') }}        </h1>
        <a href="{{ route('laragen.admin.car_types.create') }}" class="btn btn-secondary">
            {{ trans('global.create') }}
        </a>
    </x-slot:title>

    @livewire('car-type.index')

</x-layouts.app>