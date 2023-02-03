<x-layouts.app>

    <x-slot:title>        <h1>
            {{ trans('global.create') }}            {{ trans('cruds.car-type.title_singular') }}        </h1>
    </x-slot:title>
    @livewire('car-type.create')

</x-layouts.app>