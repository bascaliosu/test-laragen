<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.car-type.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('car-type.edit', ['carType' => $carType])

</x-layouts.app>