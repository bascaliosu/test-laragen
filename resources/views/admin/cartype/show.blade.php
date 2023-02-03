<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.car-type.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('car-type.show', ['carType' => $carType])

</x-layouts.app>