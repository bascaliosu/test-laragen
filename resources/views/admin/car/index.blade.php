<x-layouts.app>
    <x-slot:title>
        <h1>
            {{ trans('cruds.car.title_multiple') }}        </h1>
        <a href="{{ route('laragen.admin.cars.create') }}" class="btn btn-secondary">
            {{ trans('global.create') }}
        </a>
    </x-slot:title>

    @livewire('car.index')

</x-layouts.app>